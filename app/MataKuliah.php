<?php

namespace App ;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MataKuliah extends Model
{
   	use SoftDeletes;
   	protected $table = 'mata_kuliah';    
   	protected $primaryKey = 'id_mk';   
   	protected $dates = ['deleted_at']; 
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
		'created_at',
		'updated_at'
   	];
	
	public function jenisMatkul()
    {
        return $this->belongsTo('App\JenisMataKuliah', 'jenis_mk_id');
    }

	protected $guarded = [];

}