<?php

class JadwalTes extends \Eloquent {
	protected $fillable = [];
	protected $table ='';
	public static $rules = [];

	public static function sesiTes()
	{
		return DB::table('sesites')->get();
	}
}