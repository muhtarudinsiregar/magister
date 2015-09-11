<?php

class Sponsor extends \Eloquent {
	protected $fillable = [];
	protected $table = 'Sponsor';


	public function pendaftar()
    {
        return $this->hasOne('DataPribadi','id');
    }
}