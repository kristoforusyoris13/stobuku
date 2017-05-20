<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stoks', function(Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal_masuk');
            $table->string('nama_buku');
            $table->string('nama_penerbit');
            $table->string('jumlah');
            $table->foreign('nama_buku')->references('id')->on('buku')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nama_penerbit')->references('id')->on('penerbit')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('stoks');
    }
}
