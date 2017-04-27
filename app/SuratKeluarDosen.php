<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratKeluarDosen extends Model
{
   protected $table = 'surat_keluar_dosen';  
   protected $primaryKey = 'id';    

   public $timestamps = true;

   protected $fillable = [
		'nip_petugas', 
		'nama',
		'tgl_upload',
		'created_by',
		'updated_by'
		
   ];
}