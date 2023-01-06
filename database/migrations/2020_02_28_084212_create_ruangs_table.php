<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ruangan', function (Blueprint $table) {
            $table->string('id_ruang')->primary();
            $table->String('nama_ruang');
            $table->String('gedung_id');
            $table->string('lantai');
            $table->string('kapasitas');
            $table->string('fasilitas');
            $table->string('terpakai');
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
        Schema::dropIfExists('tb_ruang');
    }
}
