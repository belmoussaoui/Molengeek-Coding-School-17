<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\User;
use App\Notifications\NewPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NewPostController extends Controller
{
    public function sendMail() {
        $newsletter = Newsletter::all();
        $newPost = [
            // 'message' => 'A new post in labs',
            // 'url' =>
        ];
        Notification::send($newsletter, new NewPost($newPost));
        return redirect()->route('posts.index');
    }
}
