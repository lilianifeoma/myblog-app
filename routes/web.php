<?php

use App\Models\Blog;
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

//Home Route
Route::get('/', function () {
    $posts = Blog::get();

    return view('blogs',['posts' => $posts]);
});

//Blog Route
Route::get('blog/{post:slug}', function (BLog $post) {
    
    //$post = Blog::find($post_id);

    return view('blog', ['post' => $post]);
});
