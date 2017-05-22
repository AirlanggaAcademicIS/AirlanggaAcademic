<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Silabus_detail_media extends Model
{
   protected $table = 'detail_media_pembelajaran';    
   protected $primaryKey = 'id_detail_media';    
   protected $fillable = [
   		'cpmk_id',
   		'sistem_pembelajaran_id',
   ];
<<<<<<< HEAD

	public function cpmk()
   {
   	return $this->belongsTo('App\Silabus_Sistem_Pembelajaran', 'cpmk_id');
   }

   public function sistem()
   {
   	return $this->belongsTo('App\Silabus_Sistem_Pembelajaran', 'sistem_pembelajaran_id');
   }

=======
>>>>>>> cb89a76fe2b762f6a2c5f46b83efdd524bb32608
}