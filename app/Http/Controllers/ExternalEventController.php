<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExternalEventController extends Controller
{
    public function view()
    {
        return view('admin.external_general');
    }

    public function create()
    {
        return view('admin.external_create');
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
