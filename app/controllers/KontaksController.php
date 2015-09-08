<?php

class KontaksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /kontaks
	 *
	 * @return Response
	 */
	public function index()
	{
		echo "sukses";
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /kontaks/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('kontaks.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /kontaks
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$validator = Validator::make($data = Input::all(), Kontak::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();

        }
        // var_dump(Input::all());
        // Kontak::create($data);
        $user = new Kontak;
        $user->id_pendaftar = 1;
        $user->nama = Input::get('nama');
        $user->hubungan = Input::get('hubungan');
        $user->alamat = Input::get('alamat');
        $user->kotakab = Input::get('kotakab');
        $user->propinsi = Input::get('propinsi');
        $user->negara = Input::get('negara');
        $user->noTelepon = Input::get('noTelpon');
        $user->email = Input::get('email');

        $user->save();
        // return Redirect::to('kontaks');
	}

	/**
	 * Display the specified resource.
	 * GET /kontaks/{id}
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
	 * GET /kontaks/{id}/edit
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
	 * PUT /kontaks/{id}
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
	 * DELETE /kontaks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}