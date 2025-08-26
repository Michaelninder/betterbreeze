<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function lander()
    {
        return view('pages.lander');
    }

    public function dashboard()
    {
        return view('pages.dashboard');
    }
}