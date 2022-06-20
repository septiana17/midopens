<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;

class PublicInformationController extends Controller
{
    public function view()
    {
        return view('admin.public_general');
    }

    public function create()
    {
        return view('admin.public_create');
    }

    // public function createMedia()
    // {
    //     return view('admin.public_media');
    // }

    public function store(Request $request)
    {
        $data = $request->all();
        $content = Content::create($data);
        return redirect()->route('admin.public_general')->with('success', 'Content created successfully');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $content = Content::find($id);
        $content->update($data);
    }

    public function edit($id)
    {
        $data = Content::find($id);
        return view('admin.public_edit', ['data' => $data]);
    }
}
