<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobDetail extends Model
{
    use HasFactory;

    protected $guarded=[
        'id'
    ];


    // relasi, job details hanya memiliki satu surat
    public function surat(){
        return $this->belongsTo(Surat::class, 'surat_id');
    }
}
