<?php

class Pendidikan extends \Eloquent {
	protected $fillable = [];
	protected $table = 'pendidikan';
	public static $rules = [
		'jnjg' => 'required',
		'prgrmstd' => 'required',
		'akrdts' => 'required',
		'pt' => 'required',
		'thmsk' => 'required',
		'thlls' => 'required',
		'noijzh' => 'required',
		'ipk' => 'required',
		'skala' => 'required'
		'asosiasi' => 'required',
		'no_anggota' => 'required'
	];
	public static function akreditasi()
	{
		return DB::table('akreditasi')->get(); 
	}
}