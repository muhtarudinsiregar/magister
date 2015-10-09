<?php

class DataPribadi extends \Eloquent {
	protected $fillable = [];
	protected $table = 'pendaftar';
	public static $rules = [
    'email'=>'required|email|unique:pendaftar',
    'pin'=>'required',
    'nm'=>'required|string',
    'tlhr'=>'required',
    'tglhr'=>'required',
    'jenisK'=>'required',
    'agama'=>'required',
    'no_hp'=>'required|numeric',
    'almtYk'=>'required|string',
    'kotakabYk'=>'required|string',
    'no_telYk'=>'required|numeric',
    'tinggalYk'=>'required|string',
    'almtNyk'=>'required|string',
    'kotakabNyk'=>'required|string',
    'prop'=>'required|string',
    'neg'=>'required|string',
    'no_telNyk'=>'required|numeric'
    ];
    public static $rules2 = [
    'email'=>'required',
    'nm'=>'required|string',
    'tlhr'=>'required',
    'tglhr'=>'required',
    'jenisK'=>'required',
    'agama'=>'required',
    'no_hp'=>'required|numeric',
    'almtYk'=>'required|string',
    'kotakabYk'=>'required|string',
    'no_telYk'=>'required|numeric',
    'tinggalYk'=>'required|string',
    'almtNyk'=>'required|string',
    'kotakabNyk'=>'required|string',
    'prop'=>'required|string',
    'neg'=>'required|string',
    'no_telNyk'=>'required|numeric'
    ];

    public static function get_id($mail)
    {
       return DataPribadi::where('email','=',$mail)->first(['id']);
   }

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
    // public function dashboard()
    // {
    //     return $this->hasMany('pendaftaran', 'id_pendaftar');
    // }
}