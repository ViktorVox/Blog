<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::latest()->take(6)->get();
        return view('home', ['posts' => $posts]);
    }

    public function allPosts() {
        $posts = Post::latest()->get();
        return view('posts', ['posts' => $posts]);
    }

    public function show($id) {
        $post = Post::findOrFail($id);
        return view('show', ['post' => $post]);
    }

    public function about() {
        return view('about');
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request){
        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'published_at' => now()
        ]);

        return redirect('/');
    }
}
