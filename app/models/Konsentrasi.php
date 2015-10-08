<?php

class Konsentrasi extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
	
	protected $table = "konsentrasi";
	// Don't forget to fill this array
	protected $fillable = [];

	public function studi()
    {
        return $this->belongsTo('Studi','id_prodi');
    }

}