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
		Session::flash('message', 'Berhasil Menambahkan Data Baru');
		return Redirect::route('studi.index');
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
	public function updateProdi()
	{
		$inputs = Input::all();
        $studi = Studi::find($inputs['pk']);
        $studi->prodi = $inputs['value'];
        // $studi->save();
        if ($studi->save()) {
        	echo "sukses";
        }
	}
	/**
	 * Update the specified studi in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// $studi = Studi::find($id);
		// $studi->prodi = Input::get('prodi');
		// $studi->save();
		// $studi = Studi::findOrFail($id);
		// // dd();
		// $validator = Validator::make($data = Input::all(), Studi::$rules);

		// if ($validator->fails())
		// {
		// 	return Redirect::back()->withErrors($validator)->withInput();
		// }

		// $studi->update($data);

		// echo "sukses";
		return Redirect::to('studi');
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

	}

}
