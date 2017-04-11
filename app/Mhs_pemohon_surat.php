<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mhs_pemohon_surat extends Model
{
   protected $table = 'mhs_pemohon_surat';       
  protected $fillable = [
		'NIM', 
		'id_surat_keluar',	
   ]; 
}