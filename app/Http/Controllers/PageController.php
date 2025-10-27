<?php

namespace App\Http\Controllers;

use App\Models\{User, Session};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function lander()
    {
        $stats = [
            'total_users' => User::count(),
        ];

        return view('pages.lander', compact('stats'));
    }

    public function legal(string $section)
    {
        $validSections = config('app.legal_sections', ['terms', 'privacy', 'cookies', 'imprint']);

        if (!in_array($section, $validSections)) {
            abort(404);
        }

        return view('pages.legal', compact('section', 'validSections'));
    }

    public function dismissSuggestion(Request $request)
    {
        $request->session()->put('locale_suggestion_dismissed', true);

        return response()->noContent();
    }

    public function error(string $code)
    {
        return view('pages.error', compact('code'));
    }
#
    public function setLocale(Request $request, string $locale)
    {
        if (in_array($locale, array_keys(config('app.locales')))) {
            session(['locale' => $locale]);

            if (app()->getLocale() !== $locale) {
                session()->flash('success', __('settings.notifications.locale_switched', ['locale' => config('app.locales')[$locale]]));
            }
        }

        return redirect()->back();
    }

    public function dashboard()
    {
        $organisations = Auth::user()->organisations()->get();

        return view('pages.dashboard', compact('organisations'));
    }

    public function sitemap()
    {
        $pages = [
            ['route' => 'pages.lander', 'title' => 'Home'],
            ['route' => 'login', 'title' => 'Login'],
            ['route' => 'register', 'title' => 'Register'],
        ];

        $legalSections = config('app.legal_sections', ['terms', 'privacy', 'cookies', 'imprint']);

        return view('pages.sitemap', compact('pages', 'legalSections'));
    }

    public function sitemapXml()
    {
        $pages = [
            ['route' => 'pages.lander'],
            ['route' => 'login'],
            ['route' => 'register'],
        ];

        $legalSections = config('app.legal_sections', ['terms', 'privacy', 'cookies', 'imprint']);

        return response()->view('pages.sitemap_xml', compact('pages', 'legalSections'))
            ->header('Content-Type', 'application/xml');
    }
    public function status()
    {
        try {
            DB::connection()->getPdo();
            $dbStatus = 'OK';
        } catch (\Exception $e) {
            $dbStatus = 'Error: ' . $e->getMessage();
        }

        $models = [
            'user' => User::count(),
            'session' => Session::count(),
        ];

        return view('pages.status', compact('dbStatus', 'storageStatus', 'models'));
    }

    public function apiStatus(Request $request)
    {
        $uptime = null;
        try {
            DB::connection()->getPdo();
            $db = ['status' => 'ok'];
        } catch (\Exception $e) {
            $db = ['status' => 'error', 'message' => $e->getMessage()];
        }

        $models = [
            'user' => User::count(),
            'session' => Session::count(),
        ];

        $payload = [
            'app' => config('app.name'),
            //'time' => now('Europe/Berlin')->toIso8601String(),
            'time' => now()->toIso8601String(),
            'database' => $db,
            'models' => $models,
        ];

        return response()->json($payload);
    }
}