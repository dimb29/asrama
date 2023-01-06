<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name');
            $table->string('tp_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('thangkatan')->nullable();
            $table->string('username')->unique();
            $table->string('email');
            $table->string('telepon')->nullable();
            $table->string('alamat_mhs')->nullable();
            $table->string('prodi')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('alamat_ortu')->nullable();
            $table->string('notelp_ortu')->nullable();
            $table->string('goldar')->nullable();
            $table->string('masalah_kes')->nullable();
            $table->string('kons_obat')->nullable();
            $table->string('alergi_mkn')->nullable();
            $table->string('foto')->nullable();
            $table->string('status')->nullable();
            $table->boolean('first_time_login')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
