<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController as PageController;
use App\Http\Controllers\Settings\AvatarController as SettingsAvatarController;
use App\Http\Controllers\Settings\SessionController as SettingsSessionController;
use App\Http\Controllers\Settings\ProfileController as SettingsProfileController;
use App\Http\Controllers\Settings\PasswordController as SettingsPasswordController;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return redirect()->route('pages.lander');
})->name('home');

Route::get('/lander', [PageController::class, 'lander'])->name('pages.lander');
Route::get('/legal/{section}', [PageController::class, 'legal'])->name('pages.legal');
Route::get('/error/{code}', [PageController::class, 'error'])->name('pages.error');
Route::get('locale/{locale}', [PageController::class, 'setLocale'])->name('locale.set');
Route::post('locale/dismiss', [PageController::class, 'dismissSuggestion'])->name('locale.dismiss');
Route::get('/sitemap', [PageController::class, 'sitemap'])->name('pages.sitemap');
Route::get('/sitemap.xml', [PageController::class, 'sitemapXml'])->name('pages.sitemap.xml');
Route::get('/sitemap/raw', [PageController::class, 'sitemapXml']);
Route::get('/status', [PageController::class, 'status'])->name('pages.status');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('pages.dashboard');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::redirect('/settings', '/settings/profile')->name('profile.edit');
    Route::get('/settings/profile', [SettingsProfileController::class, 'edit'])->name('settings.profile');
    Route::patch('/settings/profile', [SettingsProfileController::class, 'update'])->name('settings.profile.update');
    Route::delete('/settings/profile', [SettingsProfileController::class, 'destroy'])->name('settings.profile.destroy');

    Route::get('/settings/password', [SettingsPasswordController::class, 'edit'])->name('settings.password');
    Route::put('/settings/password', [SettingsPasswordController::class, 'update'])->name('settings.password.update');
    Route::get('/settings/avatar', [SettingsAvatarController::class, 'edit'])->name('settings.avatar');
    Route::patch('/settings/avatar', [SettingsAvatarController::class, 'update'])->name('settings.avatar.update');
    Route::delete('/settings/avatar', [SettingsAvatarController::class, 'destroy'])->name('settings.avatar.destroy');
    Route::get('/settings/sessions', [SettingsSessionController::class, 'index'])->name('settings.sessions.index');
    Route::delete('/settings/sessions/{session}', [SettingsSessionController::class, 'destroy'])->name('settings.sessions.destroy');
    Route::delete('/settings/sessions/logout-others', [SettingsSessionController::class, 'destroyAllOthers'])->name('settings.sessions.destroy-others');
});

require __DIR__.'/auth.php';

Route::get('/test-error', function () {
    abort(403);
});