<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MKDitawarkan extends Model
{
   protected $table = 'mk_ditawarkan';    
   protected $primaryKey = 'id_mk_ditawarkan';   
   protected $fillable = [
   		'thn_akademik_id',
         'matakuliah_id',
   ];
}
