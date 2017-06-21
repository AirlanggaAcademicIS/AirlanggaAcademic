<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenelitianMhs extends Model
{
   protected $table = 'penelitian_mhs';    
   protected $primaryKey = 'kode_penelitian';    
   protected $fillable = [
		'judul', 
		'nim_id',
		'peneliti',
		'fakultas',
		'tahun',
		'halaman_naskah',
		'sumber_dana',
		'besar_dana',
		'sk',
		'publikasi',
		'kategori_penelitian',
		'is_verified',
		'file_pen',	
		'anggota',
		'abstract',
   ];

}