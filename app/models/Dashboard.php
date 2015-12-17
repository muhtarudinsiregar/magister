<?php

class Dashboard extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
	protected $primaryKey = 'no';
    protected $table = 'pendaftaran';
	// Don't forget to fill this array
	protected $fillable = [];

	public function studi()
    {
        return $this->belongsTo('Studi','id_prodi');
    }
    public function pendaftar()
    {
        return $this->belongsTo('DataPribadi','id_pendaftar');
    }
    public function konsentrasi()
    {
        return $this->belongsTo('Konsentrasi','id_konsentrasi');
    }
    

    // public function pendidikan()
    // {
    //     return $this->hasOne('Pendidikan','id_pendaftar');
    // }
    // public function pekerjaan()
    // {
    //     return $this->hasMany('Pekerjaan','id_pendaftar');
    // }
    // public function beasiswa()
    // {
    //     return $this->hasMany('Beasiswa','id');
    // }
   



}