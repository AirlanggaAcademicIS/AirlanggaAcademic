<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StrukturPanitiaDosen extends Model
{
   protected $table = 'dosen_kegiatan'; 
   protected $primaryKey ='kegiatan_id';      
   protected $fillable = [
   		'kegiatan_id', 
   		'nip_id',
		'jabatan_id',
   ];

   public function jabatan()
{
	# code...
	return $this->belongsTo('App\JabatanPanitia','jabatan_id');
}

   public function pengajuanKegiatan()
{
	# code...
	return $this->belongsTo('App\KonfirmasiKegiatan','kegiatan_id');
}

   public function dosen()
{
	# code...
	return $this->belongsTo('App\DosenPanitia','nip_id');
}
}