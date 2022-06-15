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
        Schema::create('kamar_inap', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('nama_kamar');
            $table->string('tipe_kamar');
            $table->bigInteger('harga');
            $table->integer('jumlah_kamar');
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kamar_inap');
    }
};
