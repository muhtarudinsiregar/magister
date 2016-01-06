<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = User::paginate(10);
		// dd($data);
		return View::make('users.index')->with('data',$data);
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
		"email" => Input::get("username"),
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
		$validator = Validator::make($data = Input::all(), User::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		// dd(Input::all());
		$data = new User();
		$data->email = Input::get('email');
		$data->username = Input::get('username');
		$data->password = Hash::make(Input::get('password'));
		$data->save();
		return Redirect::to('users');
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
		$data = User::findOrFail($id);
		return View::make('users.edit')->with('data',$data);

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		User::$rules['email'] = 'required|unique:user,email,'.$id;
		$validator = Validator::make($data = Input::all(), User::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if (empty(Input::get('password'))) {
			$data = User::find($id);
			$data->username = Input::get('username');
			$data->email = Input::get('email');
			$data->save();
		}else{
			$data = User::find($id);
			$data->username = Input::get('username');
			$data->email = Input::get('email');
			$data->password = Hash::make(Input::get('password'));
			$data->save();
		}

		return Redirect::to('users');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);

		$user->delete();

		return Redirect::to('users');
	}


}
