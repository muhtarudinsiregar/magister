<?php

class PendaftaranController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pendaftaran
	 *
	 * @return Response
	 */
	

	public function konfirmasi()
	{
		return View::make('pendaftaran.konfirmasi');
	}
	public function tes()
	{
		return View::make('basic-disabletabclick');
	}

	public function index()
	{
		var_dump(Session::get('mail'));
		return View::make('pendaftaran.pernyataan');
	}
	/**
	 * Show the form for creating a new resource.
	 * GET /pendaftaran/create
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pendaftaran
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), JadwalTes::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();

		}

		$email = Session::get('mail');
		$id_pendaftar = DataPribadi::get_id($email);

		$id = DataPribadi::where('email','=',$email)->first(['id']);
		$no = Pendaftaran::where('id_pendaftar','=',$id['id'])->first(['no']);
		$pernyataan = Pendaftaran::find($no['no']);
		$pernyataan->konfirm = Input::get('pernyataan');
		$pernyataan->save();

		
		
		$pribadi = DataPribadi::all()->find($id_pendaftar['id']);
		$data = DataPribadi::with('pekerjaan','pendidikan','sponsor','riwayatpekerjaan','kontakdarurat')->find($id_pendaftar['id']);
		
		
		Pendaftaran::pendaftar($pribadi);
		foreach ($data['pekerjaan']as $value)
		{
			Pendaftaran::pekerjaan($value);
		}
		foreach ($data['pendidikan']as $value)
		{
			Pendaftaran::pendidikan($value);
		}
		foreach ($data['sponsor']as $value)
		{
			Pendaftaran::sponsor($value);
		}
		foreach ($data['riwayatpekerjaan']as $value)
		{
			Pendaftaran::riwayatpekerjaan($value);
		}
		
		Pendaftaran::kontakdarurat($data->kontakdarurat);

		foreach ($data['profesi']as $value)
		{
			Pendaftaran::profesi($value);
		}	
		
		$id = DataPribadi::where('email','=',$email)->first(['id']);

		$ok = DB::table('pendaftarok')->where('email', $email)->pluck('id');
		
		$daftar = Pendaftaran::where('id_pendaftar','=',$id['id'])->first(['no']);
		$update = Pendaftaran::find($daftar['no']);
		$update->id_pendaftarOK = $ok;
		$update->save();
		return Redirect::to('konfirmasi');
	}

	/**
	 * Display the specified resource.
	 * GET /pendaftaran/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function sendmail()
	{
		$email = Session::get('mail');
		$data_pribadi = DataPribadi::where('email','=',$email)->first(['id','nama','tanggalLahir','noTelepon','email']);

		$pendaftaran = Pendaftaran::where('id_pendaftar','=',$data_pribadi['id'])->first(['tahun','semester','gelombang','id_prodi','id_konsentrasi']);
		$prodi = Pendaftaran::prodi($pendaftaran['id_prodi']);
		$konsentrasi = Pendaftaran::konsentrasi($pendaftaran['id_konsentrasi']);
		// dd($konsentrasi);
		// $data_pendaftaran = (array) $pendaftaran;
		// $data_pri = (array) $data_pribadi;
		$data = [
		'nama'=>$data_pribadi['nama'],
		'tanggalLahir'=>$data_pribadi['tanggalLahir'],
		'noTelepon'=>$data_pribadi['noTelepon'],
		'email'=>$data_pribadi['email'],
		'tahun'=>$pendaftaran['tahun'],
		'semester'=>$pendaftaran['semester'],
		'gelombang'=>$pendaftaran['gelombang'],
		'prodi'=>$prodi,
		'konsentrasi'=>$konsentrasi
		];
		
		// dd($data['email']);
		Mail::send('emails.confirm', $data, function($mail) use ($data){
		// Email dikirimkan ke address "momo@deviluke.com" 
    	  // dengan nama penerima "Momo Velia Deviluke"
			// dd($data);
			$mail->to($data['email'],$data['nama']);

      // Copy carbon dikirimkan ke address "haruna@sairenji" 
      // dengan nama penerima "Haruna Sairenji"
			// $mail->cc('redcar.studious@gmail.com', 'Haruna Sairenji');
			$mail->subject('Konfirmasi Email');

		});

		// return View::make('emails.confirm')->with('data',$data);
	}
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pendaftaran/{id}/edit
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
	 * PUT /pendaftaran/{id}
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
	 * DELETE /pendaftaran/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}