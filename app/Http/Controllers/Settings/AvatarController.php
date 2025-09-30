<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
}