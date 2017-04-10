<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
   protected $table = 'Skripsi';    
   protected $primaryKey = 'id_skripsi';    
   protected $fillable = [
		'NIM',
		'id_kbk',
		'id_statusprop',
		'id_statusskrip',
		'Judul',
		'upload_berkas_proposal',
		'upload_berkas_skripsi',
		'nip_petugas',
		'tgl_sidangpro',
		'waktu_sidangpro',
		'tempat_sidangpro',
		'nilai_sidangpro',
		'tgl_sidangskrip',
		'waktu_sidangskrip',
		'tempat_sidangskrip',
		'nilai_sidangskrip',
		'tanggal_pengumpulan_proposal',
		'tanggal_pengumpulan_skripsi',
		'is_verified',
		

   ];
}