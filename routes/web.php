<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Base\PageController as BasePageController;
use App\Http\Controllers\Settings\SessionController; // Added this line

Route::get('/', [BasePageController::class, 'lander'])->name('lander');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', function() { return redirect()->route('profile.edit'); });
    Route::get('/settings/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/settings/avatar', [\App\Http\Controllers\Settings\AvatarController::class, 'edit'])->name('settings.avatar');
    Route::patch('/settings/avatar', [\App\Http\Controllers\Settings\AvatarController::class, 'update'])->name('settings.avatar.update');
    Route::delete('/settings/avatar', [\App\Http\Controllers\Settings\AvatarController::class, 'destroy'])->name('settings.avatar.destroy');

    Route::get('/settings/sessions', [SessionController::class, 'index'])->name('settings.sessions.index');
    Route::delete('/settings/sessions/{session}', [SessionController::class, 'destroy'])->name('settings.sessions.destroy');
    Route::post('/settings/sessions/logout-others', [SessionController::class, 'destroyAllOthers'])->name('settings.sessions.destroy-others');
});

require __DIR__.'/auth.php';