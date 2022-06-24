<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Content;

class ContentController extends Controller
{
    public function view()
    {
        return view('admin.post_request');
    }

    // public function viewText($id)
    // {
    //     $content = Content::where('type', '=', 'text')->find($id);
    //     return view('view_text', compact('content'));
    // }
    public function viewVideo($id)
    {
        $content = Content::where('type', '=', 'video')->find($id);
        return view('view_picture', compact('content'));
    }
    public function viewImage($id)
    {
        $content = Content::where('type', '=', 'image')->find($id);
        return view('view_video', compact('content'));
    }

    public function liked(Request $request)
    {
        $like = new Like();
        $like->user_id = Auth::user()->id;
        $like->content_id = $request->content_id;
        $like->save();
    }

    public function unlike($id)
    {
        $like = Like::find($id);
        $like->delete();
    }
}
