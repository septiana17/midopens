<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Category;

class DashboardController extends Controller
{
    public function viewDashboard()
    {
        return view('admin.dashboard');
    }

    public function viewPublic()
    {
        $data = [
            'title' => 'Informasi Publik',
            'contents' => Content::where('page', 'public')->get(),
        ];
        return view('admin.public_general', $data);
    }

    public function viewInternal()
    {
        $data = [
            'title' => 'Internal Information',
            'contents' => Content::where('page', 'internal')->get(),
        ];
        return view('admin.internal_general', $data);
    }

    public function viewExternal()
    {
        $data = [
            'title' => 'External Information',
            'contents' => Content::where('page', 'external')->get(),
        ];
        return view('admin.external_general', $data);
    }

    public function createPublic()
    {
        $data = [
            'categories' => Category::all(),
        ];
        return view('admin.public_create', $data);
    }

    public function createInternal()
    {
        $data = [
            'categories' => Category::all(),
        ];
        return view('admin.internal_create', $data);
    }

    public function createExternal()
    {
        $data = [
            'categories' => Category::all(),
        ];
        return view('admin.external_create', $data);
    }   

    public function store(Request $request)
    {
        $data = $request->all();
        
        $content = Content::create($data);
        return redirect()->back()->with('success', 'Content created successfully');
    }

    public function editPublic($id)
    {
        $data = Content::find($id);
        return view('admin.public_edit', ['data' => $data, 'categories' => Category::all()]);
    }

    public function editInternal($id)
    {
        $data = Content::find($id);
        return view('admin.internal_edit', ['data' => $data, 'categories' => Category::all()]);
    }

    public function editExternal($id)
    {
        $data = Content::find($id);
        return view('admin.external_edit', ['data' => $data, 'categories' => Category::all()]);
    }
    
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $content = Content::find($id);
        $content->update($data);
        return redirect()->route('admin.public_general')->with('success', 'Content updated successfully');
    }

    public function delete($id)
    {
        $content = Content::find($id);
        $content->delete();
        return redirect()->back()->with('success', 'Content deleted successfully');
    }

    public function createCategory(Request $request)
    {
        $data = $request->all();
        Category::create($data);
        return redirect()->back();
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }



}
