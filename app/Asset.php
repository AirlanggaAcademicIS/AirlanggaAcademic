<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
	use SoftDeletes;
   protected $table = 'asset';
   protected $primaryKey = 'id_asset'; 
   protected $fillable = [
   		'kategori_id', 
		'nip_petugas_id',
		'nim_nip_peminjam',
		'status_id',  
		'serial_barcode',
		'nama_asset',
		'lokasi_id',
		'expired_date',
		'nama_supplier',
		'harga_satuan',
		'created_at',
		'updated_at',
		'deleted_at',
   ];
  

   public function transaksi_peminjaman()
    {
        return $this->hasMany('App\Transaksi_Peminjaman');
    }
}