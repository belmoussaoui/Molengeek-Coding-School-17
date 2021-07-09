<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Hero;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function view($posts) {
        $header = Header::first();
        $hero = Hero::first();
        $categories = Category::all();
        $tags = Tag::all();
        $footer = Footer::first();
        return view('blog', compact('header', 'hero', 'posts', 'categories', 'tags', 'footer'));
    }

    public function index() {
        return $this->view(Post::where('validation', true)->latest()->paginate(3));
    }

    public function category($id) {
        $category = Category::find($id);
        $posts = $category->posts()->where('validation', true)->latest()->paginate(3);
        return $this->view($posts);
    }
    
    public function tag($id) {
        $tag = Tag::find($id);
        $posts = $tag->posts()->where('validation', true)->latest()->paginate(3);
        return $this->view($posts);
    }

    public function search(Request $request) {
        $search = $request->search;
        $posts = Post::query()->where([['title', 'LIKE', "%{$search}%"], ['validation', true]])->latest()->paginate(3);
        return $this->view($posts);
    }
}