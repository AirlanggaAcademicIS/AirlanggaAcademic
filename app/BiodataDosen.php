<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiodataDosen extends Model
{

    protected $table = 'biodata_dosen';
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $fillable = [
    'biodata_id',
    'nip',
    'nama_dosen',
    'alamat_dosen',
    'status_dosen',
    'tanggal_lahir_dosen',
   ];

 
}

  

