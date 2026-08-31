<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Public\BlogController;
use App\Http\Controllers\Public\ContactController;
use App\Http\Controllers\Public\ContentController;
use App\Http\Controllers\Public\FairyTaleController;
use App\Http\Controllers\Public\FaqController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\ReadingCourseController;
use App\Http\Controllers\Public\ResourceController;
use App\Http\Controllers\Public\ScientificArticleController;
use App\Http\Controllers\Public\TestController;
use App\Http\Controllers\Public\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Static section pages
Route::get('/bolim/nazariya', fn () => view('public.nazariya.index'))->name('nazariya.index');
Route::get('/bolim/nazariya/{slug}', fn (string $slug) => view("public.nazariya.{$slug}"))->name('nazariya.show');

Route::get('/bolim/metodik', fn () => view('public.metodik.index'))->name('metodik.index');
Route::get('/bolim/metodik/{slug}', fn (string $slug) => view("public.metodik.{$slug}"))->name('metodik.show');

Route::get('/bolim/pirls-konstruktor', fn () => view('public.pirls-konstruktor.index'))->name('pirls-konstruktor.index');
Route::get('/bolim/pirls-konstruktor/{slug}', fn (string $slug) => view("public.pirls-konstruktor.{$slug}"))->name('pirls-konstruktor.show');

Route::get('/bolim/xalqaro', fn () => view('public.xalqaro.index'))->name('xalqaro.index');
Route::get('/bolim/xalqaro/{slug}', fn (string $slug) => view("public.xalqaro.{$slug}"))->name('xalqaro.show');

Route::get('/bolim/video-darslar', fn () => view('public.video-darslar.index'))->name('video-darslar.index');

Route::get('/bolim/dars-ishlanmalar', fn () => view('public.dars-ishlanmalar.index'))->name('dars-ishlanmalar.index');
Route::get('/bolim/dars-ishlanmalar/{slug}', fn (string $slug) => view("public.dars-ishlanmalar.{$slug}"))->name('dars-ishlanmalar.show');

Route::get('/bolim/diagnostika', fn () => view('public.diagnostika.index'))->name('diagnostika.index');
Route::get('/bolim/diagnostika/{slug}', fn (string $slug) => view("public.diagnostika.{$slug}"))->name('diagnostika.show');

Route::get('/bolim/sinf-strategiyalari', fn () => view('public.sinf-strategiyalari.index'))->name('sinf-strategiyalari.index');
Route::get('/bolim/sinf-strategiyalari/{slug}', fn (string $slug) => view("public.sinf-strategiyalari.{$slug}"))->name('sinf-strategiyalari.show');

Route::get('/bolim/barcha-oquvchilarga-yordam', fn () => view('public.barcha-oquvchilarga-yordam.index'))->name('barcha-oquvchilarga-yordam.index');
Route::get('/bolim/barcha-oquvchilarga-yordam/{slug}', fn (string $slug) => view("public.barcha-oquvchilarga-yordam.{$slug}"))->name('barcha-oquvchilarga-yordam.show');

Route::get('/bolim/kitoblar-mualliflar', fn () => view('public.kitoblar-mualliflar.index'))->name('kitoblar-mualliflar.index');

Route::get('/amaliyot-maydoni', fn () => view('public.amaliyot-maydoni'))->name('amaliyot-maydoni');

Route::get('/bolim/{category:slug}', [ContentController::class, 'section'])->name('sections.show');
Route::get('/sahifa/{content:slug}', [ContentController::class, 'show'])->name('contents.show');

Route::get('/resurslar', [ResourceController::class, 'index'])->name('resources.index');
Route::get('/resurslar/{resource:slug}/yuklab-olish', [ResourceController::class, 'download'])->name('resources.download');

Route::get('/ilmiy-maqolalar', [ScientificArticleController::class, 'index'])->name('articles.index');

Route::get('/101-oqish-kursi', [FairyTaleController::class, 'index'])->name('reading-course.index');
Route::get('/101-oqish-kursi/darsliklar', [ReadingCourseController::class, 'textbooks'])->name('reading-course.textbooks');

Route::get('/101-oqish-kursi/ertaklar', [FairyTaleController::class, 'index'])->name('fairy-tales.index');
Route::get('/101-oqish-kursi/ertaklar/{tale:slug}', [FairyTaleController::class, 'show'])->name('fairy-tales.show');

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
