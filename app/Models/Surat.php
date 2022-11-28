<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    
    //relasi, satu surat bisa banyak job details
    public function jobdetails(){
        return $this->hasMany(JobDetail::class, 'surat_id');
    }

    public function jobresults(){
        return $this->hasMany(JobResult::class, 'surat_id');
    }
    public function paymentdetails(){
        return $this->hasMany(PaymentDetail::class, 'surat_id');
    }
}
