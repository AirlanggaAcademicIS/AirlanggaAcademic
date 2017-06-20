<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailKategori extends Model
{
   protected $table = 'detail_kategori';    
   protected $primaryKey = 'media_pembelajaran_id';    
   protected $fillable = [
	'cpmk_id',
	'sistem_pembelajaran_id',
	'detail_media_id',
   ];

    public function media()
   {
   	return $this->belongsTo('App\KategoriMediaPembelajaran','media_pembelajaran_id');
   }
   public function cpmk()
   {
   	return $this->belongsTo('App\CapaianPembelajaran','cpmk_id');
   }
   public function sistem()
   {
   	return $this->belongsTo('App\DetailMediaPembelajaran','detail_media_id');
   }
}