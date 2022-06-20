<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function viewLogin(){
        return view('user.auth.login');
    }

    public function viewRegister(){
        return view('user.auth.register_mahasiswa');
    }

    public function register_pengunjung(){
        return view('user.auth.register_pengunjung');
    }
}
