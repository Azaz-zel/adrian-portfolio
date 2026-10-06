<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class InboxController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Admin/Inbox', [
            'submissions' => ContactSubmission::latest('id')->paginate(20)->through(fn (ContactSubmission $s) => [
                'id' => $s->id,
                'name' => $s->name,
                'email' => $s->email,
                'message' => $s->message,
                'received' => $s->created_at->format('j M Y, H:i'),
                'replied' => $s->replied_at !== null,
            ]),
        ]);
    }

    public function toggleReplied(ContactSubmission $contactSubmission): RedirectResponse
    {
        $contactSubmission->replied_at = $contactSubmission->replied_at ? null : now();
        $contactSubmission->save();

        return back();
    }

    public function destroy(ContactSubmission $contactSubmission): RedirectResponse
    {
        $contactSubmission->delete();

        return back()->with('status', 'Message deleted.');
    }
}
