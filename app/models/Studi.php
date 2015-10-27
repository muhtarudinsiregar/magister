<?php

class Studi extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'id' => 'required',
		'prodi' => 'required'
	];
	protected $table = "programstudi";
	// Don't forget to fill this array
	protected $fillable = ['id','prodi'];

	public function konsentrasi()
    {
        return $this->hasMany('Konsentrasi','id_prodi');
    }


}