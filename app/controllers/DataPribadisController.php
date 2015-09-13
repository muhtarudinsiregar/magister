<?php

class DataPribadisController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /datapribadis
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /datapribadis/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$agama = DataPribadi::agama();
		// var_dump($agama);
		return View::make('datapribadis.create')->with('agama',$agama);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /datapribadis
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), DataPribadi::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();

        }
        	// var_dump(Input::all());

        	$user = new DataPribadi;
        	$user->email = Input::get('mail');
    	    $user->password = Hash::make(Input::get('pin'));
    	    $user->nama = Input::get('nm');
    	    $user->tempatLahir = Input::get('tlhr');
    	    $user->tanggalLahir = Input::get('tglhr');
    	    $user->jenisKelamin = Input::get('jenisK');
    	    $user->id_agama = Input::get('agama');
    	    $user->noHP = Input::get('no_hp');
    	    $user->alamatYK = Input::get('almtYk');
    	    $user->kotakabYK = Input::get('kotakabYk');
    	    $user->noTelpYK = Input::get('no_telYk');
    	    $user->tinggalYK = Input::get('tinggalYk');
    	    $user->alamat = Input::get('almtNyk');
    	    $user->kotakab = Input::get('kotakabNyk');
    	    $user->propinsi = Input::get('prop');
    	    $user->negara = Input::get('neg');
    	    $user->noTelepon = Input::get('no_telNyk');
	       	$user->save();
        	return Redirect::to('pendidikan');
	}

	/**
	 * Display the specified resource.
	 * GET /datapribadis/{id}
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
	 * GET /datapribadis/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = DataPribadi::find($id);
		return View::make('datapribadis.edit')->withEdit($data);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /datapribadis/{id}
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
	 * DELETE /datapribadis/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}