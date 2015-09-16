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
	public static function find_id_pendaftar($id)
	{
		return JadwalTes::where('id_pendaftar','=',$id)->first(['no']);
	}
}