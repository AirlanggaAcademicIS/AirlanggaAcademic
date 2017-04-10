<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CapaianPembelajaran extends Model
{
   protected $table = 'db_cp_pembelajaran';    
   protected $primaryKey = 'id_cp';    
   protected $fillable = [
   		'id_prodi',
		'id_kategori_cp',
		'kode_cp',
		'deskripsi_cp',
   ];
}