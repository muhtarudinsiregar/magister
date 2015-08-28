<?php

class RegistersController extends \BaseController {

	/**
	 * Display a listing of registers
	 *
	 * @return Response
	 */
	public function index()
	{
		$registers = Register::all();

		return View::make('registers.index', compact('registers'));
	}

	/**
	 * Show the form for creating a new register
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registers.create');
	}

	/**
	 * Store a newly created register in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Register::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Register::create($data);

		return Redirect::route('registers.index');
	}

	/**
	 * Display the specified register.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$register = Register::findOrFail($id);

		return View::make('registers.show', compact('register'));
	}

	/**
	 * Show the form for editing the specified register.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$register = Register::find($id);

		return View::make('registers.edit', compact('register'));
	}

	/**
	 * Update the specified register in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$register = Register::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Register::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$register->update($data);

		return Redirect::route('registers.index');
	}

	/**
	 * Remove the specified register from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Register::destroy($id);

		return Redirect::route('registers.index');
	}

}
