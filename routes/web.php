<?php

use App\Models\{Post, Category, User};
use Illuminate\Support\Facades\File;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/posts', function () {
    return view('posts', [
        'posts' => Post::with(['category', 'user'])->get()
    ]);
});

Route::get("/posts/{post:slug}", function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});
Route::get("/categories/{category:slug}", function (Category $category) {
    return view('categories', [
        'category' => $category
    ]);
});

Route::get(
    "/users/{user}",
    fn (User $user) =>
    view('user', [
        'user' => $user
    ])
);
