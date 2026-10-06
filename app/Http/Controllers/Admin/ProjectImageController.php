<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProjectImageController extends Controller
{
    public function store(Request $request, Project $project): RedirectResponse
    {
        $request->validate([
            'images' => ['required', 'array', 'max:12'],
            'images.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ], [], ['images.*' => 'image']);

        $position = (int) $project->images()->max('position');

        foreach ($request->file('images') as $file) {
            $project->images()->create([
                'path' => $file->store('projects', config('filesystems.media')),
                'position' => ++$position,
            ]);
        }

        return back()->with('status', 'Images added.');
    }

    public function update(Request $request, Project $project, ProjectImage $image): RedirectResponse
    {
        $data = $request->validate([
            'caption' => ['nullable', 'string', 'max:200'],
            'layer' => ['nullable', Rule::in(Project::LAYERS)],
        ]);

        // A layer tab shows one image, so a layer belongs to one image at a time.
        if ($data['layer'] ?? null) {
            $project->images()->whereKeyNot($image->getKey())->where('layer', $data['layer'])->update(['layer' => null]);
        }

        $image->update($data);

        return back()->with('status', 'Image updated.');
    }

    public function destroy(Project $project, ProjectImage $image): RedirectResponse
    {
        Project::deleteFile($image->path);
        $image->delete();

        return back()->with('status', 'Image removed.');
    }
}
