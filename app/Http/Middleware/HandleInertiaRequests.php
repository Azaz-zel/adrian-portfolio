<?php

namespace App\Http\Middleware;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'app';

    /**
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return [
            ...parent::share($request),
            'auth' => fn () => $request->user()?->only('name', 'email'),
            'flash' => fn () => ['status' => $request->session()->get('status')],
            'awaitingReply' => fn () => $request->user() ? ContactSubmission::whereNull('replied_at')->count() : null,
        ];
    }
}
