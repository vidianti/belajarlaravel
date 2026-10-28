<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LandingController extends Controller
{
    public function index(): View
    {
        return view('landing.index');
    }

    public function about(): View
    {
        return view('landing.about');
    }

    public function services(): View
    {
        return view('landing.service');
    }

    public function menu(): View
    {
        return view('landing.menu');
    }

    public function booking(): View
    {
        return view('landing.booking');
    }

    public function team(): View
    {
        return view('landing.team');
    }
}