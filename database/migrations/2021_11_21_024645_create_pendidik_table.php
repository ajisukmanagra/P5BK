<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidik', function (Blueprint $table) {
            $table->id();

            $table->string('nik');
            $table->string('nip');
            $table->string('nuptk');
            $table->string('niy');
            $table->string('nama', 50);
            $table->enum('kelamin',['L','P']);
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('ibu_kandung');
            $table->string('alamat');
            $table->enum('agama',['islam','keristen','budha','hindu','katolik','konghucu']);
            $table->string('npwp');
            $table->string('kewarganegaraan');
            $table->string('status_pernikahan');
            $table->string('suami_istri');
            $table->string('jumlah_anak');
            $table->string('nomor_hp');
            $table->string('email');
            $table->string('gambar', 200)->default('default.png');

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
        Schema::dropIfExists('pendidik');
    }
}
