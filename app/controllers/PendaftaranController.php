<?php

class PendaftaranController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pendaftaran
	 *
	 * @return Response
	 */
	
	public function beranda()
	{
		return View::make('pendaftaran.beranda');
	}
	public function index()
	{
		// return View::make('pendaftaran.programstudi');
	}
	public function pernyataan()
	{
		return View::make('pendaftaran.pernyataan');
	}
	public function konfirmasi()
	{
		return View::make('pendaftaran.konfirmasi');
	}
	public function tes()
	{
		return View::make('basic-disabletabclick');
	}
	/**
	 * Show the form for creating a new resource.
	 * GET /pendaftaran/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pendaftaran
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pendaftaran/{id}
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
	 * GET /pendaftaran/{id}/edit
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
	 * PUT /pendaftaran/{id}
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
	 * DELETE /pendaftaran/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}