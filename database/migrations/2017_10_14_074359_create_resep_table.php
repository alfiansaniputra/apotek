<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resep', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('id_nomorresep');
        $table->date('tanggal_resep');
        $table->integer('kode_dkt_id');
        $table->integer('kode_psn_id');
        $table->integer('kode_plk_id');
        $table->integer('total_harga');
        $table->integer('bayar');
        $table->integer('kembali');
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
        Schema::drop('resep');
    }
}
