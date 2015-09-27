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
		var_dump(Session::all());
		$agama = DataPribadi::agama();
		$email = Session::get('mail');
		$id = DataPribadi::where('email','=',$email)->first(['id']);
		if (is_null($id))
		{
			return View::make('datapribadis.create')->with('agama',$agama);	
		}else
		{
			$data = DataPribadi::find($id['id']);
			// dd($data['email']);
			return View::make('datapribadis.back_edit')->withEdit($data);
		}
		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /datapribadis/create
	 *
	 * @return Response
	 */
	public function create()
	{
		
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
		$mail = Input::get('mail');
		$user = new DataPribadi;
		$user->email = $mail;
		$user->password = Input::get('pin');
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

		$data = DataPribadi::get_id($mail);
		Session::put('mail', $mail);

		$tahun = TahunGelombang::where('tahun','=','2015/2016')->first();//ambil tahun

		$email = Session::get('mail');
		$id_pendaftar = DataPribadi::get_id($email);

		$program = new ProgramStudi;
		$program->tahun = $tahun['tahun'];
		$program->semester = $tahun['semester'];
		$program->id_pendaftar = $id_pendaftar['id'];
		$program->gelombang = Session::get('gel');
		$program->id_prodi = Session::get('pro');
		$program->id_konsentrasi = Session::get('kon');
		$program->save();
		// return Redirect::to('pendidikan');
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
		$validator = Validator::make($data = Input::all(), ProgramStudi::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		// dd($data);
		$user = DataPribadi::findOrFail($id);
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

		if (is_null(Auth::id())) {
			return Redirect::to('pendidikan');
		}else{
			return Redirect::to('pendidikan/'.Auth::id().'/edit');
		}

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