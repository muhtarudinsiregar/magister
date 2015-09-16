<?php

class BerandasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /berandas
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('berandas.create');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /berandas/create
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}
	public function post_login()
	{
		
	}
	/**
	 * Store a newly created resource in storage.
	 * POST /berandas
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Pekerjaan::$rules);

		if ($validator->fails())
		{
			return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
		} else
		{
			$credentials = [
				'email'=>Input::get('mail'),
				'password'=>Input::get('passwd')
			];
			$auth = User::where('email', '=', Input::get('mail'))->where('password', '=',Input::get('passwd'))->first(['id']);

			if ($auth) {
				Auth::login($auth);
				return Redirect::to('programstudi/'.$auth->id.'/edit');
			}else{
				Session::flash('notif','Email atau Password Salah!');
				echo Session::get('notif');
				return Redirect::to('beranda');
			}
		}
	}

	/**
	 * Display the specified resource.
	 * GET /berandas/{id}
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
	 * GET /berandas/{id}/edit
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
	 * PUT /berandas/{id}
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
	 * DELETE /berandas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}