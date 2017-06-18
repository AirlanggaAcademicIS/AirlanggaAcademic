<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minggu extends Model
{
   protected $table = 'minggu';    
   protected $primaryKey = 'id_minggu';    
   protected $fillable = [
		'id_minggu', 
		'minggu_ke',
   ];
}