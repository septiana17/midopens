<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function view()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if(!auth()->guard('admins')->attempt($credentials)) {
            return redirect()->back()->withErrors(['message' => 'Invalid username or password']);
        } else {
            return redirect()->route('admin.dashboard');
        }
    }
}

