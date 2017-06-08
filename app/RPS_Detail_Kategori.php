<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RPS_Detail_Kategori extends Model
{
   protected $table = 'detail_kategori';    
   protected $primaryKey = 'cpmk_id';    
   protected $fillable = [
   	'media_pembelajaran_id',
      'cpmk_id',
   ];

   public function cpmk()
   {
   	return $this->belongsTo('App\RPS_CP_Matkul', 'cpmk_id');
   }

   public function media()
   {
      return $this->belongsTo('App\RPS_Media_Pembelajaran', 'media_pembelajaran_id');
   }

}