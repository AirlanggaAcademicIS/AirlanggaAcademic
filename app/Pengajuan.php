<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
   protected $table = 'pengajuan';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'nama_kegiatan', 
		'latar_belakang',
		'tujuan_kegiatan',
		'mekanisme_kegiatan',
		'tanggal_pengajuan',
		'tempat_pengajuan',	
   ];
}