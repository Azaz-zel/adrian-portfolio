<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Inertia\Inertia;
use Inertia\Response;

class PageController extends Controller
{
    public function home(): Response
    {
        $projects = Project::published()->with('images')->get();
        $featured = $projects->firstWhere('is_featured', true) ?? $projects->first();

        return Inertia::render('Home', [
            'meta' => $this->meta(
                'Clive Christian, full-stack developer',
                'I build full-stack web applications, from the database schema to the screen. Founder of Ralph de Vinca Group, based in Bali, Indonesia.',
                'images/profile.jpeg',
            ),
            'featured' => $featured?->toPublicArray(),
            'index' => $projects->take(4)->map->only('slug', 'title', 'category', 'year')->values(),
            'more' => $projects->reject(fn (Project $p) => $p->is($featured))->take(2)->map->toPublicArray()->values(),
        ]);
    }

    public function work(): Response
    {
        return Inertia::render('Work/Index', [
            'meta' => $this->meta(
                'Selected work',
                'Web applications and digital projects built across frontend, backend, database and user experience.',
                'images/projects/ralph-home.webp',
            ),
            'projects' => Project::published()->with('images')->get()->map->toPublicArray(),
        ]);
    }

    public function project(Project $project): Response
    {
        // Drafts stay private, but the signed-in owner can preview them.
        abort_unless($project->is_published || auth()->check(), 404);

        $published = Project::published()->get(['id', 'slug', 'title', 'cover_path']);
        $index = $published->search(fn (Project $p) => $p->is($project));
        $next = $published->count() > 1 && $index !== false ? $published[($index + 1) % $published->count()] : null;

        return Inertia::render('Work/Show', [
            'meta' => $this->meta($project->title, $project->summary, Project::url($project->cover_path)),
            'project' => $project->load('images')->toPublicArray() + ['is_published' => $project->is_published],
            'next' => $next ? ['slug' => $next->slug, 'title' => $next->title, 'cover' => Project::url($next->cover_path)] : null,
        ]);
    }

    public function about(): Response
    {
        return Inertia::render('About', [
            'meta' => $this->meta(
                'About',
                "I'm Adrian, a full-stack developer in Bali and founder of Ralph de Vinca Group.",
                'images/me.jpeg',
            ),
        ]);
    }

    public function contact(): Response
    {
        return Inertia::render('Contact', [
            'meta' => $this->meta(
                'Contact',
                'Open to web development projects, digital experiences and collaborations.',
                'images/profile.jpeg',
            ),
        ]);
    }

    /**
     * Rendered server-side by the root template so crawlers and link previews see it.
     */
    private function meta(string $title, string $description, ?string $image): array
    {
        return compact('title', 'description', 'image');
    }
}
