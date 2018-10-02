<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PostsController@index')->name('posts.index');
Route::get('posts/create', 'PostsController@create')->name('posts.create');
Route::get('posts/{post}', 'PostsController@show')->name('posts.show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
