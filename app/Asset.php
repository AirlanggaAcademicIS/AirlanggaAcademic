<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class Asset extends Model
{

	protected $table = 'asset';
	protected $primaryKey = 'id_asset';
	protected $fillable = [
		'kategori_id',
   		'nip_petugas_id',
   		'status_id',
=======
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
	use SoftDeletes;
	
   protected $table = 'peminjaman';    
   protected $primaryKey = 'id_asset';    
   protected $fillable = [
   		'kategori_id', 
		'nip_petugas_id',
		'nim_nip_peminjam',
		'status_id',  
>>>>>>> 0d5b2f1938f264dfab9548ad3f560aa4ea9536cb
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
<<<<<<< HEAD
		'deleted_at',
   ];
=======
   ];

   public function transaksi_peminjaman()
    {
        return $this->hasMany('App\Transaksi_Peminjaman');
    }
>>>>>>> 0d5b2f1938f264dfab9548ad3f560aa4ea9536cb
}