<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiodataMahasiswa extends Model
{
   protected $table = 'biodata_mhs';    
   protected $primaryKey = 'nim_id';
   public $incrementing = false;    
   protected $fillable = [
   		'id_bio',
   		'nim_id',
		'nama_mhs',
		'email_mhs',
		'jenis_kelamin',
		'negara_asal',	
		'provinsi_asal',
		'kota_asal',
		'kota_tinggal',
		'alamat_tinggal',
		'kota_lahir',
		'tanggal_lahir',
		'no_hp',
		'agama',
		'kebangsaan',
		'sma_asal',
		'nama_ayah',
		'nama_ibu',
		'deskripsi_diri',
		'motto',
   ];

 }