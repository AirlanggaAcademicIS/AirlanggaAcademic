<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DosenPemohonSurat extends Model
{
   protected $table = 'dosen_pemohon_surat';       
   protected $fillable = [
		'nip_id', 
		'surat_keluar_id',
   ];
}