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
		var_dump(Session::get('mail'));
		// Session::put('mail', 'tes@gmail.com');
		$email = Session::get('mail');
		$id = DataPribadi::where('email','=',$email)->first(['id']);

		$profesi = Profesi::where('id_pendaftar','=',$id['id'])->get();
		$edit = Pendidikan::where('id_pendaftar','=',$id['id'])->first();
		if (is_null($edit['id'])) {
			return View::make('pendidikans.create');
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
		$email = Session::get('mail');
		$id_pendaftar = DataPribadi::where('email','=',$email)->first(['id']);
		
		$pekerjaan = Input::only('asosiasi2','no_anggota2');
		$asos = $pekerjaan['asosiasi2'];
		$no = $pekerjaan['no_anggota2'];
		// dd(Input::all());

		foreach ($asos as $key => $value)
		{
			DB::table('profesi')->insert(
				[
				'id_pendaftar'=>$id_pendaftar['id'],
				'asosiasi'=>$asos[$key],
				'noAnggota'=>$no[$key]
				]);
		}
		// Request::header('X-IC-Remove',true);
		echo "
		<div class='col-sm-12' ic-remove-after='2s'>
			<div class='alert alert-success alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
				<strong>Berhasil </strong> Menambahkan Data.
			</div>
		</div>
		";
		$header = ['X-IC-Remove'=>true];
		Redirect::to('pendidikan', $status, $header);
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
					'id_pendaftar'=>$id_pendaftar['id'],
					'asosiasi'=>$asos[$key],
					'noAnggota'=>$no[$key]
					]);
			}	
		}else{
			echo "Error";
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
		$profesi = Profesi::where('id_pendaftar','=',$id)->get();
		$edit = Pendidikan::where('id_pendaftar','=',$id)->first();
		// dd($edit);
		return View::make('pendidikans.edit')->withEdit($edit)->withProfesi($profesi);
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

        // line utk perulangan profesi
		$asosia = Input::get('asosiasi');

		$email = Session::get('mail');
		$id_pendaftar = DataPribadi::get_id($email);
		$profesi_id = Profesi::where('id_pendaftar','=',$id_pendaftar['id'])->get(['id']);

		

		if ($profesi_id->isEmpty())
		{
			$pekerjaan = Input::only('asosiasi','no_anggota');
			$asos = $pekerjaan['asosiasi'];
			$no = $pekerjaan['no_anggota'];

			foreach ($asos as $key => $value)
			{
				DB::table('profesi')->insert(
					[
					'id_pendaftar'=>$id_pendaftar['id'],
					'asosiasi'=>$asos[$key],
					'noAnggota'=>$no[$key]
					]);
			}	
		}else{

			$pekerjaan = Input::only('asosiasi','no_anggota');
			// dd($profesi_id);
			$asos = $pekerjaan['asosiasi'];
			$no = $pekerjaan['no_anggota'];
			foreach ($profesi_id as $key => $value) {
				DB::table('profesi')->where('id',$value->id)->update(
					[
					'asosiasi'=>$asos[$key],
					'noAnggota'=>$no[$key]
					]);
			}
		}

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

		// header('X-IC-Remove',true);
		$user = Profesi::find($id);
		$user->delete();
		Request::header('X-IC-Remove',true);
		echo "
		<div class='col-sm-8' ic-remove-after='3s'>
			<div class='alert alert-success alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
				<strong>Berhasil </strong> Menghapus Data.
			</div>
		</div>
		";
		// return Redirect::to('Pendidikan');
		// dd($user);
		// Response::header('X-IC-Remove',true);
	}

}