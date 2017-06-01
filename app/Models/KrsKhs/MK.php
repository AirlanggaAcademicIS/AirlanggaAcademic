<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MK extends Model
{
   use SoftDeletes;
   protected $table = 'mata_kuliah';    
   protected $primaryKey = 'id_mk';  
   public $incrementing = false; 
   protected $dates = ['deleted_at']; 
   protected $fillable = [
   		'id_mk',
   		'jenis_mk_id',
		'kode_matkul',
		'nama_matkul',
		'sks',
		'deskripsi_matkul',
		'capaian_matkul',
		'penilaian_matkul',
		'pokok_pembahasan',
		'pustaka_utama',
		'pustaka_pendukung',
		'syarat_sks',
   ];
}