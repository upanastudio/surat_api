<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrespondencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correspondences', function (Blueprint $table) {
            $table->id();
            $table->string('tujuan');
            $table->string('no_surat');
            $table->string('nama_pertama');
            $table->string('jabatan_pertama');
            $table->string('alamat_pertama');
            $table->string('nama_kedua');
            $table->string('ktp_kedua');
            $table->string('tempatlahir_kedua');
            $table->string('tanggal_kedua');
            $table->string('alamat_kedua');
            $table->string('tugas');
            $table->string('rincian_kerja');
            $table->string('penyerahan_kerja');
            $table->string('jangka_waktu');
            $table->string('pembayaran');
            $table->string('rincian_pembayaran');
            $table->string('ttd_pertama');
            $table->string('ttd_kedua');
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
        Schema::dropIfExists('correspondences');
    }
}
