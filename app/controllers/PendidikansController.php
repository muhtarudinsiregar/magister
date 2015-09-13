<?php

class PendidikansController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pendidikans
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pendidikans/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$akreditasi = Pendidikan::akreditasi();
		return View::make('Pendidikans.create')->with('akreditasi',$akreditasi);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pendidikans
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Pendidikan::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();

        }
        // var_dump(Input::all());

        $user = new Pendidikan;
        $user->id_pendaftar = 1;
        $user->jenjang = Input::get('jnjg');
        $user->programStudi = Input::get('prgrmstd');
        $user->akreditasi = Input::get('akrdts');
        $user->PT = Input::get('pt');
        $user->tahunMasuk = Input::get('thmsk');
        $user->tahunLulus = Input::get('thlls');
        $user->noIjazah = Input::get('noijzh');
        $user->IPK = Input::get('ipk');
        $user->skala = Input::get('skala');

        $user->save();

        // line utk perulangan profesi
        $asosia = Input::get('asosiasi');
        if ($asosia!='')
        {
        	$pekerjaan = Input::only('asosiasi','no_anggota');
			$asos = $pekerjaan['asosiasi'];
			$no = $pekerjaan['no_anggota'];

			foreach ($asos as $key => $value)
			{
				DB::table('profesi')->insert(
					[
						'id_pendaftar'=>1,
						'asosiasi'=>$asos[$key],
						'noAnggota'=>$no[$key]
					]);
			}	
        }
        return Redirect::to('pekerjaan');
	}

	/**
	 * Display the specified resource.
	 * GET /pendidikans/{id}
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
	 * GET /pendidikans/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$edit = Pendidikan::find($id);
		return View::make('pendidikans.edit')->withEdit($edit);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pendidikans/{id}
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
	 * DELETE /pendidikans/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}