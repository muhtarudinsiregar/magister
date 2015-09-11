<?php

class DataPribadi extends \Eloquent {
	protected $fillable = [];
	protected $table = 'pendaftar';
	public static $rules = 
	[
		
	];

	 public function pekerjaan()
    {
        return $this->hasMany('Pekerjaan', 'id_pendaftar');
    }
     public function pendidikan()
    {
        return $this->hasMany('Pendidikan', 'id_pendaftar');
    }
     public function sponsor()
    {
        return $this->hasMany('Sponsor', 'id_pendaftar');
    }
     public function profesi()
    {
        return $this->hasMany('profesi', 'id_pendaftar');
    }
     public function riwayatpekerjaan()
    {
        return $this->hasMany('riwayatpekerjaan', 'id_pendaftar');
    }
     public function kontakdarurat()
    {
        return $this->hasOne('kontak', 'id_pendaftar');
    }
	public static function agama()
	{
		return DB::table('agama')->get();
	}
}