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
		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /programstudis/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$data = [
			'jurusan' => ProgramStudi::prodi(),
			'konsentrasi' => ProgramStudi::konsentrasi()
		];
		return View::make('programstudis.create')->with('data',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /programstudis
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), ProgramStudi::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();

        }
        $program = new ProgramStudi;
        $program->no = 2;
        $program->tahun = date('Y');
        $program->gelombang = Input::get('gel');
        $program->id_prodi = Input::get('pro');
        $program->id_konsentrasi = Input::get('kon');
        $program->save();

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
		//
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