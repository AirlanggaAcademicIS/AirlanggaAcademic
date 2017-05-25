@extends('adminlte::layouts.app')

@section('htmlheader_title')
Verifikasi Surat Keluar
@endsection

@section('contentheader_title')
Verifikasi Surat Keluar
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 

@endsection

@section('main-content')
<style>
	.form-group label{
		text-align: left !important;
	}
</style>

	@foreach (['danger', 'warning', 'success', 'info'] as $msg)
	@if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
	<p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
	{!!Session::forget('alert-' . $msg)!!}
	@endif
	@endforeach


<div class="row">
	<div class="col-md-12">
		<div class="">

			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<br>
			<form id="suratkeluar" method="post" action="{{url('karyawan/surat-keluar-dosen/'.$surat_keluar_dosen->id_surat_keluar.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
<<<<<<< HEAD:resources/views/karyawan/surat-keluar-dosen/edit.blade.php

				<!--<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">NIP Petugas</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nip_petugas_id" name="nip_petugas_id" value="{{$surat_keluar_dosen->nip_petugas_id}}" placeholder="Masukkan NIP Petugas" required>
=======
				<div class="form-group">
					<label for="nim" class="col-sm-2 control-label">Asset ID</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" value="{{$asset->id_asset}}" id="asset_id" name="asset_id" placeholder="Masukkan ID" readonly required>
>>>>>>> 39015ce865a33a1a5a3db6a46e5339ae93879d8f:resources/views/karyawan/inventaris/peminjaman/create.blade.php
					</div>
				</div>
-->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nama</label>
					<div class="col-md-8">
<<<<<<< HEAD:resources/views/karyawan/surat-keluar-dosen/edit.blade.php
						<input type="text" class="form-control input-lg" id="nama" name="nama" value="{{$surat_keluar_dosen->nama}}" placeholder="Masukkan Nama" required>
=======
						<input type="text" class="form-control input-lg" value="{{$asset->nama_asset}}" id="asset_yang_dipinjam" name="asset_yang_dipinjam" placeholder="Masukkan Nama" readonly required>
					</div>
				</div>

				<div class="form-group">
					<label for="nim" class="col-sm-2 control-label">Nomor Induk Peminjam</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nim_nip_peminjam" name="nim_nip_peminjam" placeholder="Masukkan NIM" required>
>>>>>>> 39015ce865a33a1a5a3db6a46e5339ae93879d8f:resources/views/karyawan/inventaris/peminjaman/create.blade.php
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Tanggal Upload</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="tgl_upload" value="{{$surat_keluar_dosen->tgl_upload}}" placeholder="Masukkan Tanggal Upload" required>
					</div>
				</div>


				<!-- Menampilkan dropdown -->
				 <div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Status</label>
					<div class="col-md-3">
						<select class="form-control" name="status" required>
							<option value="0">Belum Selesai</option>
							<option value="1">Sudah Selesai</option>	
							<option value="2">Tidak Disetujui </option>					
						</select>
					</div>
				</div>
				
				<div class="form-group text-center">
					<div class="col-md-8 col-md-offset-2">
					<button type="submit" class="btn btn-primary btn-lg">
							Confirm
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('code-footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>
@endsection

