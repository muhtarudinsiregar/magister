<?php

class Kontak extends \Eloquent {
	protected $fillable = [];
	protected $table = 'kontakdarurat';
	public static $rules = [
		'nama' => 'required',
		'hubungan' => 'required',
		'alamat' => 'required',
		'kotakab' => 'required',
		'propinsi' => 'required',
		'negara' => 'required',
		'noTelpon' => 'required',
		'email' => 'required'
	];
}