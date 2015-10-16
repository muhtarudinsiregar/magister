<?php

class Konsentrasi extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'konsentrasi' => 'required'
	];
	
	protected $table = "konsentrasi";
	// Don't forget to fill this array
	protected $fillable = ['id_prodi','id','konsentrasi'];

	public function studi()
    {
        return $this->belongsTo('Studi','id_prodi');
    }
    // public function pendaftaran()
    // {
    // 	return $this->hasMany('pendaftaran','id_konsentrasi');
    // }

}