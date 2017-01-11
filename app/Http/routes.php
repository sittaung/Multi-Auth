<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('/home', 'HomeController@index');
Route::resource('user', 'UserController');

Route::group(['prefix' => 'admin'], function ()
{
	Route::get('/', 'AdminController@index');
	Route::get('/dashboard', 'AdminController@index');
	Route::get('/user', 'UserController@index');
	Route::get('/login','AdminAuth\AuthController@showLoginForm');
	Route::post('/login','AdminAuth\AuthController@postLogin');
	Route::get('/logout','AdminAuth\AuthController@logout');
});



