<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiodataMhs extends Model
{
   protected $table = 'biodata_mhs';    
   protected $primaryKey = 'id_bio';    
   protected $fillable = [
		`nip_petugas`,
		`nim_id`,
		`nama_mhs`,
		`email_mhs`,
		`jenis_kelamin`,
		`negara_asal`,
		`provinsi_asal`,
		`kota_asal`,
		`kota_tinggal`,
		`alamat_tinggal`,
		`ttl`,
		`angkatan`,
		`agama`,
		`kebangsaan`,
		`sma_asal`,
		`nama_ayah`,
		`nama_ibu`,
		`deskripsi_diri`,
		`motto`,
		`foto_mhs`,
		`kartu_identitas`
   ];
}