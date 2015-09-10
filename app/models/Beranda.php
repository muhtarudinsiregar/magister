<?php

class Beranda extends \Eloquent {
	protected $fillable = ['mail','password'];
	protected $table = 'pendaftar';

	public static $rules = [];
}