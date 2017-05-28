<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silabus_detail_kategori extends Model
{
<<<<<<< HEAD
   protected $table = 'Silabus_detail_kategori';    

   protected $primaryKey = 'media_pembelajaran_id';    
   protected $fillable = [
'cpmk_id',
'sistem_pembelajaran_id',
'detail_media_id'
   ];
=======
  protected $table = 'detail_kategori';    
  protected $primaryKey = 'media_pembelajaran_id';    
  protected $fillable = [
    'cpmk_id',
  ];
>>>>>>> 090f09f1e2827b9381fce8cbf0cc327eaecfb4d1

  public function media()
  {
    return $this->belongsTo('App\Silabus_Capaian_Pembelajaran', 'cpmk_id');
  }

<<<<<<< HEAD
    public function media()
   {
   	return $this->belongsTo('App\Silabus_Capaian_Pembelajaran', 'cpmk_id');
   }
=======
>>>>>>> 090f09f1e2827b9381fce8cbf0cc327eaecfb4d1
}