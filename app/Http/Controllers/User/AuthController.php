<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function login(){
        return view('user.auth.login');
    }

    public function register(){
        return view('user.auth.register_mahasiswa');
    }

    public function register_pengunjung(){
        return view('user.auth.register_pengunjung');
    }
}
