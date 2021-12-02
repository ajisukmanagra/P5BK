<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas', function (Blueprint $table) {
            $table->id();
            $table->string('gambar', 200)->default('default.png');
            $table->string('nama_sekolah')->nullable();
            $table->string('npsn')->nullable();
            $table->string('alamat')->nullable();
            $table->string('desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('provisi')->nullable();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('sk_pendirians')->nullable();
            $table->string('tangan_skp')->nullable();
            $table->string('sk_izin')->nullable();
            $table->string('tanggal_sk_ijin')->nullable();
            $table->string('akreditas')->nullable();
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
        Schema::dropIfExists('identitas');
    }
}
