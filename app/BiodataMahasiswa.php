<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiodataMahasiswa extends Model
{
   protected $table = 'biodata_mhs';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'nip_petugas', 
		'nim',
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
		'foto_mhs',
		'kartu_identitas',
   ];
}