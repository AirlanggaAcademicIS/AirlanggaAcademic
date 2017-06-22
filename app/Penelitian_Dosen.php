<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penelitian_Dosen extends Model
{

    protected $table = 'penelitian_milik_dosen';
    protected $primaryKey = 'nip';
    protected $fillable = [
    'nip',
    'penelitian_id',
   ];

 
}

  

