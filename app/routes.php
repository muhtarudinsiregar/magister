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

Route::get('beranda', "PendaftaranController@beranda");
Route::get('programstudi', "ProgramStudisController@create");
Route::get('data-pribadi', "DataPribadisController@create");
Route::get('pendidikan', "PendidikansController@create");
Route::get('pekerjaan', "PekerjaansController@create");
Route::get('pendanaan', "PendanaansController@create");
Route::get('kontak',"KontaksController@create");
Route::get('jadwal',"JadwalTesController@create");
Route::get('pernyataan',"PendaftaranController@pernyataan");
Route::get('konfirmasi',"PendaftaranController@konfirmasi");
Route::get('tes',"PendaftaranController@tes");
Route::resource('pendaftaran', "PendaftaranController");
Route::resource('programstudis', "ProgramStudisController");
Route::resource('kontaks', "KontaksController");
