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
		//
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
		//
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