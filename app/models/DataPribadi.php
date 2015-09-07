<?php

class DataPribadi extends \Eloquent {
	protected $fillable = [];


	public static function agama()
	{
		return DB::table('agama')->get();
	}
}