<?php

class KonsentrasisController extends \BaseController {

	/**
	 * Display a listing of konsentrasis
	 *
	 * @return Response
	 */
	public function index()
	{
		$konsentrasi = Konsentrasi::with('Studi')->orderBy('id_prodi','asc')->get();
		$prodi = Studi::all();

		return View::make('konsentrasis.index', compact('konsentrasi','prodi','group'));
	}


	/**
	 * Show the form for creating a new konsentrasi
	 *
	 * @return Response
	 */
	public function getProdi()
	{
		$prodi = Studi::get(['prodi','id']);
		$group = array();
		foreach ($prodi as $value) {
				$group[] = array(
					'value'=>$value->id,
					'text'=>$value->prodi
				);
			}
		return $group = json_encode($group);
		// dd($prodi);
		// var_dump($group);
	}
	public function updateProdi()
	{
		$inputs = Input::all();
        $studi = Konsentrasi::find($inputs['pk']);
        $studi->id_prodi = $inputs['value'];
        // $studi->save();
        if ($studi->save()) {
        	echo "sukses";
        }
	}
	public function updateKonsentrasi()
	{
		$inputs = Input::all();
        $studi = Konsentrasi::find($inputs['pk']);
        $studi->konsentrasi = $inputs['value'];
        // $studi->save();
        if ($studi->save()) {
        	echo "sukses";
        }
	}
	public function create()
	{
		return View::make('konsentrasis.create');
	}

	/**
	 * Store a newly created konsentrasi in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Konsentrasi::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Konsentrasi::create($data);

		return Redirect::route('konsentrasi.index');
	}

	/**
	 * Display the specified konsentrasi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$konsentrasi = Konsentrasi::findOrFail($id);

		return View::make('konsentrasis.show', compact('konsentrasi'));
	}

	/**
	 * Show the form for editing the specified konsentrasi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$konsentrasi = Konsentrasi::find($id);

		return View::make('konsentrasis.edit', compact('konsentrasi'));
	}

	/**
	 * Update the specified konsentrasi in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$konsentrasi = Konsentrasi::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Konsentrasi::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$konsentrasi->update($data);

		return Redirect::route('konsentrasis.index');
	}

	/**
	 * Remove the specified konsentrasi from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Konsentrasi::destroy($id);

		// return Redirect::route('konsentrasis.index');
	}

}
