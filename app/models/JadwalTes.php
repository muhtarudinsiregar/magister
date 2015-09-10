<?php

class JadwalTes extends \Eloquent {
	protected $fillable = [];
	protected $table ='pendaftaran';
	public static $rules = [];
	protected $primaryKey = 'no';
	public static function sesiTes()
	{
		return DB::table('sesites')->get();
	}
}