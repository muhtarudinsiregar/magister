<?php

class DashboardsController extends \BaseController {

	/**
	 * Display a listing of dashboards
	 *
	 * @return Response
	 */
	public function index()
	{
		$dashboards = Dashboard::with('konsentrasi','studi','pendaftar')->get();
		$tahun = DB::table('tahungelombang')
		->select('tahun')
		->groupBy('tahun')
		->orderBy('tahun','desc')
		->get();
		$semester = DB::table('tahungelombang')
		->select('semester')
		->groupBy('semester')
		->orderBy('semester','desc')
		->get();
		$gelombang = DB::table('tahungelombang')
		->select('gelombang')
		->groupBy('gelombang')
		->orderBy('gelombang','desc')
		->get();
		$studi = Studi::all();
		$konsentrasi = Konsentrasi::all();
		// dd($dashboards);
		return View::make('dashboards.index', compact('dashboards','tahun','semester','gelombang','studi','konsentrasi'));
	}

	/**
	 * Show the form for creating a new dashboard
	 *
	 * @return Response
	 */
	public function cari()
	{
		$query = ['tahun'=>Input::get('tahun'),'semester'=>Input::get('semester'),'gelombang'=>Input::get('gelombang'),'id_prodi'=>Input::get('studi')];
		$get_data = Dashboard::where($query)->get(['no','id_pendaftar']);

		if ($get_data->isEmpty())
		{
			echo "data tidak ada";
		}else
		{
			foreach ($get_data as $value)
			{
				$data[] = $value->id_pendaftar;
			}	

			return $data_pendaftaran = Dashboard::with('konsentrasi','studi','pendaftar')->whereIn('id_pendaftar',$data)->get();
			// return $data_pendaftaran1 = DataPribadi::with('pekerjaan','pendidikan','agama_rel','pendaftar','beasiswa')->whereIn('id',$data)->get()->toArray();

			// foreach ($data_pendaftaran1 as $key => $value) {
			// 	if (empty($data_pendaftaran1[$key]['pekerjaan'][0]['institusi'])) {
			// 		echo "tidak ada";
			// 	}else{
			// 		var_dump($data_pendaftaran1[$key]['pekerjaan']['0']['institusi']);

			// 	}
			// }
			// var_dump($data_pendaftaran1[0]);
			//  $a = (object) array_merge($data,(array)$data_pendaftaran);
			// $a =array_merge($a,$data_pendaftaran1);
			// dd($data_pendaftaran1);

			
		}
	}

	public function cariPendaftar()
	{
		$data_pendaftaran = $this->cari();

		return View::make('dashboards.cari', compact('data_pendaftaran'));
		

		// $response = [
		// 	'data'=>$get_data,
		// 	'status'=>'success'
		// ];
		// return Response::json($response);

	}
	public function excel_data()
	{
		$data_pendaftaran = $this->cari();
		$a = array();
		foreach ($data_pendaftaran as $value) {
			$a[] = [
			'prodi'=>$value->studi->prodi,
			'konsentrasi'=>$value->konsentrasi->konsentrasi,
			'tahun'=>$value->tahun,
			'semester'=>$value->semester,
			'gelombang'=>$value->gelombang,
			'id_pendaftar'=>$value->id_pendaftar
			];
		}
		foreach ($a as $key=> $value)
		{
			$data[] = $a[$key]['id_pendaftar'];
		}
		// return $data;
		$data_pendaftaran1 = DataPribadi::with('pekerjaan','pendidikan','agama_rel','pendaftar','beasiswa')->whereIn('id',$data)->get()->toArray();

		foreach ($a as $key => $value) {
			$data_pendaftaran1[$key]['prodi']= $a[$key]['prodi'];
			$data_pendaftaran1[$key]['konsentrasi']= $a[$key]['konsentrasi'];
			$data_pendaftaran1[$key]['tahun']= $a[$key]['tahun'];
			$data_pendaftaran1[$key]['semester']= $a[$key]['semester'];
			$data_pendaftaran1[$key]['gelombang']= $a[$key]['gelombang'];
		}
		return $data_pendaftaran1;

	}
	public function exportToExcel()
	{
		Excel::create('Data Pendaftar', function($excel) {
			// $excel->setBorder('1px dashed #CCC');
			$excel->sheet('Data Pendaftaran', function($sheet) {
				$users = $this->excel_data();
				// dd($users);
				$sheet->loadView('dashboards.excels', ['users' => $users]);
			});
		})->export('xlsx');
	}

	public function create()
	{
		$users1 = $this->cari();
		// foreach ($data_pendaftaran as $value) {
		// 	$id_pendaftar = $value->id_pendaftar;
		// 	$konsentrasi = $value->studi->prodi
		// 	$konsentrasi = $value->konsentrasi->konsentrasi
		// }
		// return View::make('dashboards.create');
	}

	/**
	 * Store a newly created dashboard in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Dashboard::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Dashboard::create($data);

		return Redirect::route('dashboards.index');
	}

	/**
	 * Display the specified dashboard.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$dashboard = Dashboard::findOrFail($id);

		return View::make('dashboards.show', compact('dashboard'));
	}

	/**
	 * Show the form for editing the specified dashboard.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$dashboard = Dashboard::find($id);

		return View::make('dashboards.edit', compact('dashboard'));
	}

	/**
	 * Update the specified dashboard in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$dashboard = Dashboard::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Dashboard::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$dashboard->update($data);

		return Redirect::route('dashboards.index');
	}

	/**
	 * Remove the specified dashboard from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Dashboard::destroy($id);

		return Redirect::route('dashboards.index');
	}

}
