<?php

class ProgramStudi extends \Eloquent {
	protected $fillable = [];
	public static $rules = [];
	protected $table = 'pendaftaran';
	protected $primaryKey = 'no';
	public static function prodi()
	{
		return DB::table('programstudi')->get();
	}
	public static function konsentrasi()
	{
		return DB::table('konsentrasi')->get();
	}
}