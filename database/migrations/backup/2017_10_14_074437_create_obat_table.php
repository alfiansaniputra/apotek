<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat', function (Blueprint $table) {
        $table->increments('id_kode_obat');
        $table->string('nama_obat');
        $table->string('jenis_obat');
        $table->string('kategori');
        $table->integer('harga_obat');
        $table->integer('jumlah_obat');
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
        Schema::drop('obat');
    }
}
