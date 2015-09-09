<?php

class PekerjaansController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pekerjaans
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pekerjaans/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pekerjaans.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pekerjaans
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Pekerjaan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();

		}

		$status_kerja = Input::get('sttskrja');
		if ($status_kerja != 'y') 
		{

        	// $user = new Pekerjaan;
        	// $user->id_pendaftar = 1;
        	// $user->posisi = Input::get('pos');
        	// $user->institusi = Input::get('ins');
        	// $user->alamat = Input::get('almt');
        	// $user->kotakab = Input::get('kotkab');
        	// $user->propinsi = Input::get('prop');
        	// $user->negara = Input::get('neg');
        	// $user->noTelepon = Input::get('notel');
        	// $user->noFaximile = Input::get('nofax');
        	// $user->email = Input::get('mail');
        	// $user->tahunMulai = Input::get('thnkrj');
	        // $user->save();

		}
		var_dump(Input::all());
			// $riwayat = new Pekerjaan;

			// $riwayat->posisi = Input::get('pos_riw'); 
			// $riwayat->intitusi = Input::get('ins_riw'); 
			// $riwayat->tahun = Input::get('th_riw');
			// $riwayat->save();
			 // return Redirect::to('pendanaan');
	}

	/**
	 * Display the specified resource.
	 * GET /pekerjaans/{id}
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
	 * GET /pekerjaans/{id}/edit
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
	 * PUT /pekerjaans/{id}
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
	 * DELETE /pekerjaans/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}