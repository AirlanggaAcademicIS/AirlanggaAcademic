<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermohonanRuang extends Model
{
   protected $table = 'permohonan_ruang';    
   protected $primaryKey = 'id_permohonan_ruang';    
   protected $fillable = [
		'nip_petugas_id', 
		'nama',
		'atribut_verifikasi',
		'nim_nip',
			
   ];
}