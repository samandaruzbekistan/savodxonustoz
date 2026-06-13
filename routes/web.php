<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Public\BlogController;
use App\Http\Controllers\Public\ContactController;
use App\Http\Controllers\Public\ContentController;
use App\Http\Controllers\Public\FaqController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\ResourceController;
use App\Http\Controllers\Public\TestController;
use App\Http\Controllers\Public\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/bolim/{category:slug}', [ContentController::class, 'section'])->name('sections.show');
Route::get('/sahifa/{content:slug}', [ContentController::class, 'show'])->name('contents.show');

Route::get('/resurslar', [ResourceController::class, 'index'])->name('resources.index');
Route::get('/resurslar/{resource:slug}/yuklab-olish', [ResourceController::class, 'download'])->name('resources.download');

Route::get('/videolar', [VideoController::class, 'index'])->name('videos.index');
Route::get('/videolar/{video:slug}', [VideoController::class, 'show'])->name('videos.show');
Route::get('/pleylist/{playlist:slug}', [VideoController::class, 'playlist'])->name('playlists.show');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{content:slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/testlar', [TestController::class, 'index'])->name('tests.index');

Route::middleware('auth')->group(function () {
    Route::get('/testlar/{test:slug}', [TestController::class, 'show'])->name('tests.show');
    Route::post('/testlar/{test:slug}', [TestController::class, 'submit'])->name('tests.submit');
    Route::get('/natija/{attempt}', [TestController::class, 'result'])->name('tests.result');
});

Route::get('/savol-javob', [FaqController::class, 'index'])->name('faq');

Route::get('/aloqa', [ContactController::class, 'create'])->name('contact');
Route::post('/aloqa', [ContactController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('contact.store');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    Route::get('/royxatdan-otish', [RegisterController::class, 'create'])->name('register');
    Route::post('/royxatdan-otish', [RegisterController::class, 'store'])->name('register.store');
});

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
