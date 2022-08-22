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
})->name('home');

Route::get('/posts', function () {
    return view('posts', [
        // 'posts' => Post::latest('published_at')->with(['category', 'user'])->get()
        'posts' => Post::latest()->with(['category', 'user'])->get(),
        'categories' => Category::all()
    ]);
})->name('posts');

Route::get("/posts/{post:slug}", function (Post $post) {
    return view('post', [
        'post' => $post->load('category', 'user')
    ]);
});
Route::get("/categories/{category:slug}", function (Category $category) {
    return view('categories', [
        'category' => $category->load('posts', 'posts.user'),
        'categories' => Category::all()
    ]);
})->name('categories');

Route::get(
    "/users/{user:username}",
    fn (User $user) =>
    view('user', [
        'user' => $user->load('posts')
    ])
)->name('users');
