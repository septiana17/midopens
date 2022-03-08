<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('layouts.master');
    }

    public function loginView()
    {
        return view('admin.login');
    }

    public function login()
    {
        return view('layouts.master');
    }
}

