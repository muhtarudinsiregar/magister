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
		->get();
		$semester = DB::table('tahungelombang')
		->select('semester')
		->groupBy('semester')
		->get();
		$gelombang = DB::table('tahungelombang')
		->select('gelombang')
		->groupBy('gelombang')
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
		$query = ['tahun'=>Input::get('tahun'),'semester'=>Input::get('semester'),'gelombang'=>Input::get('gelombang'),'id_prodi'=>Input::get('studi'),'id_konsentrasi'=>Input::get('konsentrasi')];
		$get_data = Dashboard::where($query)->get(['no','id_pendaftar']);

		if ($get_data->isEmpty())
		{
			// echo "data tidak ada";
		}else
		{
			foreach ($get_data as $value)
			{
					$data[] = $value->id_pendaftar;
			}	

			return $data_pendaftaran = Dashboard::with('konsentrasi','studi','pendaftar')->whereIn('id_pendaftar',$data)->get();

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

	public function exportToExcel()
	{


		Excel::create('Data Pendaftar', function($excel) {
			// $excel->setBorder('1px dashed #CCC');
			$excel->sheet('Data Pendaftaran', function($sheet) {
				$users = $this->cari();
				// dd($users);
				$sheet->loadView('dashboards.excel', ['users' => $users]);
    		});
		})->export('xlsx');
	}

	public function create()
	{
		return View::make('dashboards.create');
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
