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
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('role');
            $table->string('no_bpjs')->nullable();
            $table->string('nik')->nullable();
            $table->string('nama');
            $table->string('jenis_kelamin')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('no_antrian')->nullable();
            $table->string('foto_profil')->nullable();
            $table->foreignId('id_poli')->nullable();
            $table->time('jam_praktik_awal')->nullable();
            $table->time('jam_praktik_akhir')->nullable();

            $table->foreign('id_poli')->references('id')->on('poli');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
