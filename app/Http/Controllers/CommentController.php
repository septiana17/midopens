<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //

    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->post_id = $request->post_id;
        $comment->user_id = Auth::user()->id;
        $comment->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);
        $comment->comment = $request->comment;
        $comment->save();

        return redirect()->back();
    }
}
