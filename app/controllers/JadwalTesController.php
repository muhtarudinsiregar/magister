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
		return View::make('jadwaltes.create');
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
        // var_dump(Input::all());
        	$user = JadwalTes::find(1);
        	$user->id_pendaftar = 1;
        	$user->id_pendaftarOK = 1;
    	    $user->tanggalTes = Input::get('tgglTes');
    	    $user->sesiTes = Input::get('jTes');
	       	$user->save();

	    	 //   if(!$saved){
    		// 	App::abort(500, 'Error');
    		// }
	       	// var_dump(Input::all());
       		return  Redirect::to('pernyataan');
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
		$jadwal = JadwalTes::find($id);
		return View::make('jadwalTes.edit')->withJadwal($jadwal);
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
		var_dump(Input::all());
		$jadwal = JadwalTes::findOrFail($id);

		$validator = Validator::make($data = Input::all(), JadwalTes::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

			$jadwal->tanggalTes = Input::get('tgglTes');
    	    $jadwal->sesiTes = Input::get('jTes');
	      	$jadwal->save();

		// return Redirect::to('beranda');
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