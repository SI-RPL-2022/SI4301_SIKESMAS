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
        Schema::create('antrian', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->foreignId('id_pasien');
            $table->foreignId('id_dokter');
            $table->foreignId('id_poli');
            $table->foreignId('id_kamar')->nullable();
            $table->string('no_antrian');
            $table->text('keluhan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('lama_keluhan')->nullable();
            $table->text('hasil_periksa')->nullable();
            $table->string('tindakan')->nullable();
            $table->string('status')->nullable();
            $table->string('status_antrian')->nullable();
            $table->string('waktu_periksa')->nullable();
            $table->timestamps();

            $table->foreign('id_poli')->references('id')->on('poli');
            $table->foreign('id_pasien')->references('id')->on('user');
            $table->foreign('id_dokter')->references('id')->on('user');
            $table->foreign('id_kamar')->references('id')->on('kamar_inap');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antrian');
    }
};
