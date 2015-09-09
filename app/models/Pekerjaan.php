<?php

class Pekerjaan extends \Eloquent {
	protected $fillable = [];
	protected $table = 'pekerjaan';
	public static $rules = [
		// 'name' => 'required'
		// 'hub' => 'required',
		// 'almt' => 'required',
		// 'kab' => 'required',
		// 'prop' => 'required',
		// 'neg' => 'required',
		// 'tlp' => 'required',
		// 'mail' => 'required'
	];

	public static function riwayatPekerjaan()
	{
		
	}

}