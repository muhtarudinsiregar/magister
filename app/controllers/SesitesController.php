<?php

class SesitesController extends \BaseController {

	/**
	 * Display a listing of sesites
	 *
	 * @return Response
	 */
	public function index()
	{
		$sesites = Sesite::orderBy('sesi','asc')->get();

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
		// dd(Input::all());
		// $waktu = Input::get('waktu');

		$jam_awal = Input::get('jam_awal');
		$jam_akhir = Input::get('jam_akhir');
		$jam = substr($jam_awal, 0,2);

		if ($jam =="08" or $jam =="09" or $jam =="10") {
			$waktu = "Pagi";
		}else{
			$waktu = "Siang";
		}
		$time = $waktu.":".$jam_awal." - ".$jam_akhir;
		// dd($time);

		$data = new Sesite;
		$data->sesi = $time;
		$data->save();

		Session::flash('message', 'Berhasil Menambahkan Data');
		// Sesite::create($data);

		return Redirect::to('sesites');
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
		$sesites = Sesite::find($id);
		// $sesites = explode(' ', $sesites);
		// dd($sesites);

		return View::make('sesites.edit', compact('sesites'));
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

	}

}
