<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santris', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->text('alamat');
            $table->bigInteger('nisn')->nullable();
            $table->bigInteger('nik');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->bigInteger('no_kk'); // Ubah baris ini
            $table->string('phone')->nullable();
            $table->string('nama_ayah');
            $table->bigInteger('nik_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('riwayat_pendidikan_ayah');
            $table->string('nama_ibu');
            $table->bigInteger('nik_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('riwayat_pendidikan_ibu');
            $table->string('telfon_orang_tua')->nullable();
            $table->year('tahun_masuk');
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('santris');
    }
}
