<?php

class PendaftaranController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pendaftaran
	 *
	 * @return Response
	 */
	

	public function konfirmasi()
	{
		return View::make('pendaftaran.konfirmasi');
	}
	public function tes()
	{
		return View::make('basic-disabletabclick');
	}

	public function index()
	{
		
	}
	/**
	 * Show the form for creating a new resource.
	 * GET /pendaftaran/create
	 *
	 * @return Response
	 */
	public function create()
	{
		// $data = DataPribadi::find(1)->pendidikan;
		$id = 1;
		$pribadi = DataPribadi::all()->find(1);
		$data = DataPribadi::with('pekerjaan','pendidikan','sponsor','riwayatpekerjaan','kontakdarurat')->find(1);
		// var_dump($data['riwayatpekerjaan']);
		
		// Pendaftaran::pendaftar($pribadi);
		// foreach ($data['pekerjaan']as $value)
		// 	{
		// 		Pendaftaran::pekerjaan($value);
		// 	}
		// foreach ($data['pendidikan']as $value)
		// 	{
		// 		Pendaftaran::pendidikan($value);
		// 	}
		// foreach ($data['sponsor']as $value)
		// 	{
		// 		Pendaftaran::sponsor($value);
		// 	}
		// foreach ($data['riwayatpekerjaan']as $value)
		// 	{
		// 		Pendaftaran::riwayatpekerjaan($value);
		// 	}
		
		Pendaftaran::kontakdarurat($data->kontakdarurat);

			
		// foreach ($data['profesi']as $value)
		// 	{
		// 		Pendaftaran::profesi($value);
		// 	}	
		// return View::make('pendaftaran.pernyataan')->with('data',$data);
		// return View::make('tests.create')->with('data',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pendaftaran
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), JadwalTes::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();

		}

		$pernyataan = Pendaftaran::find(1);
		$pernyataan->konfirm = Input::get('pernyataan');
		$pernyataan->save();
		return Redirect::to('konfirmasi');
	}

	/**
	 * Display the specified resource.
	 * GET /pendaftaran/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pendaftaran/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pendaftaran/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pendaftaran/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}