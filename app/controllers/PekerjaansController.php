<?php

class PekerjaansController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pekerjaans
	 *
	 * @return Response
	 */
	public function index()
	{
		var_dump(Session::get('mail'));
		return View::make('pekerjaans.create');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pekerjaans/create
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pekerjaans
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Pekerjaan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();

		}

		$status_kerja = Input::get('sttskrja');
		if ($status_kerja != 'y') 
		{
			$email = Session::get('mail');
        	$id_pendaftar = DataPribadi::get_id($email);

        	$user = new Pekerjaan;
        	$user->id_pendaftar = $id_pendaftar['id'];
        	$user->posisi = Input::get('pos');
        	$user->institusi = Input::get('ins');
        	$user->alamat = Input::get('almt');
        	$user->kotakab = Input::get('kotkab');
        	$user->propinsi = Input::get('prop');
        	$user->negara = Input::get('neg');
        	$user->noTelepon = Input::get('notel');
        	$user->noFaximile = Input::get('nofax');
        	$user->email = Input::get('mail');
        	$user->tahunMulai = Input::get('thnkrj');
	        $user->save();

		}
		
			
			$pekerjaan = Input::only('pos_riw','ins_riw','th_riw');
			$posi = $pekerjaan['pos_riw'];
			$insitut = $pekerjaan['ins_riw'];
			$tahun = $pekerjaan['th_riw'];

			foreach ($posi as $key => $value)
			{
				DB::table('riwayatpekerjaan')->insert(
					[
						'id_pendaftar'=>$id_pendaftar['id'],
						'posisi'=>$posi[$key],
						'institusi'=>$insitut[$key],
						'masaKerja'=>$tahun[$key]
					]);
			}
			 return Redirect::to('pendanaan');
	}

	/**
	 * Display the specified resource.
	 * GET /pekerjaans/{id}
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
	 * GET /pekerjaans/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$riwayat = RiwayatPekerjaan::where('id_pendaftar','=',$id)->get();
		$edit = Pekerjaan::where('id_pendaftar','=',$id)->first();
		// dd($edit);
		return View::make('pekerjaans.edit')->withEdit($edit)->withData($riwayat);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pekerjaans/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make($data = Input::all(), Kontak::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$status_kerja = Input::get('sttskrja');
		if ($status_kerja != 'y') 
		{
        	$user = Pekerjaan::find($id);
        	$user->posisi = Input::get('pos');
        	$user->institusi = Input::get('ins');
        	$user->alamat = Input::get('almt');
        	$user->kotakab = Input::get('kotkab');
        	$user->propinsi = Input::get('prop');
        	$user->negara = Input::get('neg');
        	$user->noTelepon = Input::get('notel');
        	$user->noFaximile = Input::get('nofax');
        	$user->email = Input::get('mail');
        	$user->tahunMulai = Input::get('thnkrj');
	        $user->save();

		}
		
			
			$pekerjaan = Input::only('pos_riw','ins_riw','th_riw');
			$posi = $pekerjaan['pos_riw'];
			$insitut = $pekerjaan['ins_riw'];
			$tahun = $pekerjaan['th_riw'];

			// foreach ($posi as $key => $value)
			// {
				// DB::table('riwayatpekerjaan')->insert(
				// 	[
				// 		'id_pendaftar'=>$id_pendaftar['id'],
				// 		'posisi'=>$posi[$key],
				// 		'institusi'=>$insitut[$key],
				// 		'masaKerja'=>$tahun[$key]
				// 	]);
			// }
			return Redirect::to('pendanaan/'.Auth::id().'/edit');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pekerjaans/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}