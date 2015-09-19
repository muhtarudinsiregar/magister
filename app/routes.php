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
View::composer(array('datapribadis.edit','datapribadis.create','datapribadis.back_edit'), function($view)
{
    $view->with('agama', DataPribadi::agama());
});
View::composer(array('pendanaans.edit','pendanaans.create'), function($view)
{
    $view->with('beasiswa', Pendanaan::beasiswa());
});
View::composer(array('pendidikans.edit','pendidikans.create','pendidikans.back_edit'), function($view)
{
    $view->with('akreditasi', Pendidikan::akreditasi());
});



// Event::listen('illuminate.query', function($query)
// {
//     var_dump($query);
// });

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
Route::get('/','BerandasController@index');
Route::get('konfirmasi','PendaftaranController@konfirmasi');
Route::resource('beranda', 'BerandasController');
Route::resource('pendaftaran', "PendaftaranController");
Route::resource('data-pribadi', "DataPribadisController");
Route::resource('programstudi', "ProgramStudisController");
Route::resource('pendidikan', "PendidikansController");
Route::resource('pekerjaan', "PekerjaansController");
Route::resource('pendanaan', "PendanaansController");
Route::resource('kontak', "KontaksController");
Route::resource('jadwal', "JadwalTesController");
Route::get('pernyataan',"PendaftaranController@index");
Route::get('test', 'TestsController@index');