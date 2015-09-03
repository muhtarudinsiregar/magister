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

// print App::environment();
// User::find(1);
Route::get('/', function()
{
	return View::make('hello');
});
Route::get('create', 'RegistersController@create');
Route::resource('register', 'RegistersController');
Route::resource('articles', "ArticlesController");
Route::get('data-pribadi', "PendaftaranController@data_pribadi");
Route::get('pendidikan', "PendaftaranController@pendidikan");
Route::resource('pendaftaran', "PendaftaranController");
