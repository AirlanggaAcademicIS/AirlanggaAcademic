<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RPS_Media_Pembelajaran extends Model
{
   protected $table = 'kategori_media_pembelajaran';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'kategori_media_pembelajaran',
	   	'media_pembelajaran',
		'sistem_pembelajaran_id',
   ];
}