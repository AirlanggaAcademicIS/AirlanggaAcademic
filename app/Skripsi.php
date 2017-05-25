<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{

    use SoftDeletes;

    protected $table = 'skripsi';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    'upload_berkas_proposal',
    'upload_berkas_skripsi'
    ];
}

  

