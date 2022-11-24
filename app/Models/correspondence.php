<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class correspondence extends Model
{
    use HasFactory;
    //     protected $fillable = [
    //     'tujuan',
    //     'no_surat',
    //     'nama_pertama',
    //     'jabatan_pertama',
    //     'alamat_pertama',
    //     'nama_kedua',
    //     'ktp_kedua',
    //     'tempatlahir_kedua',
    //     'tanggal_kedua',
    //     'alamat_kedua',
    //     'tugas',
    //     'rincian_kerja',
    //     'penyerahan_kerja',
    //     'jangka_waktu',
    //     'pembayaran',
    //     'rincian_pembayaran',
    //     'ttd_pertama',
    //     'ttd_kedua',
    // ];
      protected $guarded = [
      'id'
    ];
}
