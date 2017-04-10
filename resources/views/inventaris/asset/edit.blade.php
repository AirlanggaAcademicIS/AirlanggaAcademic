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

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="id_asset" class="col-sm-2 control-label">ID Asset</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_asset" name="id_asset" placeholder="Masukkan ID Asset" value="{{$asset->id_asset}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nip_petugas" class="col-sm-2 control-label">NIP Petugas</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nip_petugas" name="nip_petugas" placeholder="Masukkan NIP" value="{{$asset->nip_petugas}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="serial_barcode" class="col-sm-2 control-label">Serial Barcode</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="serial_barcode" name="serial_barcode" placeholder="Masukkan Serial Barcode" value="{{$asset->serial_barcode}}" required>
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
						<input type="text" class="form-control input-lg" id="datepicker" name="expired_date" placeholder="Masukkan Tanggal" required>
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

				<div class="form-group">
					<label for="total_harga" class="col-sm-2 control-label">Total Harga</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="total_harga" name="total_harga" placeholder="Masukkan Total Harga" value="{{$asset->total_harga}}" required>
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

