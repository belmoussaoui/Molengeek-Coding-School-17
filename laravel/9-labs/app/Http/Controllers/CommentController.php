<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store($id, Request $request) {
        
        $request->validate([
            'message' => 'required',
        ]);
        $comment = new Comment();

        $comment->message = $request->message;
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $id;

        $comment->created_at = now();
        $comment->save();
        return redirect()->back();

    }
}
