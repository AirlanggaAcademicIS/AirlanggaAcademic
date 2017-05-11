<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi_Peminjaman extends Model
{
	use SoftDeletes;

   protected $table = 'transaksi_peminjaman';    
   protected $primaryKey = 'id_peminjaman';    
   protected $fillable = [
		'nip_petugas_id', 
		'asset_id',
		'nim_nip_peminjam',
		'asset_yang_dipinjam',
		'checkin_date',
		'checkout_date',
		'expected_checkin_date',
		'waktu_pinjam',
		'created_at',
		'updated_at',
		'deleted_at',
   ];

   	public function asset()
	{
	    return $this->belongsTo('App\Asset');
}
}