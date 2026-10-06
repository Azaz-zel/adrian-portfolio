<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class ProjectController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Admin/Projects/Index', [
            'projects' => Project::orderBy('position')->orderBy('id')->get()->map(fn (Project $p) => [
                'id' => $p->id,
                'slug' => $p->slug,
                'title' => $p->title,
                'category' => $p->category,
                'position' => $p->position,
                'is_published' => $p->is_published,
                'is_featured' => $p->is_featured,
                'cover' => Project::url($p->cover_path),
            ]),
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Admin/Projects/Form', [
            'project' => null,
            'nextPosition' => (int) Project::max('position') + 1,
            'layers' => Project::LAYERS,
        ]);
    }

    public function store(ProjectRequest $request): RedirectResponse
    {
        $project = Project::create($this->attributes($request));
        $this->keepSingleFeatured($project);

        return redirect()->route('admin.projects.edit', $project)
            ->with('status', 'Project created. Add images below.');
    }

    public function edit(Project $project): Response
    {
        return Inertia::render('Admin/Projects/Form', [
            'project' => $project->only([
                'id', 'slug', 'title', 'category', 'year', 'role', 'summary', 'body', 'live_url', 'stack',
                'surface', 'function', 'foundation', 'is_published', 'is_featured', 'position',
            ]) + [
                'cover' => Project::url($project->cover_path),
                'images' => $project->images->map(fn (ProjectImage $image) => [
                    'id' => $image->id,
                    'url' => Project::url($image->path),
                    'caption' => $image->caption,
                    'layer' => $image->layer,
                ]),
            ],
            'layers' => Project::LAYERS,
        ]);
    }

    public function update(ProjectRequest $request, Project $project): RedirectResponse
    {
        $oldCover = $project->cover_path;
        $project->update($this->attributes($request));

        if ($project->cover_path !== $oldCover) {
            Project::deleteFile($oldCover);
        }

        $this->keepSingleFeatured($project);

        return redirect()->route('admin.projects.edit', $project)->with('status', 'Changes saved.');
    }

    public function destroy(Project $project): RedirectResponse
    {
        Project::deleteFile($project->cover_path);
        $project->images->each(fn (ProjectImage $image) => Project::deleteFile($image->path));
        $project->delete();

        return redirect()->route('admin.projects.index')->with('status', "Deleted \"{$project->title}\".");
    }

    private function attributes(ProjectRequest $request): array
    {
        $data = collect($request->validated())->except('cover')->all();

        if ($request->hasFile('cover')) {
            $data['cover_path'] = $request->file('cover')->store('projects', config('filesystems.media'));
        }

        return $data;
    }

    private function keepSingleFeatured(Project $project): void
    {
        if ($project->is_featured) {
            Project::whereKeyNot($project->getKey())->update(['is_featured' => false]);
        }
    }
}
