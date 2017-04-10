<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class MonsiStatus extends Model
{
	use SoftDeletes;

   protected $table = 'status';    
   protected $primaryKey = 'id';   
   protected $dates = ['deleted_at']; 
   protected $fillable = [
		'keterangan', 	
   ];
}