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

		$data = [
		'jurusan' => ProgramStudi::prodi(),
		'konsentrasi' => ProgramStudi::konsentrasi(),
		'tahungelombang'=>TahunGelombang::where('tahun','=','2015/2016')->first()
		];
		// var_dump($data['tahungelombang']);
		return View::make('programstudis.create')->with('data',$data);
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
		$data_gel = Input::get('gel');
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
		'konsentrasi' => ProgramStudi::konsentrasi()
		];
		$edit = ProgramStudi::where('id_pendaftar','=',$id)->first();
		// dd($edit);
		return View::make('programstudis.edit')->withEdit($edit)->withData($data);
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
		//
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