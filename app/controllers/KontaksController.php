<?php

class KontaksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /kontaks
	 *
	 * @return Response
	 */
	public function index()
	{
		// var_dump(Session::all());
		$email = Session::get('mail');
		$id = DataPribadi::where('email','=',$email)->first(['id']);

		$kontak = Kontak::where('id_pendaftar','=',$id['id'])->first();
		if (empty($kontak))
		{
			return View::make('kontaks.create');
		}else
		{
			return View::make('kontaks.back_edit')->withKontak($kontak);
		}

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /kontaks/create
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /kontaks
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$validator = Validator::make($data = Input::all(), Kontak::$rules);
		$validator->setAttributeNames(Kontak::$niceNames);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();

		}
		$email = Session::get('mail');
		$id_pendaftar = DataPribadi::get_id($email);

		$user = new Kontak;
		$user->id_pendaftar = $id_pendaftar['id'];
		$user->nama = Input::get('nama');
		$user->hubungan = Input::get('hubungan');
		$user->alamat = Input::get('alamat');
		$user->kotakab = Input::get('kotakab');
		$user->propinsi = Input::get('propinsi');
		$user->negara = Input::get('negara');
		$user->noTelepon = Input::get('noTelepon');
		$user->email = Input::get('email');

		$user->save();
		return Redirect::to('jadwal');
		var_dump(Input::all());
	}

	/**
	 * Display the specified resource.
	 * GET /kontaks/{id}
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
	 * GET /kontaks/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		// $hub = Hubungan::all();
		$kontak = Kontak::where('id_pendaftar','=',$id)->first();
		return View::make('kontaks.edit')->withKontak($kontak)->withHub($hub);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /kontaks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// var_dump(Input::all());
		$kontak = Kontak::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Kontak::$rules);
		$validator->setAttributeNames(Kontak::$niceNames);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$kontak->update($data);

		// return Redirect::to('jadwal/'.Auth::id().'/edit');
		if (is_null(Auth::id())) {
			return Redirect::to('jadwal');
		}else{
			return Redirect::to('jadwal/'.Auth::id().'/edit');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /kontaks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}