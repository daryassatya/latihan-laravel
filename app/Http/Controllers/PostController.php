<?php

namespace App\Http\Controllers;

use App\Models\Post;

// Tahap 4 - 06/05/2022

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Posts',
            'posts' => Post::all(),
        ]);
    }

    public function detail($slug)
    {
        return view('post', [
            'title' => 'Post Detail',
            'posts' => Post::find($slug),
        ]);
    }
}
