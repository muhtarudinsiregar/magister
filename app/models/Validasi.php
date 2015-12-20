<?php

class Validasi extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
	protected $table = 'validasi';
	// Don't forget to fill this array
	protected $fillable = [];

}