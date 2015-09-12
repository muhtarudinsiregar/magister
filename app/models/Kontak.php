<?php

class Kontak extends \Eloquent {
	protected $fillable = ['nama','hubungan','alamat','kotakab','propinsi','negara','noTelepon','emai'];
	protected $table = 'kontakdarurat';
	public static $rules = [
		'nama' => 'required',
		'hubungan' => 'required',
		'alamat' => 'required',
		'kotakab' => 'required',
		'propinsi' => 'required',
		'negara' => 'required',
		'noTelepon' => 'required',
		'email' => 'required'
	];
	
	public function pendaftar()
    {
        return $this->belongsTo('DataPribadi','id');
    }
	
}