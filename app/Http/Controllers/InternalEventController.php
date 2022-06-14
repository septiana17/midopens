<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InternalEventController extends Controller
{
    public function view()
    {
        return view('admin.internal_general');
    }

    public function create()
    {
        return view('admin.internal_create');
    }

    public function store(Request $request)
    {
        //
    }
    
    public function update()
    {
        # code...
    }

    public function edit($id)
    {
        //
    }
}
