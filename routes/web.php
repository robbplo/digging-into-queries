<?php

use App\Models\Post;
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

Route::get('/lazy', function () {
    $posts = Post::all();

    return view('posts', [
        'posts' => $posts,
    ]);
});

Route::get('/eager', function () {
    // Apply eager loading in this function

    $posts = Post::with('user')->get();

    return view('posts', [
        'posts' => $posts,
    ]);
});
