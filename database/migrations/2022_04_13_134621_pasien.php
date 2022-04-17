<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->bigIncrements('id_pasien')->unsigned();
            $table->string('no_bpjs');
            $table->string('nik');
            $table->string('nama_pasien');
            $table->string('jenis_kelamin')->nullable();
            $table->string('no_hp');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('no_antrian')->nullable();
            $table->string('foto_profil')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasien');
    }
};
