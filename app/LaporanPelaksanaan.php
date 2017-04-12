<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanPelaksanaan extends Model
{
   protected $table = 'laporan_pelaksanaan';    
   protected $primaryKey = 'id';    
   protected $fillable = [
   		'nama_kegiatan',
		'tanggal_pelaksanaan', 
		'tempat_pelaksanaan',
		'pelaksanaan_dana',
   ];
}