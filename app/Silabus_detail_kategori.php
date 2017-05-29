<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silabus_detail_kategori extends Model
{

  protected $table = 'detail_kategori';    
  protected $primaryKey = 'media_pembelajaran_id';    
  protected $fillable = [
    'cpmk_id',
  ];


  public function media()
  {
    return $this->belongsTo('App\Silabus_Capaian_Pembelajaran', 'cpmk_id');
  }
}