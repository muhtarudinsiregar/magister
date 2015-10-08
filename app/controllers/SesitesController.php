<?php

class SesitesController extends \BaseController {

	/**
	 * Display a listing of sesites
	 *
	 * @return Response
	 */
	public function index()
	{
		$sesites = Sesite::all();

		return View::make('sesites.index', compact('sesites'));
		// return View::make('sesites.index');
	}

	/**
	 * Show the form for creating a new sesite
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sesites.create');
	}

	/**
	 * Store a newly created sesite in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Sesite::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Sesite::create($data);

		return Redirect::route('sesites.index');
	}

	/**
	 * Display the specified sesite.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$sesite = Sesite::findOrFail($id);

		return View::make('sesites.show', compact('sesite'));
	}

	/**
	 * Show the form for editing the specified sesite.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sesite = Sesite::find($id);

		return View::make('sesites.edit', compact('sesite'));
	}

	/**
	 * Update the specified sesite in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$sesite = Sesite::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Sesite::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$sesite->update($data);

		return Redirect::route('sesites.index');
	}

	/**
	 * Remove the specified sesite from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Sesite::destroy($id);

		return Redirect::route('sesites.index');
	}

}
