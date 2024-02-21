<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran');

            $table->unsignedBigInteger('id_petugas');
            $table->foreign('id_petugas')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->char('nisn',10);
            $table->foreign('nisn')->references('nisn')->on('siswa')->onDelete('cascade')->onUpdate('cascade');

            $table->date('tanggal_bayar');
            $table->string('bulan_bayar');
            $table->string('tahun_bayar');
            
            $table->unsignedBigInteger('id_spp');
            $table->foreign('id_spp')->references('id_spp')->on('spp')->onDelete('cascade')->onUpdate('cascade');
            
            $table->integer('jumlah_bayar');
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
        Schema::dropIfExists('pembayarans');
    }
}
