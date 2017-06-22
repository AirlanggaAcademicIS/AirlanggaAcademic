<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratTugasDosen extends Model
{
   protected $table = 'surat_tugas';    
   protected $primaryKey = 'surat_id';    
   protected $fillable = [
		'no_surat',
		'tanggal_surat',
		'keterangan_sk',
		'file_sk',
   ];
	}