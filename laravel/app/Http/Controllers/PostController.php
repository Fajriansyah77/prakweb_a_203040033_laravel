<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
    public function index ()
    {
        return view('posts', [
            "title" => "Posts",
             // 'posts' => Post::all(),
            'posts' => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
