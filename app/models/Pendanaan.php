<?php

class Pendanaan extends \Eloquent {
	protected $fillable = [];
	protected $table = 'sponsor';
	public static $rules = [
		// 'dana' => 'required',
		// 'beasiswa' => 'required',
		// 'pemberi' => 'required',
		// 'almt' => 'required',
		// 'kotakab' => 'required',
		// 'prop' => 'required',
		// 'neg' => 'required',
		// 'pos' => 'required',
		// 'notel' => 'required',
		// 'nofax' => 'required',
		// 'mail' => 'required',
		// 'sttsbea' => 'required'
	];

	public static function beasiswa()
	{
		return DB::table('beasiswa')->get();
	}
}