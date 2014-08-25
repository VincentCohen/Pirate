<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('home', 'HomeController@showWelcome');
Route::get('/', 'HomeController@showWelcome');
Route::get('/user/{username}', 'UserController@read');
Route::get('/login', 'UserController@authenticate');
Route::post('/login', 'UserController@authenticate');
Route::post('/register', 'UserController@create');
