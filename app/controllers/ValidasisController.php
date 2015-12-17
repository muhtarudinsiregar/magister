<?php

class ValidasisController extends \BaseController {

	/**
	 * Display a listing of validasis
	 *
	 * @return Response
	 */
	public function index()
	{
		// $validasis = Validasi::all();

		return View::make('validasis.index');
	}

	/**
	 * Show the form for creating a new validasi
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('validasis.create');
	}

	/**
	 * Store a newly created validasi in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Validasi::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Validasi::create($data);

		return Redirect::route('validasis.index');
	}

	/**
	 * Display the specified validasi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$validasi = Dashboard::findOrFail($id);
		$pendidikan = Pendidikan::where('id_pendaftar','=',$validasi->id_pendaftar)->firstOrFail();
		return View::make('validasis.show', compact('validasi','pendidikan'));
	}

	/**
	 * Show the form for editing the specified validasi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$validasi = User::find($id);

		return View::make('validasis.edit', compact('validasi'));
	}

	/**
	 * Update the specified validasi in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validasi = Validasi::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Validasi::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$validasi->update($data);

		return Redirect::route('validasis.index');
	}

	/**
	 * Remove the specified validasi from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Validasi::destroy($id);

		return Redirect::route('validasis.index');
	}

}
