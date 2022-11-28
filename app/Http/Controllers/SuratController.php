<?php

namespace App\Http\Controllers;

use App\Models\JobDetail;
use App\Models\JobResult;
use App\Models\PaymentDetail;
use App\Models\Surat;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(Surat::first());
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
        $request->validate([
            'tujuan'=>'required',
            'nomor_surat'=> 'required',
            'tugas_pihak_dua'=> 'required',
            'start_date' => 'required', 
            'end_date' => 'required', 
            'pembayaran' => 'required',
            'ttd_pihak_satu' => 'required', 
            'ttd_pihak_dua'=> 'required',

            'nama_pihak_satu' => 'required',
            'jabatan_pihak_satu' =>'required',
            'alamat_pihak_satu' => 'required',

            'nama_pihak_dua' => 'required',
            'ktp_pihak_dua' => 'required',
            'tempat_lahir_pihak_dua' => 'required',
            'tanggal_lahir_pihak_dua' => 'required',
            'alamat_pihak_dua' => 'required',

            'job_detail' => 'required',
            'job_result' => 'required',
            'payment_detail' =>'required',
            'status' => 'required|numeric'
        ]);

        $data_surat  = [
           'tujuan'=> $request->tujuan,
            'nomor_surat'=> $request->nomor_surat,
            'tugas_pihak_dua'=> $request->tugas_pihak_dua,
            'start_date' =>  $request->start_date, 
            'end_date' =>$request->end_date, 
            'pembayaran' => $request->pembayaran,
            'ttd_pihak_satu' => $request->ttd_pihak_satu, 
            'ttd_pihak_dua'=> $request->ttd_pihak_dua,

            'nama_pihak_satu' =>$request->nama_pihak_satu ,
            'jabatan_pihak_satu' =>$request->jabatan_pihak_satu,
            'alamat_pihak_satu' => $request->alamat_pihak_satu,

            'nama_pihak_dua' => $request->nama_pihak_dua,
            'ktp_pihak_dua' => $request->ktp_pihak_dua,
            'tempat_lahir_pihak_dua' => $request->tempat_lahir_pihak_dua,
            'tanggal_lahir_pihak_dua' => $request->tanggal_lahir_pihak_dua,
            'alamat_pihak_dua' => $request->alamat_pihak_dua,
            'status' => $request->status
        ];
        //simpan gambar untuk ttd pihak satu
        $file = $request->file('ttd_pihak_satu');
        $extension = $file->getClientOriginalExtension();
        $file_name ='ttd_satu' . time().'.'.$extension;
        $data_surat['ttd_pihak_satu']= $file_name;
        $file->storeAs('file', $file_name, 'public');

        //simpan gambar untuk ttd pihak dua
        $file = $request->file('ttd_pihak_dua');
        $extension = $file->getClientOriginalExtension();
        $file_name = 'ttd_dua' . time().'.'.$extension;
        $data_surat['ttd_pihak_dua']= $file_name;
        $file->storeAs('file', $file_name, 'public');
        


        $action = Surat::create($data_surat);


        //Membuat foreach untuk melooping inputan job detail
        foreach ($request->job_detail as $item) {
           $job_detail = [
            'surat_id' => $action->id,
            'nomor_surat' => $request->nomor_surat,
            'rincian' => $item
           ];
           //Memasukan data ke databse 
           JobDetail::create($job_detail);
        }


        //Membuat foreach untuk melooping inputan job result
        foreach ($request->job_result as $item) {
            $job_result = [
                'surat_id' => $action->id, 
                'nomor_surat' => $request->nomor_surat, 
                'rincian' => $item
            ];
            JobResult::create($job_result);
        }

        //Membuat foreach untuk melooping inputan payment details
        foreach ($request->payment_detail as $item) {
            $payment_detail = [
                'surat_id' => $action->id, 
                'nomor_surat' => $request->nomor_surat, 
                'rincian' => $item
            ];

            PaymentDetail::create($payment_detail);
        }

        

        if ($action){
            if ($request->status == 1) {
                return true;
            }
            elseif($request->status == 2){
                return $action;
            }
        }else {
               return false;
        }
     
        return $request->nomor_surat;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function show(Surat $surat)
    {
        $surat['jobdetails']= $surat->jobdetails;
        $surat['jobresults']= $surat->jobresults;
        $surat['paymentdetails']= $surat->paymentdetails;


        return $surat;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function edit(Surat $surat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surat $surat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surat $surat)
    {
        //
    }
}
