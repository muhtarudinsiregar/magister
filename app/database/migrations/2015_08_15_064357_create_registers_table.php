<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('TTL');
			$table->string('jenis_kelamin');
			$table->string('agama');
			$table->string('status_perkawinan');
			$table->string('alamat_yogya');
			$table->string('alamat_luar_yogya');
			$table->string('pekerjaan');
			$table->string('alamat_kantor');
			$table->string('nama_ortu');
			$table->string('alamat_ortu');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('registers');
	}

}
