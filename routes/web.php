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
    return view('build');
});

Route::get('blog-home-1', function() {
	return view('blog-home-1');
});

Route::get('blog-home-2', function() {
	return view('blog-home-2');
});

Route::get('blog-post', function() {
	return view('blog-post');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
