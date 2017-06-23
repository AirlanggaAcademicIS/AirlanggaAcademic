<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MKDiambil extends Model
{
   use SoftDeletes;
   protected $table = 'mk_diambil';   
   protected $fillable = [
         'mhs_id',
         'mk_ditawarkan_id',
         'nilai',
   ];
}