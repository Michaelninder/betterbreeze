<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    /**
     * Display the avatar settings page.
     */
    public function avatar(Request $request): View
    {
        return view('settings.avatar.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's avatar.
     */
    public function avatarUpdate(Request $request): RedirectResponse
    {
        $request->validate([
            'avatar' => ['required', 'image', 'max:1024'],
        ]);

        $user = $request->user();

        if ($user->avatar_path) {
            Storage::disk('public')->delete($user->avatar_path);
        }

        $user->update([
            'avatar_path' => $request->file('avatar')->store('avatars', 'public'),
        ]);

        return Redirect::route('settings.avatar')->with('status', 'avatar-updated');
    }

    /**
     * Delete the user's avatar.
     */
    public function avatarDestroy(Request $request): RedirectResponse
    {
        $user = $request->user();

        if ($user->avatar_path) {
            Storage::disk('public')->delete($user->avatar_path);
            $user->update(['avatar_path' => null]);
        }

        return Redirect::route('settings.avatar')->with('status', 'avatar-removed');
    }
}
