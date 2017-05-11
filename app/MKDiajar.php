<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MKDiajar extends Model
{
   protected $table = 'mk_diajar';    
   protected $primaryKey = 'dosen_id';    
   protected $fillable = [
		'dosen_id',
		'mk_ditawarkan_id',
		'status'
			
   ];
}