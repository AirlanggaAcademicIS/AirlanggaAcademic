<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersentasePenilaian extends Model
{
   use SoftDeletes;
   protected $table = 'persentase_penilaian';    
   protected $primaryKey = 'jenis_penilaian_id';   
   protected $fillable = [
         'jenis_penilaian_id',
         'mk_ditawarkan_id',
         'persentase',
   ];
}