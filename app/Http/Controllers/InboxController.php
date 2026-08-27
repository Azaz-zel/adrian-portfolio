<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class InboxController extends Controller
{
    public function index(): View
    {
        $submissions = ContactSubmission::latest('id')->paginate(20);

        $awaitingReplyCount = ContactSubmission::whereNull('replied_at')->count();

        return view('pages.inbox', compact('submissions', 'awaitingReplyCount'));
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
