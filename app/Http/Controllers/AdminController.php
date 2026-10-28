<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('admin.index');
    }

    public function alert(): View
    {
        return view('admin.advance-sweet-alert');
    }

    public function login(): View
    {
        return view('admin.auth-login');
    }

    public function calendar(): View
    {
        return view('admin.calendar');
    }

    public function forms(): View
    {
        return view('admin.form-elements');
    }

    public function tables(): View
    {
        return view('admin.tables-datatable');
    }
}