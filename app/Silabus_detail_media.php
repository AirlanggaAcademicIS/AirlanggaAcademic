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
=======

<<<<<<< HEAD
=======
>>>>>>> 090f09f1e2827b9381fce8cbf0cc327eaecfb4d1
	public function cpmk()
   {
   	return $this->belongsTo('App\Silabus_Sistem_Pembelajaran', 'cpmk_id');
   }

   public function sistem()
   {
   	return $this->belongsTo('App\Silabus_Sistem_Pembelajaran', 'sistem_pembelajaran_id');
   }
<<<<<<< HEAD
=======

>>>>>>> 090f09f1e2827b9381fce8cbf0cc327eaecfb4d1
>>>>>>> f431483d33699cf4bdbf295ca947e24c98658770
}