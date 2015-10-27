<?php

class Sesite extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'jam_awal' => 'required',
		'jam_akhir' => 'required'
	];
	protected $table = 'sesites';
	// Don't forget to fill this array
	protected $fillable = [];

}