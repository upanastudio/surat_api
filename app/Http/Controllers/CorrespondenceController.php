<?php

namespace App\Http\Controllers;

use App\Models\correspondence;
use Illuminate\Http\Request;


class CorrespondenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $corr = new correspondence;
        $corr->tujuan = $request->input('tujuan');
        $corr->no_surat = $request->input('no_surat');
        $corr->nama_pertama = $request->input('nama_pertama');
        $corr->jabatan_pertama = $request->input('jabatan_pertama');
        $corr->alamat_pertama = $request->input('alamat_pertama');
        $corr->nama_kedua = $request->input('nama_kedua');
        $corr->ktp_kedua = $request->input('ktp_kedua');
        $corr->tempatlahir_kedua = $request->input('tempatlahir_kedua');
        $corr->tanggal_kedua = $request->input('tanggal_kedua');
        $corr->alamat_kedua = $request->input('alamat_kedua');
        $corr->tugas = $request->input('tugas');
        $corr->rincian_kerja = $request->input('rincian_kerja');
        $corr->penyerahan_kerja = $request->input('penyerahan_kerja');
        $corr->jangka_waktu = $request->input('jangka_waktu');
        $corr->pembayaran = $request->input('pembayaran');
        $corr->rincian_pembayaran = $request->input('rincian_pembayaran');
        $corr->ttd_pertama = $request->input('ttd_pertama');
        $corr->ttd_kedua = $request->input('ttd_kedua');

        $corr->save();
        return $corr;
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\correspondence  $correspondence
     * @return \Illuminate\Http\Response
     */
    public function show(correspondence $correspondence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\correspondence  $correspondence
     * @return \Illuminate\Http\Response
     */
    public function edit(correspondence $correspondence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\correspondence  $correspondence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, correspondence $correspondence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\correspondence  $correspondence
     * @return \Illuminate\Http\Response
     */
    public function destroy(correspondence $correspondence)
    {
        //
    }
}
