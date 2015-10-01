<?php

class Pendanaan extends \Eloquent {
	protected $fillable = [];
	protected $table = 'sponsor';
	public static $rules = [
		'dana' => '',
		'beasiswa' => '',
		'pemberi' => 'regex:/^[\pL\s]+$/u',
		'almt' => 'string',
		'kotakab' => 'string',
		'prop' => 'string',
		'neg' => 'string',
		'pos' => 'string',
		'notel' => 'numeric',
		'nofax' => 'numeric',
		'mail' => 'email',
		'sttsbea' => ''
	];
	public static $niceNames = [
		'pemberi' => 'Pemberi Beasiswa',
		'almt' => 'Alamat',
		'kotakab' => 'Kota/Kabupaten',
		'prop' => 'Propinsi',
		'neg' => 'Negara',
		'pos' => 'Posisi',
		'notel' => 'No Telepon',
		'nofax' => 'No Faksimili',
		'mail' => 'Email',
	];

	public static function beasiswa()
	{
		return DB::table('beasiswa')->get();
	}
}