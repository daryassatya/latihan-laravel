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

    public function detail(Post $post)
    {
        // Route Model Binding(Mengquery otomatis)
        // $post harus sama dengan yang dikirim di route yaitu {post}
        // Route::get('/posts/{post}', [PostController::class, 'detail'])->name('post.detail');
        return view('post', [
            'title' => 'Post Detail',
            'posts' => $post,
        ]);
    }
}
