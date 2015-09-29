<?php

class Pendidikan extends \Eloquent {
	protected $fillable = [];
	protected $table = 'pendidikan';
	public static $rules = [
		'jnjg' => 'required',
		'prgrmstd' => 'required|regex:/^[\pL\s]+$/u',//buat alfabet dgn spasi
		'akrdts' => 'required|regex:/^[\pL\s]+$/u',
		'pt' => 'required|regex:/^[\pL\s]+$/u',
		'thmsk' => 'required|numeric',
		'thlls' => 'required|numeric',
		'noijzh' => 'required|string',
		'ipk' => 'required|numeric',
		'skala' => 'required|numeric'
		// 'asosiasi' => 'required',
		// 'no_anggota' => 'required'
	];
	public static $messages = [
		'required' => 'Bagian :attribute Harus diisi '
	];

	public function pendaftar()
    {
        return $this->hasOne('DataPribadi','id');
    }
	public static function akreditasi()
	{
		return DB::table('akreditasi')->get(); 
	}
}