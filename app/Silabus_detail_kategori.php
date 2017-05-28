<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silabus_detail_kategori extends Model
{
   protected $table = 'Silabus_detail_kategori';    

   protected $primaryKey = 'media_pembelajaran_id';    
   protected $fillable = [
'cpmk_id',
'sistem_pembelajaran_id',
'detail_media_id'
   ];

  public function media()
  {
    return $this->belongsTo('App\Silabus_Capaian_Pembelajaran', 'cpmk_id');
  }
}