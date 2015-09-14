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

View::composer(array('jadwalTes.edit','jadwaltes.create'), function($view)
{
    $view->with('tes', JadwalTes::sesiTes());
});
View::composer(array('datapribadis.edit','datapribadis.create'), function($view)
{
    $view->with('agama', DataPribadi::agama());
});
View::composer(array('pendanaans.edit','pendanaans.create'), function($view)
{
    $view->with('beasiswa', Pendanaan::beasiswa());
});
View::composer(array('pendidikans.edit','pendidikans.create'), function($view)
{
    $view->with('akreditasi', Pendidikan::akreditasi());
});


Event::listen('illuminate.query', function($query)
{
    var_dump($query);
});
// Route::get('mail', function(){
// 	$data = ['prize' => 'Peke', 'total' => 3 ];
// 	Mail::send('tests.create', $data, function($mail){
// 		// Email dikirimkan ke address "momo@deviluke.com" 
//     	  // dengan nama penerima "Momo Velia Deviluke"
//       $mail->to('redcar.studious@gmail.com', 'Momo Velia Deviluke');
 
//       // Copy carbon dikirimkan ke address "haruna@sairenji" 
//       // dengan nama penerima "Haruna Sairenji"
//       $mail->cc('redcar.studious@gmail.com', 'Haruna Sairenji');
//       $mail->subject('Hello World!');
// 	});

// });
Route::get('/','BerandasController@create');

Route::get('beranda', "BerandasController@create");
Route::get('programstudi', "ProgramStudisController@create");
Route::get('data-pribadi', "DataPribadisController@create");
Route::get('pendidikan', "PendidikansController@create");
Route::get('pekerjaan', "PekerjaansController@create");
Route::get('pendanaan', "PendanaansController@create");
Route::get('kontak',"KontaksController@create");
Route::get('jadwal',"JadwalTesController@create");
Route::get('pernyataan',"PendaftaranController@create");
Route::get('konfirmasi',"PendaftaranController@konfirmasi");
Route::get('tes',"PendaftaranController@tes");
Route::resource('berandas', 'BerandasController');
Route::resource('pendaftaran', "PendaftaranController");
Route::resource('datapribadis', "DataPribadisController");
Route::resource('programstudis', "ProgramStudisController");
Route::resource('pendidikans', "PendidikansController");
Route::resource('pekerjaans', "PekerjaansController");
Route::resource('pendanaans', "PendanaansController");
Route::resource('kontaks', "KontaksController");
Route::resource('jadwals', "JadwalTesController");
