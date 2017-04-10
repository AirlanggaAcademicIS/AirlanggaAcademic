<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
   protected $table = 'peminjaman';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'nip_petugas', 
		'id_asset',
		'nim_nip_peminjam',
		'asset_yang_dipinjam',
		'checkin_date',
		'checkout_date',
		'expected_checkin_date',
		'waktu_pinjam',
		'created_at',
		'updated_at',
   ];
}