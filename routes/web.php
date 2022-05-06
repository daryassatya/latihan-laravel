<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// First Default Routes
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        'title' => "Home",
    ]);
});
Route::get('/posts', function () {

    // Data Dummy
    $blog_posts = [
        [
            'title' => "Post Pertama",
            'slug' => "post-pertama",
            'author' => "Dimas Aryasatya",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Unde maiores dignissimos possimus error ad, quam dolor sit totam similique ipsum tempore magnam enim repellendus ut dolorum a autem quod? Ex.",
        ],
        [
            'title' => "Post Kedua",
            'slug' => "post-kedua",
            'author' => "Dimas Aryasatya",
            'body' => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor placeat atque accusamus delectus? Obcaecati dolorem molestias pariatur voluptas ea dolore libero qui soluta necessitatibus? Assumenda, aspernatur? Repellendus ad sit totam voluptatem, fuga deserunt veniam saepe optio quia. Adipisci doloremque voluptatibus temporibus. Saepe tenetur ex aspernatur minus ea asperiores. Ex nemo, eaque perferendis repellat beatae excepturi consequuntur ea dignissimos illo nesciunt vitae incidunt voluptates aliquid culpa neque corporis omnis facilis pariatur dolores similique totam aperiam laudantium. Voluptates est incidunt perferendis maiores ullam praesentium eveniet ipsum deleniti cupiditate doloribus, mollitia itaque molestiae magnam, odit et. Accusantium, ex? Fugit quaerat repellendus numquam repellat.",
        ],
    ];

    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts,
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        'name' => "Dimas Aryasatya",
        'email' => "daryassatya@gmail.com",
        'image' => "DimasAryaSatya.png",
    ]);
});

// Post Detail
Route::get('/posts/detail/{slug}', function ($slug) {

    // Data Dummy
    $blog_posts = [
        [
            'title' => "Post Pertama",
            'slug' => "post-pertama",
            'author' => "Dimas Aryasatya",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Unde maiores dignissimos possimus error ad, quam dolor sit totam similique ipsum tempore magnam enim repellendus ut dolorum a autem quod? Ex.",
        ],
        [
            'title' => "Post Kedua",
            'slug' => "post-kedua",
            'author' => "Dimas Aryasatya",
            'body' => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor placeat atque accusamus delectus? Obcaecati dolorem molestias pariatur voluptas ea dolore libero qui soluta necessitatibus? Assumenda, aspernatur? Repellendus ad sit totam voluptatem, fuga deserunt veniam saepe optio quia. Adipisci doloremque voluptatibus temporibus. Saepe tenetur ex aspernatur minus ea asperiores. Ex nemo, eaque perferendis repellat beatae excepturi consequuntur ea dignissimos illo nesciunt vitae incidunt voluptates aliquid culpa neque corporis omnis facilis pariatur dolores similique totam aperiam laudantium. Voluptates est incidunt perferendis maiores ullam praesentium eveniet ipsum deleniti cupiditate doloribus, mollitia itaque molestiae magnam, odit et. Accusantium, ex? Fugit quaerat repellendus numquam repellat.",
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] == $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => 'Post Detail',
        'posts' => $new_post,
    ]);
})->name('post');
