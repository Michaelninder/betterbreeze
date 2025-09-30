<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AvatarController extends Controller
{
    /**
     * Display the avatar settings page.
     */
    public function edit(Request $request): View
    {
        return view('settings.avatar.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's avatar.
     */
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'avatar' => ['required', 'image', 'max:1024'],
        ]);

        $request->user()->update([
            'avatar_path' => $request->file('avatar')->store('avatars', 'public'),
        ]);

        return Redirect::route('settings.avatar')->with('status', 'avatar-updated');
    }
}