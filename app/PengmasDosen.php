<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengmasDosen extends Model
{
   protected $table = 'pengabdian_masyarakat';    
   protected $primaryKey = 'kegiatan_id';    
   protected $fillable = [
		'nama_kegiatan', 
		'tempat_kegiatan',
		'tanggal_kegiatan',
		'file_pengmas',
		'status_pengmas',	
   ];
	}