<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iden', function (Blueprint $table) {
            $table->id();
            $table->string('gambar', 200)->default('default.png');
            $table->string('nama_sekolah', 100);
            $table->string('npsn', 100);
            $table->string('alamat', 100);
            $table->string('desa', 100);
            $table->string('kecamatan', 100);
            $table->string('kabupaten', 100);
            $table->string('provisi', 100);
            $table->string('telepon', 100);
            $table->string('email', 100);
            $table->string('sk_pendirians', 100);
            $table->string('tangan_skp', 100);
            $table->string('sk_izin' ,100);
            $table->string('tanggal_sk_ijin', 100);
            $table->string('akreditas', 100);
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
        Schema::dropIfExists('iden');
    }
}
