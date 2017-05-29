<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
   protected $table = 'mata_kuliah';    
   protected $primaryKey = 'id_mk';
   protected $fillable = [
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

   	public function jenisMK()
   {
      return $this->belongsTo('App\Models\KrsKhs\JenisMataKuliah','jenis_mk_id');
   }
}