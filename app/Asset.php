<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
   protected $table = 'peminjaman';    
   protected $primaryKey = 'id';    
   protected $fillable = [
		'nip_petugas', 
		'nim_nip_peminjam',
		'serial_barcode',
		'nama_asset',
		'lokasi',
		'expired_date',
		'nama_supplier',
		'harga_satuan',
		'jumlah_barang',
		'total_harga',
		'created_at',
		'updated_at',
   ];
}