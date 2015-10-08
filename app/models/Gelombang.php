<?php

class Gelombang extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
	protected $table = "tahungelombang";
	// Don't forget to fill this array
	protected $fillable = [];

}