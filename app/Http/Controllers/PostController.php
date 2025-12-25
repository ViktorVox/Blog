<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('create_post'); 
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:10',
        ]);

        Post::create([
            'title' => $data['title'],
            'description' => $data['content'],
            'image_url' => 'https://placehold.co/600x400', 
        ]);

        return redirect('/');
    }
}