<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('posts', 'PostsController@index');
Route::get('posts/{postid}', 'PostsController@read')->where('postid', '[0-9]+')->name('postread');


Route::post('posts', 'PostsController@store')->name('posts');

Route::get('posts/create', function () {
    return view('posts.create');
});


Route::get('posts/{posts}/edit', function ( App\Posts  $posts) {
    return view('posts.edit',['oPostData' => $posts]);
});

Route::put('posts/{postid}', 'PostsController@update')->name('postsupdate');
