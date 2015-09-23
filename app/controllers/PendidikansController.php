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
		Session::put('mail', 'tes@gmail.com');
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
		$validator = Validator::make($data = Input::all(), Pendidikan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();

		}
        // var_dump(Input::all());

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
		$validator = Validator::make($data = Input::all(), ProgramStudi::$rules);

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
		if ($asosia!='')
		{
			$pekerjaan = Input::only('asosiasi','no_anggota');
			$asos = $pekerjaan['asosiasi'];
			$no = $pekerjaan['no_anggota'];

			foreach ($asos as $key => $value)
			{
				DB::table('profesi')->where('id_pendaftar',$id)->update(
					[
					'asosiasi'=>$asos[$key],
					'noAnggota'=>$no[$key]
					]);
			}	
		}else{

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
		<div class='col-sm-8' ic-remove-after='2s'>
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