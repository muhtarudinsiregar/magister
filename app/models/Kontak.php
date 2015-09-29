<?php

class Kontak extends \Eloquent {
	protected $fillable = ['nama','hubungan','alamat','kotakab','propinsi','negara','noTelepon','emai'];
	protected $table = 'kontakdarurat';
	public static $rules = [
		'nama' => 'required|string',
		'hubungan' => 'required',
		'alamat' => 'required|string',
		'kotakab' => 'required|string',
		'propinsi' => 'required|string',
		'negara' => 'required|string',
		'noTelepon' => 'required|numeric',
		'email' => 'email'
	];
	public static $niceNames = [
		'nama' => 'Nama',
		'hubungan' => 'Hubungan',
		'alamat' => 'Alamat',
		'kotakab' => 'Kota/Kabupaten',
		'propinsi' => 'Propinsi',
		'negara' => 'Negara',
		'noTelepon' => 'No Telepon',
		'email' => 'email'
	];
	public function pendaftar()
    {
        return $this->belongsTo('DataPribadi','id');
    }
	
}