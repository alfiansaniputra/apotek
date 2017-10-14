<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
        $table->increments('id_kode_psn');
        $table->string('nama_psn');
        $table->string('alamat_psn');
        $table->enum('gender_psn', ['l', 'p']);
        $table->integer('umur_psn');
        $table->integer('telepon_psn');
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
        Schema::drop('pasien');
    }
}
