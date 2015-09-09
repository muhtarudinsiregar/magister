<?php

class DataPribadi extends \Eloquent {
	protected $fillable = [];
	protected $table = 'pendaftar';
	public static $rules = 
	[
		
	];

	public static function agama()
	{
		return DB::table('agama')->get();
	}
}