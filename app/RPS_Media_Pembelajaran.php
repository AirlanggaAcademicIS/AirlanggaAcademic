<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RPS_Media_Pembelajaran extends Model
{
   protected $table = 'detail_kategori';    
   protected $primaryKey = 'detail_media_id';    
   protected $fillable = [
   		'media_pembelajaran_id',
		'cpmk_id', 
		'sistem_pembelajaran_id',
   ];

   
}