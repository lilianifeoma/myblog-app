<?php

use App\Models\Blog;
use Illuminate\Http\Request;
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

//create post
Route::get('blog/create', function () {

   return view('create');
});

//Submit New Blog
Route::post('blogs/store', function (Request $request) {

    //$post = new Blog;
    //$post->slug = $request->slug;
    //$post->title = $request->title;
    //$post->excerpt = $request->excerpt;
    //$post->body = $request->body;

    //$post->save();

Blog::create([
    'slug' => $request->slug,
    'title' => $request->title,
    'excerpt' => $request->excerpt,
    'body' => $request->body,
]);

    return redirect()->to('/');
});
    
//Blog Route
Route::get('blog/{post:slug}', function (BLog $post) {

    return view('blog', ['post' => $post]);
});







