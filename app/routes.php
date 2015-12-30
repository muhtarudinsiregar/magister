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
View::composer(array('validasis.edit','validasis.create','validasis.index','validasis.show'), function($view)
{
    $view->with('title', 'Validasi Pendaftar');
});



// Event::listen('illuminate.query', function($query)
// {
//     var_dump($query);
// });

// route login dan logout
Route::get('login', 'UsersController@login');
Route::post('login', 'UsersController@login');

Route::get('load', 'PendidikansController@loadProfesiAjax');
Route::post('profesiSaved', 'PendidikansController@profesiSaved');
Route::post('RiwayatPekerjaanSaved', 'PekerjaansController@RiwayatPekerjaanSaved');
Route::get('mail', 'PendaftaranController@sendmail');
Route::post('mail', 'PendaftaranController@sendmail');
Route::get('/','BerandasController@index');
Route::get('konfirmasi','PendaftaranController@konfirmasi');
Route::get('cariPendaftar', 'DashboardsController@cariPendaftar');
Route::post('cariPendaftar', 'DashboardsController@cariPendaftar');
Route::get('aktif/{id}', 'GelombangsController@aktif');
Route::post('exportToExcel', 'DashboardsController@exportToExcel');
Route::post('updateProdi', 'StudisController@updateProdi');
Route::post('konsentrasi/updateKonsentrasi', 'KonsentrasisController@updateKonsentrasi');
Route::post('konsentrasi/updateProdi', 'KonsentrasisController@updateProdi');
Route::get('getProdi', 'KonsentrasisController@getProdi');
Route::post('validasi/{id}', 'ValidasisController@validasi');
Route::post('valid_data', 'DashboardsController@valid_data_export_excel');
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

// route admin
Route::group(['before'=>'auth'],function(){
    Route::resource('konsentrasi', "KonsentrasisController");
    Route::resource('sesites', "SesitesController");
    Route::resource('studi', "StudisController");
    Route::get('logout', 'UsersController@logout');
    Route::resource('dashboard', "DashboardsController");
    Route::resource('validasis', "ValidasisController");
});
Route::get('pernyataan',"PendaftaranController@index");
Route::get('test', 'TestsController@index');
Route::get('pdf', 'PendaftaranController@pdf');
Route::get('tesView', 'PendaftaranController@TesView');
Route::post('cariTes', 'DashboardsController@cari');