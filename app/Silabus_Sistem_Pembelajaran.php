<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silabus_Sistem_Pembelajaran extends Model
{
   protected $table = 'sistem_pembelajaran';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'sistem_pembelajaran',		
   ];

}