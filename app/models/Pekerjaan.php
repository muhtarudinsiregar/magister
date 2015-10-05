<?php

class Pekerjaan extends \Eloquent {
	protected $fillable = [];
	protected $table = 'pekerjaan';
	public static $rules = [
	'pos'=>'required|string',
	'ins'=>'required|string',
	'almt'=>'required|string',
	'kotkab'=>'required|string',
	'prop'=>'required|string',
	'neg'=>'required|alpha',
	'notel'=>'required|numeric',
	'nofax'=>'required|numeric',
	'mail'=>'required|email',
	'thnkrj'=>'required|numeric'
	];

	public static $niceNames = [
	'pos'=>'Posisi',
	'ins'=>'Institusi',
	'almt'=>'Alamat',
	'kotkab'=>'Kota/Kabupaten',
	'prop'=>'Propinsi',
	'neg'=>'Negara',
	'notel'=>'No Telepon',
	'nofax'=>'No Faksimili',
	'mail'=>'Email',
	'thnkrj'=>'Lama Bekerja',
	];	

	public function pendaftar()
	{
		return $this->hasOne('DataPribadi','id');
	}
	public static function riwayatPekerjaan()
	{
		
	}

}