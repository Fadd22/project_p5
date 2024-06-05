<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pembeli')->unsigned();
            $table->foreign('nama_pembeli')->references('id')->on('pembelis')->ondelete('cascade');
            $table->bigInteger('id_barang')->unsigned();
            $table->foreign('nama_barang')->references('id')->on('barangs')->ondelete('cascade');
            $table->bigInteger('id_kasir')->unsigned();
            $table->foreign('nama_kasir')->references('id')->on('kasirs')->ondelete('cascade');
            $table->integer('total_harga');
            $table->integer('total_bayar');
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
        Schema::dropIfExists('transaksis');
    }
};
