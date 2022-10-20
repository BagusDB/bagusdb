<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTransaksiDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_transaksi_detail', function (Blueprint $table) {
            $table->id();
            $table->String('id_detail');
            $table->String('id_transaksi');
            $table->String('id_barang');
            $table->String('transaksi_jenis');
            $table->integer('transaksi_harga');
            $table->integer('transaksi_jumlah');
            $table->String('transaksi_detail_status');
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
        Schema::dropIfExists('tbl_transaksi_detail');
    }
}
