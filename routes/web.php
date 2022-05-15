<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
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

//Home
Route::get('/', function () {
    return view('home', [
        'title' => "Home",
    ]);
});

Route::get('/posts', [PostController::class, 'index'])->name('post');
Route::get('/posts/{post:slug}', [PostController::class, 'detail'])->name('post.detail');

Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        'name' => "Dimas Aryasatya",
        'email' => "daryassatya@gmail.com",
        'image' => "DimasAryaSatya.png",
    ]);
});

// Route::get('/categories/{category::slug}', [CategoryController::class, ''])
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Category',
        'categories' => Category::all(),
    ]);
})->name('category');

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,
    ]);
})->name('category.spesific');

// Tempat Menyimpan Codingan Route Lama

// Post
// Route::get('/posts', function () {

//     return view('posts', [
//         'title' => 'Posts',
//         'posts' => Post::all(),
//     ]);
// });

// Post Detail
// Route::get('/posts/{slug}', function ($slug) {

//     return view('post', [
//         'title' => 'Post Detail',
//         'posts' => Post::find($slug),
//     ]);
// })->name('post');
