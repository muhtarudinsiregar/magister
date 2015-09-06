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
		return View::make('pendaftaran.programstudi');
	}
	public function data_pribadi()
	{
		return View::make('pendaftaran.data_pribadi');
	}

	public function pendidikan()
	{
		return View::make('pendaftaran.pendidikan');
	}
	public function pekerjaan()
	{
		return View::make('pendaftaran.pekerjaan');
	}
	public function pendanaan_beasiswa()
	{
		return View::make('pendaftaran.pendanaan_beasiswa');
	}
	public function kontak_darurat()
	{
		return View::make('pendaftaran.kontak_darurat');
	}
	public function jadwal_tes()
	{
		return View::make('pendaftaran.jadwal_tes');
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