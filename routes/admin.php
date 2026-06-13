<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\PlaylistController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('categories', CategoryController::class)->except('show');
Route::resource('contents', ContentController::class)->except('show');
Route::resource('resources', ResourceController::class)->except('show');
Route::resource('videos', VideoController::class)->except('show');
Route::resource('playlists', PlaylistController::class)->except('show');
Route::resource('tests', TestController::class)->except('show');
Route::resource('tests.questions', QuestionController::class)->except('show');

Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');

Route::get('messages', [ContactMessageController::class, 'index'])->name('messages.index');
Route::get('messages/{message}', [ContactMessageController::class, 'show'])->name('messages.show');
Route::delete('messages/{message}', [ContactMessageController::class, 'destroy'])->name('messages.destroy');

Route::post('media', [MediaController::class, 'store'])->name('media.store');
