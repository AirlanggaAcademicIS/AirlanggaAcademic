<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenelitianDosen extends Model
{
   protected $table = 'penelitian_dosen';    
   protected $primaryKey = 'penelitian_id';    
   protected $fillable = [
		'judul_penelitian', 
		'nama_ketua',
		'bidang_penelitian',
		'file_penelitian',
		'tanggal_penelitian',
		'status_penelitian',	
   ];
}