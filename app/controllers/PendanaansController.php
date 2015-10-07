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
		// var_dump(Session::get('mail'));
		$beasiswa = Pendanaan::beasiswa();

		$email = Session::get('mail');
		$id = DataPribadi::where('email','=',$email)->first(['id']);

		// $data_beasiswa = DataPribadi::all(['danaBeasiswa','id_beasiswa','statusBeasiswa'])->find($id['id']);
		$edit = Pendanaan::where('id_pendaftar','=',$id['id'])->first();
		$data_beasiswa = DataPribadi::where('id','=',$id['id'])->first(['danaBeasiswa','id_beasiswa','statusBeasiswa']);
		// dd($data_beasiswa['danaBeasiswa']);
		if (empty($data_beasiswa) && empty($edit)) {
			return View::make('pendanaans.create');
		}elseif (empty($edit))
		{
			return View::make('pendanaans.create_edit')->withData_beasiswa($data_beasiswa);	
		}
		else
		{
			return View::make('pendanaans.back_edit')->withEdit($edit)->withData_beasiswa($data_beasiswa);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pendanaans/create
	 *
	 * @return Response
	 */
	public function create()
	{
		
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
		$validator->setAttributeNames(Pendanaan::$niceNames); 
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();

		}
		$email = Session::get('mail');
		$id_pendaftar = DataPribadi::get_id($email);
		
		
		if (Input::get('dana') != 0) {
			$data_beasiswa = DataPribadi::find($id_pendaftar['id']);
			$data_beasiswa->danaBeasiswa = Input::get('dana');
			$data_beasiswa->id_beasiswa = Input::get('beasiswa');
			$data_beasiswa->statusBeasiswa = Input::get('sttsbea');
			$data_beasiswa->save();
			if (Input::get('beasiswa') ==3) {
				$sponsor = new Pendanaan;
				$sponsor->id_pendaftar = $id_pendaftar['id'];
				$sponsor->sponsor = Input::get('pemberi');
				$sponsor->alamat = Input::get('almt');
				$sponsor->kotakab = Input::get('kotakab');
				$sponsor->propinsi = Input::get('prop');
				$sponsor->negara = Input::get('neg');
				$sponsor->noTelepon = Input::get('notel');
				$sponsor->noFaksimili = Input::get('nofax');
				$sponsor->email = Input::get('mail');
				$sponsor->save();
			}
		}else
		{
			$data_beasiswa = DataPribadi::find($id_pendaftar['id']);
			$data_beasiswa->danaBeasiswa = Input::get('dana');
			$data_beasiswa->id_beasiswa = 4;
			$data_beasiswa->statusBeasiswa = 2;
			$data_beasiswa->save();
		}


		
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
		$data_beasiswa = DataPribadi::all(['danaBeasiswa','id_beasiswa','statusBeasiswa'])->find($id);
		$edit = Pendanaan::where('id_pendaftar','=',$id)->first();
		$data_beasiswa = DataPribadi::where('id','=',$id)->first(['danaBeasiswa','id_beasiswa','statusBeasiswa']);
		return View::make('pendanaans.edit')->withEdit($edit)->withData_beasiswa($data_beasiswa);
		// dd($data_beasiswa);
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

		$validator = Validator::make($data = Input::all(), Pendanaan::$rules);
		$validator->setAttributeNames(Pendanaan::$niceNames); 
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$email = Session::get('mail');
		$id1 = DataPribadi::where('email','=',$email)->first(['id']);

		if (Input::get('dana') != 0) {
			$data_beasiswa = DataPribadi::find($id1['id']);
			$data_beasiswa->danaBeasiswa = Input::get('dana');
			$data_beasiswa->id_beasiswa = Input::get('beasiswa');
			$data_beasiswa->statusBeasiswa = Input::get('sttsbea');
			$data_beasiswa->save();
			if (Input::get('beasiswa') ==3) {
				$sponsor = Pendanaan::find($id);
				$sponsor->sponsor = Input::get('pemberi');
				$sponsor->alamat = Input::get('almt');
				$sponsor->kotakab = Input::get('kotakab');
				$sponsor->propinsi = Input::get('prop');
				$sponsor->negara = Input::get('neg');
				$sponsor->noTelepon = Input::get('notel');
				$sponsor->noFaksimili = Input::get('nofax');
				$sponsor->email = Input::get('mail');
				$sponsor->save();
			}
			
		}
		else
		{
			// ketika dana beasiswa adalah sendiri maka semuanya 0 dan menghapus data sponsor yang ada di tabel sponsor.
			$data_beasiswa = DataPribadi::find($id['id']);
			$data_beasiswa->danaBeasiswa = Input::get('dana');
			$data_beasiswa->id_beasiswa = 4;
			$data_beasiswa->statusBeasiswa = 2;
			$data_beasiswa->save();

			$id_sponsor = Sponsor::where('id_pendaftar','=',$id['id'])->first(['id']);
			$hapus = Sponsor::find($id_sponsor['id']);
			if (!is_null($hapus)) {
				$hapus->delete();
			}else
			{
				echo "Kosong";
			}
		}
		// return Redirect::to('kontak/'.Auth::id()."/edit");
		if (is_null(Auth::id())) {
			return Redirect::to('kontak');
		}else{
			return Redirect::to('kontak/'.Auth::id().'/edit');
		}	
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