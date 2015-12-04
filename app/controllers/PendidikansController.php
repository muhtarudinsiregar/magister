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
		// var_dump(Session::get('mail'));
		// Session::put('mail', 'tes@gmail.com');
		$email = Session::get('mail');
		$id = DataPribadi::where('email','=',$email)->first(['id']);

		$profesi = Profesi::where('id_pendaftar','=',$id['id'])->orderBy('id','desc')->get();
		$edit = Pendidikan::where('id_pendaftar','=',$id['id'])->first();
		// dd($profesi);
		if (is_null($edit['id'])) {
			return View::make('pendidikans.create')->withProfesi($profesi);
		}else
		{
			return View::make('pendidikans.back_edit')->withEdit($edit)->withProfesi($profesi);
		}

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pendidikans/create
	 *
	 * @return Response
	 */
	public function profesiSaved()
	{
		// if (Request::ajax()) {
			$email = Session::get('mail');
			$id_pendaftar = DataPribadi::where('email','=',$email)->first(['id']);


			$data = new Profesi;
			$data->id_pendaftar =$id_pendaftar['id'];
			$data->asosiasi = Input::get('asosiasi');
			$data->noAnggota = Input::get('no_anggota');
			$data->save();
			
			$last_id = $data->id;
			$get_data = Profesi::where('id_pendaftar','=',$id_pendaftar['id'])->orderBy('id','desc')->take(1)->first();
			$data ="<tbody><tr id='tr-{$get_data['id']}'><td>{$get_data['asosiasi']}</td><td>{$get_data['noAnggota']}</td><td align='center'><button type='button' id='{$get_data['id']}' class='btn btn-danger hapus_btn'>Hapus</button></td></tr></tbody>";
			
			$response = array(
                'status' => 'success',
                'msg' => 'Setting created successfully',
                'data'=>$data,
                'last_id'=>$get_data
            );

            return Response::json($response);
	}
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pendidikans
	 *
	 * @return Response
	 */
	public function store()
	{
		$niceNames = [
		'jnjg'=>'Jenjang',
		'prgrmstd'=>'Program Studi',
		'akrdts'=>'Akreditasi',
		'pt'=>'Perguruan Tinggi',
		'thmsk'=>'Tahun Masuk',
		'thlls'=>'Tahun Lulus',
		'noijzh'=>'No Ijazah',
		'ipk'=>'IPK', 
		'skala'=>'Skala'
		];

		$validator = Validator::make($data = Input::all(), Pendidikan::$rules);
		$validator->setAttributeNames($niceNames); 
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();

		}

		$email = Session::get('mail');
		$id_pendaftar = DataPribadi::get_id($email);

		$user = new Pendidikan;
		$user->id_pendaftar = $id_pendaftar['id'];
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

		// $asosia = Input::get('asosiasi');
		// if ($asosia!='')
		// {
		// 	$pekerjaan = Input::only('asosiasi','no_anggota');
		// 	$asos = $pekerjaan['asosiasi'];
		// 	$no = $pekerjaan['no_anggota'];

		// 	foreach ($asos as $key => $value)
		// 	{
		// 		DB::table('profesi')->insert(
		// 			[
		// 			'id_pendaftar'=>$id_pendaftar['id'],
		// 			'asosiasi'=>$asos[$key],
		// 			'noAnggota'=>$no[$key]
		// 			]);
		// 	}	
		// }
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
		$profesi = Profesi::where('id_pendaftar','=',$id)->get();
		$edit = Pendidikan::where('id_pendaftar','=',$id)->first();
		dd($edit);
		return View::make('pendidikans.back_edit')->withEdit($edit)->withProfesi($profesi);
	}

	// public function loadProfesiAjax()
	// {
	// 	$profesi = Profesi::where('id_pendaftar','=','27')->get();
	// 	// dd($profesi);
	// 	// return Response::json($profesi);
	// 	$profesi = json_encode($profesi);
	// 	return $profesi;
	// 	// $b = json_decode($a);
	// }

	/**
	 * Update the specified resource in storage.
	 * PUT /pendidikans/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$niceNames = [
		'jnjg'=>'Jenjang',
		'prgrmstd'=>'Program Studi',
		'akrdts'=>'Akreditasi',
		'pt'=>'Perguruan Tinggi',
		'thmsk'=>'Tahun Masuk',
		'thlls'=>'Tahun Lulus',
		'noijzh'=>'No Ijazah',
		'ipk'=>'IPK', 
		'skala'=>'Skala'
		];
		
		$validator = Validator::make($data = Input::all(), Pendidikan::$rules);
		$validator->setAttributeNames($niceNames);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		// dd(Input::all());
		$user = Pendidikan::find($id);
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


		if (is_null(Auth::id())) {
			return Redirect::to('pekerjaan');
		}else{
			return Redirect::to('pekerjaan/'.Auth::id().'/edit');
		}
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

		$user = Profesi::find($id);
		$user->delete();
		return header('X-IC-Remove:true');
		// return $this->response->header('X-IC-Remove', true);
	}

}