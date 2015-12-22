<?php

class ValidasisController extends \BaseController {

	/**
	 * Display a listing of validasis
	 *
	 * @return Response
	 */

	public function validasi($id)
	{
		$data = new Validasi;
		$data->no_pendaftaran = $id;
		$data->l1 = Input::get('form_pendaftaran');
		$data->l2 = Input::get('bukti'); 
		$data->l3 = Input::get('ijazah'); 
		$data->l4 = Input::get('transkrip'); 
		$data->l5 = Input::get('rekomendasi'); 
		$data->l6 = Input::get('foto3'); 
		$data->l7 = Input::get('foto4'); 
		$data->l8 = Input::get('surat_kesehatan'); 
		$data->d1 = Input::get('program_studi'); 
		$data->d2 = Input::get('akreditasi'); 
		$data->d3 = Input::get('ipk'); 
		$data->d4 = Input::get('jenjang'); 
		$data->save();
		
		$pendaftaran = Pendaftaran::find($id);
		if (Input::get('form_pendaftaran') && Input::get('bukti')  && Input::get('ijazah') && Input::get('transkrip') && Input::get('rekomendasi') && Input::get('foto3') && Input::get('foto4') && Input::get('surat_kesehatan') && Input::get('program_studi') && Input::get('akreditasi') && Input::get('ipk') && Input::get('jenjang') == 1) {
			$pendaftaran->validasi = 1;
		}else{
			$pendaftaran->validasi = 0;
		}
		$pendaftaran->save();
		return Redirect::back();
	}
	public function index()
	{
		// $validasis = Validasi::all();

		return View::make('validasis.index');
	}

	/**
	 * Show the form for creating a new validasi
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('validasis.create');
	}

	/**
	 * Store a newly created validasi in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		

		

		// return Redirect::to('validasis.index');
	}

	/**
	 * Display the specified validasi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// menampilkan data validasi
		$data_user = Dashboard::findOrFail($id);
		$validasi = Validasi::where('no_pendaftaran',$id)->first();
		$pendidikan = Pendidikan::where('id_pendaftar','=',$data_user->id_pendaftar)->firstOrFail();
		
		if (empty($validasi)) {
			return View::make('validasis.show', compact('validasi','pendidikan','data_user'));
		}else{
			return View::make('validasis.edit', compact('validasi','pendidikan','data_user'));
		}
	}

	/**
	 * Show the form for editing the specified validasi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$validasi = User::find($id);

		return View::make('validasis.edit', compact('validasi'));
	}

	/**
	 * Update the specified validasi in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$data = Validasi::where('no_pendaftaran',$id)->first();
		// dd($data);
		$data->l1 = Input::get('form_pendaftaran');
		$data->l2 = Input::get('bukti'); 
		$data->l3 = Input::get('ijazah'); 
		$data->l4 = Input::get('transkrip'); 
		$data->l5 = Input::get('rekomendasi'); 
		$data->l6 = Input::get('foto3'); 
		$data->l7 = Input::get('foto4'); 
		$data->l8 = Input::get('surat_kesehatan'); 
		$data->d1 = Input::get('program_studi'); 
		$data->d2 = Input::get('akreditasi'); 
		$data->d3 = Input::get('ipk'); 
		$data->d4 = Input::get('jenjang'); 
		$data->save();
		
		$pendaftaran = Pendaftaran::find($id);
		if (Input::get('form_pendaftaran') && Input::get('bukti')  && Input::get('ijazah') && Input::get('transkrip') && Input::get('rekomendasi') && Input::get('foto3') && Input::get('foto4') && Input::get('surat_kesehatan') && Input::get('program_studi') && Input::get('akreditasi') && Input::get('ipk') && Input::get('jenjang') == 1) {
			$pendaftaran->validasi = 1;
		}else{
			$pendaftaran->validasi = 0;
		}
		$pendaftaran->save();
		return Redirect::back();
		// return Redirect::route('validasis.index');
	}

	/**
	 * Remove the specified validasi from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Validasi::destroy($id);

		return Redirect::route('validasis.index');
	}

}
