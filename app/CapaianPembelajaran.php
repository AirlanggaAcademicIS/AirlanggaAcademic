<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CapaianPembelajaran extends Model
{
   protected $table = 'capaian_pembelajaran';    
   protected $primaryKey = 'id_cpem';    
   protected $fillable = [
    'id_cpem',
    'prodi_id',
		'kategori_cpem_id',
		'kode_cpem',
		'deskripsi_cpem',
   ];

   public function prodi ()
   {
    	return $this->belongsTo('App\Prodi', 'prodi_id');
   }

   public function kategori()
   {
    	return $this->belongsTo('App\KategoriCapaianPembelajaran', 'kategori_cpem_id');
   }
}