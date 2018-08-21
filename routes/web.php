<?php

use App\Post;
use App\Http\Resources\Post as PostResource;
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

Route::get('/api/blogs', function () {
    return PostResource::collection(Post::all());
    // return new PostResource(Post::find(1));
});


Route::get('/', function () {
    return view('index');
});

Route::resource('/blogs', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
