<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JurnalDosen extends Model
{
   protected $table = 'jurnal';    
   protected $primaryKey = 'jurnal_id';    
   protected $fillable = [
		'nama_jurnal', 
		'halaman_jurnal',
		'bidang_jurnal',		
		'tanggal_jurnal',
		'file_jurnal',
		'status_jurnal',
		'volume_jurnal',
		'penulis_ke',	
   ];
}