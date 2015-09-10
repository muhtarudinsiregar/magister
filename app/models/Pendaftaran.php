<?php

class Pendaftaran extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
	protected $table = 'pendaftaran';
	protected $primaryKey = 'no';
	// Don't forget to fill this array
	protected $fillable = [];

}