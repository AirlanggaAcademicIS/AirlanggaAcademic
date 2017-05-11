<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CapaianPembelajaran extends Model
{
   protected $table = 'capaian_pembelajaran';    
   protected $primaryKey = 'id_cpem';    
   protected $fillable = [
   		'prodi_id',
		'kategori_cpem_id',
		'kode_cpem',
		'deskripsi_cpem',
   ];
}