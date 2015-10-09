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
		$email = Session::get('mail');
		$id = DataPribadi::where('email','=',$email)->first(['id']);
		$edit = Pekerjaan::where('id_pendaftar','=',$id['id'])->first();
		$riwayat = RiwayatPekerjaan::where('id_pendaftar','=',$id['id'])->orderBy('id','desc')->get();
		// dd(empty($edit));

		if (empty($edit)) {
			return View::make('pekerjaans.create')->withData($riwayat);
		}

		else
		{	
			return View::make('pekerjaans.back_edit')->withEdit($edit)->withData($riwayat);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pekerjaans/create
	 *
	 * @return Response
	 */
	public function RiwayatPekerjaanSaved()
	{
		if (Request::ajax()) {
			$email = Session::get('mail');
			$id_pendaftar = DataPribadi::where('email','=',$email)->first(['id']);

			$data = new RiwayatPekerjaan;
			$data->id_pendaftar =$id_pendaftar['id'];
			$data->posisi = Input::get('posisi');
			$data->institusi = Input::get('institusi');
			$data->masaKerja = Input::get('masaKerja');
			$data->save();

			$last_id = $data->id;
			$get_data = RiwayatPekerjaan::where('id_pendaftar','=',$id_pendaftar['id'])->orderBy('id','desc')->take(1)->first();

			$data ="<tbody><tr id='{$get_data['id']}'><td>{$get_data['posisi']}</td><td>{$get_data['institusi']}</td><td>{$get_data['masaKerja']}</td><td align='center'><button type='button' id='{$get_data['id']}' class='btn btn-danger hapus' onClick='remove()'>Hapus</button></td></tr></tbody >";
			$response = array(
				'status' => 'success',
				'msg' => 'Setting created successfully',
				'data'=>$data,
				'last_id'=>$get_data
				);

			return Response::json($response);
		}
	}
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
		$validator->setAttributeNames(Pekerjaan::$niceNames);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();

		}
		$email = Session::get('mail');
		$id_pendaftar = DataPribadi::get_id($email);

		$status_kerja = Input::get('sttskrja');
		if ($status_kerja != 'y') 
		{
			
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
		// dd(Input::all());

		$riwayat_id = RiwayatPekerjaan::where('id_pendaftar','=',$id_pendaftar['id'])->get(['id']);
		$pekerjaan = Input::only('pos_riw','ins_riw','th_riw');
		$posi = $pekerjaan['pos_riw'];
		$insitut = $pekerjaan['ins_riw'];
		$tahun = $pekerjaan['th_riw'];

		// if ($riwayat_id->isEmpty()) {
		// 	if (empty($pekerjaan['pos_riw'])||empty($pekerjaan['th_riw'])||empty($pekerjaan['ins_riw']))
		// 	{
		// 		Redirect::to('pendanaan');
		// 	}else
		// 	{
		// 		foreach ($posi as $key => $value)
		// 		{
		// 			DB::table('riwayatpekerjaan')->insert(
		// 				[
		// 				'id_pendaftar'=>$id_pendaftar['id'],
		// 				'posisi'=>$posi[$key],
		// 				'institusi'=>$insitut[$key],
		// 				'masaKerja'=>$tahun[$key]
		// 				]);
		// 		}
		// 	}
		// }
		// else
		// {
		// 	foreach ($riwayat_id as $key => $value)
		// 	{
		// 		DB::table('riwayatpekerjaan')->where('id',$value->id)->update(
		// 			[
		// 			'posisi'=>$posi[$key],
		// 			'institusi'=>$insitut[$key],
		// 			'masaKerja'=>$tahun[$key]
		// 			]);
		// 	}
		// }
		
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
		$riwayat = RiwayatPekerjaan::where('id_pendaftar','=',$id)->orderBy('id','desc')->get();
		$edit = Pekerjaan::where('id_pendaftar','=',$id)->first();

		return View::make('pekerjaans.back_edit')->withEdit($edit)->withData($riwayat);
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
		$validator = Validator::make($data = Input::all(), Pekerjaan::$rules);
		$email = Session::get('mail');
		$id_pendaftar = DataPribadi::get_id($email);

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
		

			// return Redirect::to('pendanaan/'.Auth::id().'/edit');
		if (is_null(Auth::id())) {
			return Redirect::to('pendanaan');
		}else{
			return Redirect::to('pendanaan/'.Auth::id().'/edit');
		}
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
		header('X-IC-Remove',true);
		$user = RiwayatPekerjaan::find($id);
		$user->delete();
		Request::header('X-IC-Remove',true);
		echo "
		<div class='col-lg-12' ic-remove-after='2s'>
			<div class='alert alert-success alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
				<strong>Berhasil </strong> Menghapus Data.
			</div>
		</div>
		";
	}

}