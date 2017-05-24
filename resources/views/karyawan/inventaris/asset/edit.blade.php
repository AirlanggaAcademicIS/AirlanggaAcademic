@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Asset
@endsection

@section('contentheader_title')
Edit Asset
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
			<form id="tambahAsset" method="post" action="{{url('/inventaris/asset/'.$asset->id_asset.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">



				<div class="form-group">
					
					<div class="col-md-8">
						<input type="hidden" class="form-control input-lg" id="id_asset" name="id_asset" placeholder="Masukkan Nama Supplier" value="{{$asset->id_asset}}" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Kategori</label>
					<div class="col-md-8">
						<select class="form-control" name="kategori_id" required>
		            	<option value="">-- Pilih Kategori --</option>
		                <option value="1">Dokumen</option>
		                <option value="2">Furniture</option>
		                <option value="3">Elektronik</option>
		               
					</select>
					</div>
				</div>

				 <div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Status</label>
					<div class="col-md-8">
						<select class="form-control" name="status_id" required>
		            	<option value="">-- Pilih Status --</option>
		                <option value="1">Ready</option>
		                <option value="2">Not Ready</option>
		                <option value="2">Dipinjam</option>
					</select>
					</div>
				</div>


				<div class="form-group">
					<label for="nama_asset" class="col-sm-2 control-label">Nama Asset</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_asset" name="nama_asset" placeholder="Masukkan Nama Asset" value="{{$asset->nama_asset}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="lokasi" class="col-sm-2 control-label">Lokasi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="lokasi" name="lokasi" placeholder="Masukkan Lokasi" value="{{$asset->lokasi}}" required>
					</div>
				</div>



				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="expired_date" class="col-sm-2 control-label">Expired Date</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="expired_date" placeholder="Masukkan Tanggal" value="{{$asset->expired_date}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama_supplier" class="col-sm-2 control-label">Nama Supplier</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_supplier" name="nama_supplier" placeholder="Masukkan Nama Supplier" value="{{$asset->nama_supplier}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="harga_satuan" class="col-sm-2 control-label">Harga Satuan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="harga_satuan" name="harga_satuan" placeholder="Masukkan Harga" value="{{$asset->harga_satuan}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="jumlah_barang" class="col-sm-2 control-label">Jumlah Barang</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="jumlah_barang" name="jumlah_barang" placeholder="Masukkan Jumlah Barang" value="{{$asset->jumlah_barang}}" required>
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


