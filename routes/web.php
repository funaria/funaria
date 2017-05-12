<?php

Route::get("/", "PagesController@home")->name("home");
Route::resource('posts', "PostsController");

/* Auth */
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@connectUser')->name('login');

Route::get('/register', 'Auth\RegisterController@showRegisterForm')->name('register');
Route::post('/register', 'Auth\RegisterController@registerUser')->name('register');