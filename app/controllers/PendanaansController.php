<?php

class PendanaansController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pendanaans
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pendanaans/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$beasiswa = Pendanaan::beasiswa();
		return View::make('pendanaans.create')->withBeasiswa($beasiswa);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pendanaans
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Pendanaan::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();

        }
        $data_beasiswa = DataPribadi::find(1);
        // var_dump($data_beasiswa);
        $data_beasiswa->danaBeasiswa = Input::get('dana');
        $data_beasiswa->id_beasiswa = Input::get('beasiswa');
        $data_beasiswa->statusBeasiswa = Input::get('sttsbea');
		$data_beasiswa->save();

        $sponsor = new Pendanaan;
        $sponsor->id_pendaftar = 1;
        $sponsor->sponsor = Input::get('pemberi');
        $sponsor->alamat = Input::get('almt');
        $sponsor->kotakab = Input::get('kotakab');
        $sponsor->propinsi = Input::get('prop');
        $sponsor->negara = Input::get('neg');
        $sponsor->noTelepon = Input::get('notel');
        $sponsor->noFaksimili = Input::get('nofax');
        $sponsor->email = Input::get('mail');
        $sponsor->save();
        return Redirect::to('kontak');

	}

	/**
	 * Display the specified resource.
	 * GET /pendanaans/{id}
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
	 * GET /pendanaans/{id}/edit
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
	 * PUT /pendanaans/{id}
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
	 * DELETE /pendanaans/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}