<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobResult extends Model
{
    use HasFactory;

    //membatasi yang bisa diisi, semua data bisa diiisi selain id
    protected $guarded =[
        'id'
    ];

    public function surat(){
        return $this->belongsTo(Surat::class, 'surat_id');
    }
}
