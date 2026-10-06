<?php

use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\ProjectImageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\PageController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/work', [PageController::class, 'work'])->name('work');
Route::get('/work/{project}', [PageController::class, 'project'])->name('work.show');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/robots.txt', function () {
    $body = implode("\n", [
        'User-agent: *',
        'Disallow: /login',
        'Disallow: /inbox',
        'Disallow: /admin',
        '',
        'Sitemap: '.route('sitemap'),
        '',
    ]);

    return response($body)->header('Content-Type', 'text/plain');
})->name('robots');

Route::get('/sitemap.xml', function () {
    $urls = collect([
        ['loc' => route('home'), 'priority' => '1.0'],
        ['loc' => route('work'), 'priority' => '0.9'],
    ])
        ->concat(Project::published()->get()->map(fn (Project $p) => ['loc' => route('work.show', $p), 'priority' => '0.8']))
        ->concat([
            ['loc' => route('about'), 'priority' => '0.7'],
            ['loc' => route('contact'), 'priority' => '0.7'],
        ]);

    return response()
        ->view('sitemap', ['urls' => $urls])
        ->header('Content-Type', 'application/xml');
})->name('sitemap');

Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contact.store');

Route::get('/login', [AuthController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthController::class, 'store'])
    ->middleware(['guest', 'throttle:5,1'])
    ->name('login.store');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

    Route::get('/inbox', [InboxController::class, 'index'])->name('inbox');
    Route::patch('/inbox/{contactSubmission}/toggle-replied', [InboxController::class, 'toggleReplied'])->name('inbox.toggle-replied');
    Route::delete('/inbox/{contactSubmission}', [InboxController::class, 'destroy'])->name('inbox.destroy');

    Route::prefix('admin')->name('admin.')->scopeBindings()->group(function () {
        Route::resource('projects', AdminProjectController::class)->except('show');
        Route::post('projects/{project}/images', [ProjectImageController::class, 'store'])->name('projects.images.store');
        Route::patch('projects/{project}/images/{image}', [ProjectImageController::class, 'update'])->name('projects.images.update');
        Route::delete('projects/{project}/images/{image}', [ProjectImageController::class, 'destroy'])->name('projects.images.destroy');
    });
});
