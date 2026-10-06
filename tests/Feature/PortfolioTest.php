<?php

namespace Tests\Feature;

use App\Mail\ContactMessage;
use App\Models\ContactSubmission;
use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Inertia\Testing\AssertableInertia as Assert;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_leads_with_the_featured_project(): void
    {
        $this->get('/')->assertOk()->assertInertia(fn (Assert $page) => $page
            ->component('Home')
            ->where('featured.slug', 'ralph-de-vinca')
            ->has('featured.layers', 3)
            ->has('more', 2)
            ->where('meta.image', 'images/profile.jpeg'));
    }

    public function test_old_case_study_urls_still_work(): void
    {
        foreach (['ralph-de-vinca', 'bali-cebelok-gesiuh', 'pkkmb-instiki'] as $slug) {
            $this->get("/work/{$slug}")->assertOk()->assertInertia(fn (Assert $page) => $page
                ->component('Work/Show')
                ->where('project.slug', $slug)
                ->has('next.slug'));
        }
    }

    public function test_layers_carry_their_own_screenshots(): void
    {
        $this->get('/work/ralph-de-vinca')->assertInertia(fn (Assert $page) => $page
            ->where('project.layers.0.image', asset('images/projects/ralph-detail.webp'))
            ->where('project.layers.1.image', asset('images/projects/ralph-explore.webp'))
            ->where('project.layers.2.image', null));
    }

    public function test_drafts_are_hidden_from_visitors_but_previewable_by_the_owner(): void
    {
        Project::where('slug', 'pkkmb-instiki')->update(['is_published' => false]);

        $this->get('/work/pkkmb-instiki')->assertNotFound();
        $this->get('/sitemap.xml')->assertOk()->assertDontSee('pkkmb-instiki');
        $this->get('/work')->assertInertia(fn (Assert $page) => $page->has('projects', 2));

        $this->actingAs(User::factory()->create())
            ->get('/work/pkkmb-instiki')
            ->assertOk()
            ->assertInertia(fn (Assert $page) => $page->where('project.is_published', false));
    }

    public function test_sitemap_lists_published_projects(): void
    {
        $this->get('/sitemap.xml')
            ->assertOk()
            ->assertHeader('Content-Type', 'application/xml')
            ->assertSee(url('/work/bali-cebelok-gesiuh'));
    }

    public function test_contact_form_stores_the_message_and_emails_it(): void
    {
        Mail::fake();

        $this->post('/contact', ['name' => 'Wayan', 'email' => 'wayan@example.com', 'message' => 'I need a booking site.'])
            ->assertRedirect('/contact')
            ->assertSessionHas('status');

        $this->assertDatabaseHas('contact_submissions', ['email' => 'wayan@example.com']);
        Mail::assertSent(ContactMessage::class);
    }

    public function test_contact_honeypot_pretends_success_but_keeps_nothing(): void
    {
        Mail::fake();

        $this->post('/contact', ['name' => 'Bot', 'email' => 'bot@example.com', 'message' => 'spam', 'website' => 'http://spam.test'])
            ->assertRedirect('/contact')
            ->assertSessionHas('status');

        $this->assertDatabaseCount('contact_submissions', 0);
        Mail::assertNothingSent();
    }

    public function test_contact_form_validates_input(): void
    {
        $this->post('/contact', ['name' => '', 'email' => 'not-an-email', 'message' => ''])
            ->assertSessionHasErrors(['name', 'email', 'message']);
    }

    public function test_inbox_requires_sign_in_and_toggles_replied(): void
    {
        $submission = ContactSubmission::create(['name' => 'Made', 'email' => 'made@example.com', 'message' => 'Hello']);

        $this->get('/inbox')->assertRedirect('/login');

        $user = User::factory()->create();
        $this->actingAs($user)->get('/inbox')->assertInertia(fn (Assert $page) => $page
            ->component('Admin/Inbox')
            ->has('submissions.data', 1)
            ->where('awaitingReply', 1));

        $this->actingAs($user)->patch("/inbox/{$submission->id}/toggle-replied")->assertRedirect();
        $this->assertNotNull($submission->fresh()->replied_at);
    }
}
