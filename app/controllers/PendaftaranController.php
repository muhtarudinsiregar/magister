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
		return Redirect::to('mail');
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
		$data_pribadi = DataPribadi::where('email','=',$email)->first([
			'id',
			'nama',
			'tempatLahir',
			'tanggalLahir',
			'noHP',
			'noTelpYK',
			'noTelepon',
			'email',
			'alamatYk',
			'alamat',
			'jenisKelamin',
			'kotakabYK',
			'kotakab',
			'propinsi',
			'negara'
			]);

		$pendaftaran = Pendaftaran::where('id_pendaftar','=',$data_pribadi['id'])->first(['no','tahun','semester','gelombang','id_prodi','id_konsentrasi','waktu']);
		date_default_timezone_set("Asia/Jakarta"); 
		$update_waktu = Pendaftaran::find($pendaftaran['no']);
		$update_waktu->waktu = date('y-m-d H:i:s');
		$update_waktu->save();
		$prodi = Pendaftaran::prodi($pendaftaran['id_prodi']);
		$konsentrasi = Pendaftaran::konsentrasi($pendaftaran['id_konsentrasi']);
		// dd($konsentrasi);
		// $data_pendaftaran = (array) $pendaftaran;
		// $data_pri = (array) $data_pribadi;
		$data = [
		'nama'=>ucwords(strtolower($data_pribadi['nama'])),
		'tempatLahir'=>$data_pribadi['tempatLahir'],
		'tanggalLahir'=>$data_pribadi['tanggalLahir'],
		'noTelpYK'=>$data_pribadi['noTelpYK'],
		'jenisKelamin'=>$data_pribadi['jenisKelamin'],
		'noTelpYK'=>$data_pribadi['noTelpYK'],
		'alamatYk'=>$data_pribadi['alamatYk'],
		'kotakabYK'=>$data_pribadi['kotakabYK'],
		'alamat'=>$data_pribadi['alamat'],
		'noTelepon'=>$data_pribadi['noTelepon'],
		'kotakab'=>$data_pribadi['kotakab'],
		'negara'=>$data_pribadi['negara'],
		'propinsi'=>$data_pribadi['propinsi'],
		'email'=>$data_pribadi['email'],
		'noHP'=>$data_pribadi['noHP'],
		'tahun'=>$pendaftaran['tahun'],
		'semester'=>$pendaftaran['semester'],
		'gelombang'=>$pendaftaran['gelombang'],
		'waktu'=>$pendaftaran['waktu'],
		'prodi'=>$prodi,
		'konsentrasi'=>$konsentrasi
		];
		// dd($data);

		//===================generate pdf===============


		$pdf = PDF::loadView('emails.new_pdf_generate',$data);
		$data1 = [
			'data'=>$data,
			'pdf'=>$pdf->output()
		];
		// return $pdf->download('laporan.pdf');
		// dd($pdf);
		// =====================email==================
		
		Mail::send('emails.boilerplate_inliner', $data, function($mail) use ($data1){
		// Email dikirimkan ke address "momo@deviluke.com" 
    	  // dengan nama penerima "Momo Velia Deviluke"
			// dd($data);
			$mail->to($data1['data']['email'],$data1['data']['nama']);

      // Copy carbon dikirimkan ke address "haruna@sairenji" 
      // dengan nama penerima "Haruna Sairenji"
			// $mail->cc('redcar.studious@gmail.com', 'Haruna Sairenji');
			$mail->subject('Konfirmasi Pendaftaran PPs FTI UII');
			$mail->attachData($data1['pdf'],'formulir.pdf',['mime'=>'application/pdf']);

		});
		Session::forget('mail');
		return Redirect::to('konfirmasi');
		// return View::make('emails.boilerplate');
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

	public function pdf()
	{
		return View::make('emails.tes');
	}

}