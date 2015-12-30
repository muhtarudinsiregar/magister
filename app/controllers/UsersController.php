<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('users.login');
	}

	public function login()
	{
		$data = [];
		$validator = $this->getLoginValidator();
		if ($this->isPostRequest()) {
			if ($validator->passes()) {
				$credentials = $this->getLoginCredentials();
				if (Auth::attempt($credentials)) {
					return Redirect::to("dashboard");
				}
				return Redirect::back()->withErrors([
					"password" => ["Username atau Password Salah"]
					]);
			}else{
				Redirect::back()->withInput()->withErrors($validator);
				// $data["error"] = "Username atau password Salah.";
			}
		}
		return View::make('users.login', $data);  
	}
	public function logout()
	{
		Auth::logout();

		return Redirect::to("login");
	}
	protected function getLoginCredentials()
	{
		return [
		"username" => Input::get("username"),
		"password" => Input::get("password")
		];
	}
	protected function isPostRequest()
	{
		return Input::server("REQUEST_METHOD") == "POST";
	}

	protected function getLoginValidator()
	{
		return Validator::make(Input::all(), [
			"username" => "required",
			"password" => "required"
			]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
