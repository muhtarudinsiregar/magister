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

View::composer(array('jadwalTes.edit','jadwaltes.create','jadwaltes.back_edit'), function($view)
{
    $view->with('tes', JadwalTes::sesiTes());
});
View::composer(array('datapribadis.edit','datapribadis.create','datapribadis.back_edit'), function($view)
{
    $view->with('agama', DataPribadi::agama());
});
View::composer(array('pendanaans.edit','pendanaans.create','pendanaans.back_edit','pendanaans.create_edit'), function($view)
{
    $view->with('beasiswa', Pendanaan::beasiswa());
});
View::composer(array('pendidikans.edit','pendidikans.create','pendidikans.back_edit'), function($view)
{
    $view->with('akreditasi', Pendidikan::akreditasi());
});
View::composer(array('kontaks.edit','kontaks.create','kontaks.back_edit'), function($view)
{
    $view->with('hub', Hubungan::all());
});
View::composer(array('sesites.edit','sesites.create','sesites.index'), function($view)
{
    $view->with('title', 'Sesi Tes');
});
View::composer(array('konsentrasis.edit','konsentrasis.create','konsentrasis.index'), function($view)
{
    $view->with('title', 'Konsentrasi');
});
View::composer(array('gelombangs.edit','gelombangs.create','gelombangs.index'), function($view)
{
    $view->with('title', 'Tahun Gelombang');
});
View::composer(array('studis.edit','studis.create','studis.index'), function($view)
{
    $view->with('title', 'Program Studi');
});
View::composer(array('dashboards.edit','dashboards.create','dashboards.index'), function($view)
{
    $view->with('title', 'Dashboard');
});



// Event::listen('illuminate.query', function($query)
// {
//     var_dump($query);
// });
Route::get('load', 'PendidikansController@loadProfesiAjax');
Route::post('profesiSaved', 'PendidikansController@profesiSaved');
Route::post('RiwayatPekerjaanSaved', 'PekerjaansController@RiwayatPekerjaanSaved');
Route::get('mail', 'PendaftaranController@sendmail');
Route::post('mail', 'PendaftaranController@sendmail');
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
Route::resource('tahungelombang', "GelombangsController");
Route::resource('sesites', "SesitesController");
Route::resource('konsentrasi', "KonsentrasisController");
Route::resource('studi', "StudisController");
Route::resource('dashboard', "DashboardsController");
Route::get('pernyataan',"PendaftaranController@index");
Route::get('test', 'TestsController@index');
Route::get('pdf', 'PendaftaranController@pdf');
Route::get('tesView', 'PendaftaranController@TesView');