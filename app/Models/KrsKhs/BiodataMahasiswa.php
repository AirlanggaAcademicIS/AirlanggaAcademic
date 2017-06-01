<?php

namespace App\Models\KrsKhs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BiodataMahasiswa extends Model
{
   protected $table = 'biodata_mhs';    
   protected $primaryKey = 'id_bio';    
   protected $fillable = [
   		'nim_id',
		'nama_mhs',
		'email_mhs',
		'jenis_kelamin',
		'negara_asal',	
		'provinsi_asal',
		'kota_asal',
		'kota_tinggal',
		'alamat_tinggal',
		'ttl',
		'angkatan',
		'agama',
		'kebangsaan',
		'sma_asal',
		'nama_ayah',
		'nama_ibu',
		'deskripsi_diri',
		'motto',
   ];
}