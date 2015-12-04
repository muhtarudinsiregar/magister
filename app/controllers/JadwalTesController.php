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
		$email = Session::get('mail');
		$id = DataPribadi::where('email','=',$email)->first(['id']);

		$jadwal = JadwalTes::where('id_pendaftar','=',$id['id'])->first();

		if (empty($jadwal))
		{
			return View::make('jadwaltes.create');
		}else
		{
				
			return View::make('jadwaltes.back_edit')->withJadwal($jadwal);
		}

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /jadwaltes/create
	 *
	 * @return Response
	 */
	public function create()
	{

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
        	$email = Session::get('mail');
        	$id_pendaftar = DataPribadi::get_id($email);
        	$user = JadwalTes::find_id_pendaftar($id_pendaftar['id']);
        	
        	// dd($id_pendaftar['id']);
        	dd($user);
        	$user->id_pendaftar = $id_pendaftar['id'];
        	$user->id_pendaftarOK = '';
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
		$jadwal = JadwalTes::where('id_pendaftar','=',$id)->first();
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
		// var_dump(Input::all());
		$jadwal = JadwalTes::findOrFail($id);

		$validator = Validator::make($data = Input::all(), JadwalTes::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
			$jadwal = JadwalTes::find($id);
			$jadwal->tanggalTes = Input::get('tgglTes');
    	    $jadwal->sesiTes = Input::get('jTes');
	      	$jadwal->save();

		return Redirect::to('pernyataan');
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