<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'cors','prefix'=>'api'], function () {
    
			Route::get("users","UsersController@index");
			Route::get("users/{idUser}","UsersController@show");
			Route::post("usuarios","UsersController@store");
			Route::put("users/{idUser}","UsersController@update");
			Route::delete("users/{idUser}","UsersController@destroy");
			Route::get("login","LoginController@showLogin");
			Route::get("publicaciones","PublicationsController@index");
			Route::post("publicaciones","PublicationsController@store");
});
