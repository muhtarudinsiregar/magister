<?php

class GelombangsController extends \BaseController {

	/**
	 * Display a listing of gelombangs
	 *
	 * @return Response
	 */
	public function index()
	{
		$gelombang = Gelombang::orderBy('id','desc')->get();

		return View::make('gelombangs.index', compact('gelombang'));
	}

	/**
	 * Show the form for creating a new gelombang
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('gelombangs.create');
	}

	/**
	 * Store a newly created gelombang in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Gelombang::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Gelombang::create($data);
		Session::flash('message', 'Berhasil Menambahkan Data.');
		return Redirect::to('tahungelombang');
	}

	/**
	 * Display the specified gelombang.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$gelombang = Gelombang::findOrFail($id);

		return View::make('gelombangs.show', compact('gelombang'));
	}

	/**
	 * Show the form for editing the specified gelombang.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$gelombang = Gelombang::find($id);

		return View::make('gelombangs.edit', compact('gelombang'));
	}

	/**
	 * Update the specified gelombang in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$gelombang = Gelombang::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Gelombang::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$gelombang->update($data);

		return Redirect::route('gelombangs.index');
	}

	/**
	 * Remove the specified gelombang from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Gelombang::destroy($id);
	}

}
