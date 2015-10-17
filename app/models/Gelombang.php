<?php

class Gelombang extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'tahun' => 'required',
		'semester' => 'required',
		'gelombang' => 'required',
		'biaya' => 'required'
	];
	protected $table = "tahungelombang";
	// Don't forget to fill this array
	protected $fillable = ['tahun','semester','gelombang','biaya','tanggalTutup'];

}