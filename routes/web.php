<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InboxController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home', [
    'title' => 'Clive Christian — Full-Stack Developer Portfolio',
    'description' => 'I build full-stack web applications that combine reliable backend systems, thoughtful interfaces, and practical functionality. Based in Bali, Indonesia.',
    'ogImage' => 'images/profile.jpeg',
])->name('home');

Route::view('/work', 'pages.work', [
    'title' => 'Selected Work — Clive Christian',
    'description' => 'A selection of web applications and digital projects built across frontend, backend, database, and user experience.',
    'ogImage' => 'images/projects/ralph-home.webp',
])->name('work');

Route::view('/work/ralph-de-vinca', 'pages.work.ralph', [
    'title' => 'Ralph de Vinca — Perfumery | Clive Christian',
    'description' => 'A fragrance platform combining structured content, database-driven perfume information, and a refined responsive interface.',
    'ogImage' => 'images/projects/ralph-home.webp',
])->name('work.ralph');

Route::view('/work/bali-cebelok-gesiuh', 'pages.work.bali-cebelok', [
    'title' => 'Bali Cebelok Gesiuh — Traditional Coconut Oil Experience | Clive Christian',
    'description' => "A digital experience introducing visitors to Bali's traditional coconut oil making process and guiding them toward the booking experience.",
    'ogImage' => 'images/projects/balicebelok.webp',
])->name('work.bali-cebelok');

Route::view('/work/pkkmb-instiki', 'pages.work.pkkmb', [
    'title' => 'PKKMB INSTIKI 2026 — Student Attendance System | Clive Christian',
    'description' => 'A centralized attendance platform designed to manage student attendance, classes, sessions, and administrative access during PKKMB.',
    'ogImage' => 'images/projects/absensi-mahasiswa.webp',
])->name('work.pkkmb');

Route::view('/about', 'pages.about', [
    'title' => 'About — Clive Christian',
    'description' => "I'm Adrian, a web developer and digital creator focused on building thoughtful, functional, and visually refined digital experiences.",
    'ogImage' => 'images/me.jpeg',
])->name('about');

Route::view('/contact', 'pages.contact', [
    'title' => 'Contact — Clive Christian',
    'description' => "I'm open to web development projects, digital experiences, and creative collaborations. Let's talk.",
    'ogImage' => 'images/profile.jpeg',
])->name('contact');

Route::get('/robots.txt', function () {
    $body = implode("\n", [
        'User-agent: *',
        'Disallow: /login',
        'Disallow: /inbox',
        '',
        'Sitemap: '.route('sitemap'),
        '',
    ]);

    return response($body)->header('Content-Type', 'text/plain');
})->name('robots');

Route::get('/sitemap.xml', function () {
    $pages = [
        ['home', '1.0'],
        ['work', '0.9'],
        ['work.ralph', '0.8'],
        ['work.bali-cebelok', '0.8'],
        ['work.pkkmb', '0.8'],
        ['about', '0.7'],
        ['contact', '0.7'],
    ];

    $urls = collect($pages)->map(fn ($p) => [
        'loc' => route($p[0]),
        'priority' => $p[1],
    ]);

    return response()
        ->view('sitemap', ['urls' => $urls])
        ->header('Content-Type', 'application/xml');
})->name('sitemap');

Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.store');

// Admin — view contact form submissions.
Route::get('/login', [AuthController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthController::class, 'store'])
    ->middleware(['guest', 'throttle:5,1'])
    ->name('login.store');

Route::post('/logout', [AuthController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/inbox', [InboxController::class, 'index'])
    ->middleware('auth')
    ->name('inbox');

Route::patch('/inbox/{contactSubmission}/toggle-replied', [InboxController::class, 'toggleReplied'])
    ->middleware('auth')
    ->name('inbox.toggle-replied');

Route::delete('/inbox/{contactSubmission}', [InboxController::class, 'destroy'])
    ->middleware('auth')
    ->name('inbox.destroy');
