<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class MonsiStatus extends Model
{

   protected $table = 'status_skripsi';    
   protected $primaryKey = 'id';   
   protected $fillable = [
		'keterangan', 	
   ];
}