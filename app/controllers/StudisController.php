<?php

class StudisController extends \BaseController {

	/**
	 * Display a listing of studis
	 *
	 * @return Response
	 */
	public function index()
	{
		$studis = Studi::all();

		return View::make('studis.index', compact('studis'));
	}

	/**
	 * Show the form for creating a new studi
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('studis.create');
	}

	/**
	 * Store a newly created studi in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// dd(Input::all());
		$validator = Validator::make($data = Input::all(), Studi::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		// dd($data);
		Studi::create($data);

		// return Redirect::route('studi.index');
	}

	/**
	 * Display the specified studi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$studi = Studi::findOrFail($id);

		return View::make('studis.show', compact('studi'));
	}

	/**
	 * Show the form for editing the specified studi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$studi = Studi::find($id);

		return View::make('studis.edit', compact('studi'));
	}

	/**
	 * Update the specified studi in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$studi = Studi::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Studi::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$studi->update($data);

		return Redirect::route('studis.index');
	}

	/**
	 * Remove the specified studi from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Studi::destroy($id);

		return Redirect::route('studis.index');
	}

}
