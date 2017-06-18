<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silabus_detail_kategori extends Model
{

  protected $table = 'detail_kategori';    
  protected $primaryKey = 'cpmk_id';    
  protected $fillable = [
    'media_pembelajaran_id',
  ];

  public function media()
  {
    return $this->belongsTo('App\RPS_Media_Pembelajaran', 'media_pembelajaran_id');
  }
}