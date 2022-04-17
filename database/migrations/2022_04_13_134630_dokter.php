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
        Schema::create('dokter', function (Blueprint $table) {
            $table->bigIncrements('id_dokter')->unsigned();
            $table->string('nama_dokter');
            $table->string('username');
            $table->string('poli_layanan');
            $table->string('jam_praktik_awal');
            $table->string('jam_praktik_akhir');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
