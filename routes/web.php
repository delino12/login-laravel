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



# using web middleware

// Authenticate Route First
Route::get('/', 'PageController@index');

// Load get Request
Route::get('/login', 'PageController@login');
Route::get('/register', 'PageController@register');

// Load post Request
Route::post('/login', 'PostController@userLogin'); // this handle login form data
Route::post('/create', 'PostController@userSignup'); // this handler register form data	

