<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengmasDosen extends Model
{
   protected $table = 'pengmas_dosen';    
   protected $primaryKey = 'id_kegiatan';    
   protected $fillable = [
		'nama_kegiatan', 
		'tempat_kegiatan',
		'tanggal_kegiatan',
		'file_pengmas',
		'status_pengmas',	
   ];
	}