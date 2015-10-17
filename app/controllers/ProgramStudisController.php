<?php

class ProgramStudisController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /programstudis
	 *
	 * @return Response
	 */
	public function index()
	{
		$email = Session::get('mail');
		$id = DataPribadi::where('email','=',$email)->first(['id']);
		$data_program = [
		'jurusan' => ProgramStudi::prodi(),
		'konsentrasi' => ProgramStudi::konsentrasi(),
		'tahungelombang'=>TahunGelombang::where('aktif','=','1')->first(),
		];

		if (is_null($id))
		{
			return View::make('programstudis.create')->with('data_program',$data_program);	
		}else
		{
			$edit = ProgramStudi::where('id_pendaftar','=',$id['id'])->first();
			// dd($edit);
			return View::make('programstudis.back_edit')->withEdit($edit)->withData($data_program);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /programstudis/create
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /programstudis
	 *
	 * @return Response
	 */
	public function store()
	{
		// $validator = Validator::make($data = Input::all(), ProgramStudi::$rules);

		// if ($validator->fails())
		// {
		// 	return Redirect::back()->withErrors($validator)->withInput();

		// }
		// Input::flash();
		$data = TahunGelombang::where('aktif','=','Y')->first(['gelombang']);
		$data_gel = $data['gelombang'];
		$data_pro= Input::get('pro');
		$data_kon = Input::get('kon');
		
		Session::put('gel', $data_gel);
		Session::put('pro', $data_pro);
		Session::put('kon', $data_kon);

		return Redirect::to('data-pribadi');
	}

	/**
	 * Display the specified resource.
	 * GET /programstudis/{id}
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
	 * GET /programstudis/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = [
		'jurusan' => ProgramStudi::prodi(),
		'konsentrasi' => ProgramStudi::konsentrasi(),
		'tahungelombang'=>TahunGelombang::where('tahun','=','2015/2016')->first()
		];
		$tahun = TahunGelombang::all(['gelombang']);
		$edit = ProgramStudi::where('id_pendaftar','=',$id)->first();

		if (is_null($edit))
		{
			return View::make('programstudis.create')->withData($data);	
		}else
		{

			return View::make('programstudis.edit')->withEdit($edit)->withData($data)->withTahun($tahun);
		}
		dd($edit);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /programstudis/{id}
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

		$tahun = TahunGelombang::where('aktif','=','y')->first();
		$update = ProgramStudi::findOrFail($id);
		$update->tahun = $tahun['tahun'];
		$update->semester = $tahun['semester'];
		$update->gelombang = $tahun['gelombang'];
		$update->id_prodi = Input::get('pro');
		$update->id_konsentrasi = Input::get('kon');
		$update->save();

		if (is_null(Auth::id())) {
			return Redirect::to('data-pribadi');
		}else{
			return Redirect::to('data-pribadi/'.Auth::id().'/edit');
		}
		return Redirect::to('data-pribadi/'.Auth::id().'/edit');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /programstudis/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}