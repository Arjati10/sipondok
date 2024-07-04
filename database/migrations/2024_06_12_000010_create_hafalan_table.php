<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHafalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hafalan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('surah');
            $table->integer('ayat');
            $table->integer('juz');
            $table->date('tanggal_hafalan');
            $table->text('keterangan')->nullable();
            $table->uuid('santri_id');

            $table->timestamps();
            $table->foreign('santri_id')
                ->references('id')
                ->on('santris')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hafalan');
    }
}
