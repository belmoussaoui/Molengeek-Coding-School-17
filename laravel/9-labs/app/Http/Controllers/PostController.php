<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\Post;
use App\Notifications\NewPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(3);
        return view('backoffice.post.all', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->description = '';

        if ($request->file('thumbnail')) {
            $post->thumbnail = $request->file('thumbnail')->hashName();
            $request->file('thumbnail')->storePublicly('img/blog', 'public');
        } else {
            $post->thumbnail = 'blog-1.jpg';
        }
        $post->user_id = Auth::user()->id;
        $post->created_at = now();
        if (Auth::user()->role_id === 3) {
            $post->validation = false;
        }
        $post->save();

        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);


        if (Auth::user()->role_id !== 3) {
            $this->sendMail($post);
            return redirect()->route('posts.index');
        }

        return redirect()->route('posts.index')->with('message', 'The Post has been created.');
    }

    public function validation($id) {
        $post = Post::find($id);
        $post->validation = true;
        $post->save();
        $this->sendMail($post);
        return redirect()->route('posts.index');
    }

    public function sendMail($post) {
        $newsletter = Newsletter::all();
        $newPost = [
            'message' => 'A new post in labs!',
            'url' => $post->title,
        ];
        Notification::send($newsletter, new NewPost($newPost));
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize("post-gate", $post);
        return view('backoffice.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->title = $request->title;
        $post->content = $request->content;

        if ($request->file('thumbnail')) {
            Storage::disk('public')->delete('img/blog/' . $post->thumbnail);
            $post->thumbnail = $request->file('thumbnail')->hashName();
            $request->file('thumbnail')->storePublicly('img/blog', 'public');
        }
        $post->user_id = Auth::user()->id;
        $post->created_at = now();
        $post->save();

        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);


    
        return redirect()->route('posts.index')->with('message', 'The Post has been created.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize("post-gate", $post);
        Storage::disk('public')->delete('img/blog/' . $post->thumbnail);
        $post->categories()->detach();
        $post->tags()->detach();
        $post->delete();
        return redirect()->back();
    }
}
