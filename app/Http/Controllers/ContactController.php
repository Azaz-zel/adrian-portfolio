<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactMessage;
use App\Models\ContactSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $redirect = redirect(route('contact').'#send-message');

        $status = "Thanks — your message has been sent. I'll get back to you soon.";

        // Honeypot: bots fill this hidden field, real visitors never see it.
        // Pretend success without saving or sending so bots get no useful feedback.
        if (filled($validated['website'] ?? null)) {
            return $redirect->with('status', $status);
        }

        $submission = ContactSubmission::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        try {
            Mail::to(config('mail.contact_recipient'))->send(new ContactMessage(
                name: $submission->name,
                email: $submission->email,
                body: $submission->message,
            ));
        } catch (Throwable $e) {
            // The submission is already saved, so a mail outage never loses the message.
            report($e);
        }

        return $redirect->with('status', $status);
    }
}
