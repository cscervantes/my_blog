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

// Route::get('/home', 'HomeController@index');

Route::get('/post', 'PostController@index')->name('post');

Route::get('/post/oldest', 'PostController@oldest')->name('post_oldest');

Route::get('/post/{post}', 'PostController@show')->name('post_show');

Route::get('/post/create', 'PostController@create');

Route::post('/user/{post}/post', 'PostController@store');
