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
        var_dump(Input::all());

        // $dana = new Pendanaan;
        // $dana->id_pendaftar = 1;
        // $dana->jenjang = Input::get('dana');
        // $dana->programStudi = Input::get('beasiswa');
        // $dana->sponsor = Input::get('pemberi');
        // $dana->alamat = Input::get('almt');
        // $dana->kotakab = Input::get('kotakab');
        // $dana->propinsi = Input::get('prop');
        // $dana->negara = Input::get('neg');
        // $dana->noTelepon = Input::get('notel');
        // $dana->noFaksimili = Input::get('nofax');
        // $dana->email = Input::get('mail');
        // $dana->statusBeasiswa = Input::get('sttsbea');

        // $dana->save();
        // return Redirect::to('kontak');

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