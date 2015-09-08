<?php

class JadwalTesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /jadwaltes
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /jadwaltes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$tes = JadwalTes::sesiTes();
		return View::make('jadwaltes.create')->withTes($tes);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /jadwaltes
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
        var_dump(Input::all());
        	// $user = new JadwalTes;
        	// $user->id_pendaftar = 1;
    	    // $user->nama = Input::get('tglTes');
    	    // $user->nama = Input::get('jTes');
	       	// $user->save();
        // Redirect::to('konfirmasi');
	}

	/**
	 * Display the specified resource.
	 * GET /jadwaltes/{id}
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
	 * GET /jadwaltes/{id}/edit
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
	 * PUT /jadwaltes/{id}
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
	 * DELETE /jadwaltes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}