<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silabus_detail_media extends Model
{
   protected $table = 'Silabus_detail_kategori';    
<<<<<<< HEAD
   protected $primaryKey = 'media_pembelajaran_id';    
   protected $fillable = [
'cpmk_id',
'sistem_pembelajaran_id',
'detail_media_id'
   ];

   	public function media()
   {
   	return $this->belongsTo('App\Silabus_Kategori_Media', 'media_pembelajaran_id');
   }

    public function media()
   {
   	return $this->belongsTo('App\Silabus_Capaian_Pembelajaran', 'cpmk_id');
   }

    public function media()
   {
   	return $this->belongsTo('App\Silabus_Kategori_Media', 'media_pembelajaran_id');
   }

=======
   protected $primaryKey = '';    
   protected $fillable = [

   ];
>>>>>>> cb89a76fe2b762f6a2c5f46b83efdd524bb32608
}