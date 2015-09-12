<?php

class JadwalTes extends \Eloquent {
	protected $fillable = ['asas','sesiTes'];

	protected $table ='pendaftaran';
	public static $rules = [];
	protected $primaryKey = 'no';
	public static function sesiTes()
	{
		return DB::table('sesites')->get();
	}
}