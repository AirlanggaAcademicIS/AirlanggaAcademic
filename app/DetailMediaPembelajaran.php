<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailMediaPembelajaran extends Model
{
   protected $table = 'detail_media_pembelajaran';    
   protected $primaryKey = 'id_detail_media';    
   protected $fillable = [
   	'cpmk_id',
	'sistem_pembelajaran_id',
   ];

}