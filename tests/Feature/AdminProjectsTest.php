<?php

namespace Tests\Feature;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Inertia\Testing\AssertableInertia as Assert;
use Tests\TestCase;

class AdminProjectsTest extends TestCase
{
    use RefreshDatabase;

    private function admin(): static
    {
        return $this->actingAs(User::factory()->create());
    }

    private function payload(array $overrides = []): array
    {
        return $overrides + [
            'title' => 'Warung Booking',
            'category' => 'Full-stack development',
            'year' => 2026,
            'summary' => 'Table bookings for a small warung.',
            'surface' => "Booking page\nAdmin calendar",
            'position' => 4,
            'is_published' => '1',
            'is_featured' => '0',
        ];
    }

    public function test_guests_cannot_reach_the_admin(): void
    {
        $this->get('/admin/projects')->assertRedirect('/login');
        $this->post('/admin/projects', $this->payload())->assertRedirect('/login');
        $this->assertDatabaseMissing('projects', ['title' => 'Warung Booking']);
    }

    public function test_owner_creates_a_project_with_a_cover_and_it_goes_live(): void
    {
        Storage::fake('public');

        $this->admin()
            ->post('/admin/projects', $this->payload(['cover' => UploadedFile::fake()->image('cover.png', 1920, 928)]))
            ->assertRedirect('/admin/projects/warung-booking/edit');

        $project = Project::where('slug', 'warung-booking')->firstOrFail();
        Storage::disk('public')->assertExists($project->cover_path);

        $this->get('/work/warung-booking')->assertOk()->assertInertia(fn (Assert $page) => $page
            ->where('project.layers.0.items', ['Booking page', 'Admin calendar']));
    }

    public function test_only_one_project_stays_featured(): void
    {
        $this->admin()->post('/admin/projects', $this->payload(['is_featured' => '1']))->assertRedirect();

        $this->assertSame(['warung-booking'], Project::where('is_featured', true)->pluck('slug')->all());
    }

    public function test_slug_must_be_unique_and_title_is_required(): void
    {
        $this->admin()
            ->post('/admin/projects', $this->payload(['slug' => 'ralph-de-vinca', 'title' => '']))
            ->assertSessionHasErrors(['slug', 'title']);
    }

    public function test_replacing_an_uploaded_cover_deletes_the_old_file_but_never_a_seeded_one(): void
    {
        Storage::fake('public');
        $project = Project::where('slug', 'ralph-de-vinca')->firstOrFail();

        $this->admin()->put('/admin/projects/ralph-de-vinca', $this->payload([
            'title' => $project->title, 'slug' => $project->slug, 'cover' => UploadedFile::fake()->image('a.png'),
        ]))->assertRedirect();
        $first = $project->fresh()->cover_path;
        $this->assertFileExists(public_path('images/projects/ralph-home.webp'));

        $this->put('/admin/projects/ralph-de-vinca', $this->payload([
            'title' => $project->title, 'slug' => $project->slug, 'cover' => UploadedFile::fake()->image('b.png'),
        ]))->assertRedirect();
        Storage::disk('public')->assertMissing($first);
    }

    public function test_images_upload_and_a_layer_belongs_to_one_image(): void
    {
        Storage::fake('public');
        $this->admin()->post('/admin/projects', $this->payload())->assertRedirect();

        $this->post('/admin/projects/warung-booking/images', [
            'images' => [UploadedFile::fake()->image('one.png'), UploadedFile::fake()->image('two.png')],
        ])->assertRedirect();

        [$one, $two] = Project::where('slug', 'warung-booking')->first()->images;
        $this->patch("/admin/projects/warung-booking/images/{$one->id}", ['layer' => 'surface', 'caption' => 'Booking page'])->assertRedirect();
        $this->patch("/admin/projects/warung-booking/images/{$two->id}", ['layer' => 'surface'])->assertRedirect();

        $this->assertNull($one->fresh()->layer);
        $this->assertSame('surface', $two->fresh()->layer);

        $this->delete("/admin/projects/warung-booking/images/{$one->id}")->assertRedirect();
        Storage::disk('public')->assertMissing($one->path);
    }

    public function test_images_cannot_be_edited_through_another_project(): void
    {
        $image = Project::where('slug', 'ralph-de-vinca')->first()->images->first();

        $this->admin()->delete("/admin/projects/pkkmb-instiki/images/{$image->id}")->assertNotFound();
        $this->assertModelExists($image);
    }

    public function test_non_image_uploads_are_rejected(): void
    {
        $this->admin()
            ->post('/admin/projects/ralph-de-vinca/images', ['images' => [UploadedFile::fake()->create('notes.pdf', 10, 'application/pdf')]])
            ->assertSessionHasErrors('images.0');
    }

    public function test_deleting_a_project_removes_it_from_the_site(): void
    {
        $this->admin()->delete('/admin/projects/bali-cebelok-gesiuh')->assertRedirect('/admin/projects');

        $this->assertDatabaseMissing('projects', ['slug' => 'bali-cebelok-gesiuh']);
        $this->assertDatabaseMissing('project_images', ['path' => 'images/projects/cebelok-story.webp']);
        $this->assertFileExists(public_path('images/projects/cebelok-story.webp'));
    }
}
