<?php

class Pendaftaran extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
	protected $table = 'pendaftaran';
	protected $primaryKey = 'no';
	// Don't forget to fill this array
	protected $fillable = [];

	public static function pendaftar($pribadi)
	{
		DB::table('pendaftarok')->insert(
			[
			'email' => $pribadi->email, 
			'password' => $pribadi->password, 
			'nama' => $pribadi->nama,
			'tempatLahir' => $pribadi->tempatLahir,
			'tanggalLahir' => $pribadi->tanggalLahir,
			'jenisKelamin' => $pribadi->jenisKelamin,
			'id_agama' => $pribadi->id_agama,
			'noHP' => $pribadi->noHP,
			'alamatYK' => $pribadi->alamatYK,
			'kotakabYK' => $pribadi->kotakabYK,
			'noTelpYK' => $pribadi->noTelpYK,
			'tinggalYK' => $pribadi->tinggalYK,
			'alamat' => $pribadi->alamat,
			'kotakab' => $pribadi->kotakab,
			'propinsi' => $pribadi->propinsi,
			'negara' => $pribadi->negara,
			'noTelepon' => $pribadi->noTelepon,
			'danaBeasiswa' => $pribadi->danaBeasiswa,
        	'id_beasiswa' => $pribadi->id_beasiswa,
        	'statusBeasiswa' => $pribadi->statusBeasiswa
			]);
	}

	public static function pekerjaan($value)
	{
		DB::table('pekerjaanok')->insert(
			[
			'id_pendaftar'=>$value->id_pendaftar,
			'posisi' => $value->posisi,
			'institusi' => $value->institusi,
			'alamat' => $value->alamat,
			'kotakab' => $value->kotakab,
			'propinsi' => $value->propinsi,
			'negara' => $value->negara,
			'noTelepon' => $value->noTelepon,
			'noFaximile' => $value->noFaximile,
			'email' => $value->email,
			'tahunMulai' => $value->tahunMulai
			]);
	}
	public static function pendidikan($value)
	{
		DB::table('pendidikanok')->insert(
			[
			'id_pendaftar'=>$value->id_pendaftar,
			'jenjang'=>$value->jenjang,
			'programStudi'=>$value->programStudi,
			'akreditasi'=>$value->akreditasi,
			'PT'=>$value->PT,
			'tahunMasuk'=>$value->tahunMasuk,
			'tahunLulus'=>$value->tahunLulus,
			'noIjazah'=>$value->noIjazah,
			'IPK'=>$value->IPK,
			'skala'=>$value->skala
			]);
	}
	public static function sponsor($value)
	{
		DB::table('sponsorok')->insert(
			[
			'id_pendaftar'=>$value->id_pendaftar,
			'sponsor'=>$value->sponsor,
			'alamat'=>$value->alamat,
			'kotakab'=>$value->kotakab,
			'propinsi'=>$value->propinsi,
			'negara'=>$value->negara,
			'noTelepon'=>$value->noTelepon,
			'noFaksimili'=>$value->noFaksimili,
			'email'=>$value->email
			]);
	}
	public static function riwayatpekerjaan($value)
	{
		DB::table('riwayatpekerjaanok')->insert(
			[
			'id_pendaftar'=>$value->id_pendaftar,
			'posisi'=>$value->posisi,
			'institusi'=>$value->institusi,
			'masaKerja'=>$value->masaKerja
			]);
	}
	public static function kontakdarurat($value)
	{
		DB::table('kontakdaruratok')->insert(
			[
			'id_pendaftar'=>$value->id_pendaftar,
			'nama'=>$value->nama,
			'hubungan'=>$value->hubungan,
			'alamat'=>$value->alamat,
			'kotakab'=>$value->kotakab,
			'propinsi'=>$value->propinsi,
			'negara'=>$value->negara,
			'no_telepon'=>$value->kontakdarurat['noTelepon'],
			'email'=>$value->email
			]);
	}
	public static function profesi($value)
	{
		DB::table('profesiok')->insert(
			[
			'id_pendaftar'=>$value->id_pendaftar,
			'asosiasi'=>$value->asosiasi,
			'noAnggota'=>$value->noAnggota
			]);
	}

}