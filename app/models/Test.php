<?php

class Test extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'name' => 'required'
		'hub' => 'required',
		'almt' => 'required',
		'kab' => 'required',
		'prop' => 'required',
		'neg' => 'required',
		'tlp' => 'required',
		'mail' => 'required'
	];
	
	// Don't forget to fill this array
	protected $fillable = [];

}