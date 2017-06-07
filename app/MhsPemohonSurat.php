<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MhsPemohonSurat extends Model
{
   protected $table = 'mhs_pemohon_surat';       
   protected $fillable = [
		'nim_id', 
		'surat_keluar_id',
   ];
}