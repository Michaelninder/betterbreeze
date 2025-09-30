<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sessions = Session::where('user_id', Auth::id())->get();

        return view('settings.sessions.index', [
            'sessions' => $sessions,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Session  $session
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Session $session)
    {
        if ($session->user_id !== Auth::id()) {
            abort(403);
        }

        $session->delete();

        return redirect()->route('settings.sessions.index')
            ->with('status', 'Session invalidated successfully.');
    }

    /**
     * Remove all other sessions for the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroyAllOthers(Request $request)
    {
        Session::where('user_id', Auth::id())
            ->where('id', '!=', $request->session()->getId())
            ->delete();

        return redirect()->route('settings.sessions.index')
            ->with('status', 'All other sessions invalidated successfully.');
    }
}
