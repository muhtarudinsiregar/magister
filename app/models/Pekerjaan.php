<?php

class Pekerjaan extends \Eloquent {
	protected $fillable = [];
	protected $table = 'pekerjaan';
	public static $rules = [
	'pos'=>'string',
	'ins'=>'string',
	'almt'=>'string',
	'kotkab'=>'string',
	'prop'=>'alpha',
	'neg'=>'alpha',
	'notel'=>'numeric',
	'nofax'=>'numeric',
	'mail'=>'email',
	'thnkrj'=>'numeric'
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