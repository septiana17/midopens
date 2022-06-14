<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function view()
    {
        return view('admin.post_request');
    }
}
