<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->string('tujuan');
            $table->string('nomor_surat');
            $table->string('tugas_pihak_dua');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('pembayaran');
            $table->string('ttd_pihak_satu');
            $table->string('ttd_pihak_dua');
            $table->string('nama_pihak_satu');
            $table->string('jabatan_pihak_satu');
            $table->text('alamat_pihak_satu');

            $table->string('nama_pihak_dua');
            $table->string('ktp_pihak_dua');
            $table->string('tempat_lahir_pihak_dua');
            $table->string('tanggal_lahir_pihak_dua');
            $table->text('alamat_pihak_dua');
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
        Schema::dropIfExists('surats');
    }
}
