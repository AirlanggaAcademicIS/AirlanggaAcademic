@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Asset
@endsection

@section('contentheader_title')
Tambah Asset
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<link rel="stylesheet" href="{{ asset('/css/dropzone.css') }}">

@endsection

@section('main-content')
<style>
	.form-group label{
		text-align: left !important;
	}
</style>
	<!-- Ini buat menampilkan notifikasi -->
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
			<form id_asset="tambahAsset" method="post" action="{{url('inventaris/asset/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
                <div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Kategori</label>
					<div class="col-md-8">
						<select class="form-control" name="kategori" required>
		            	<option value="">-- Pilih Kategori --</option>
		                @foreach ($kategori as $k)
		                <option value="{{ $k->id_kategori }}">{{ $k->kategori }}</option>
		                @endforeach
		               
					</select>
					</div>
				</div>

				 <div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Status</label>
					<div class="col-md-8">
						<select class="form-control" name="status" required>
		            	<option value="">-- Pilih Status --</option>
		                @foreach ($status as $s)
		                <option value="{{ $s->id_status }}">{{ $s->status }}</option>
		                @endforeach
					</select>
					</div>
				</div>


				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nama Asset</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_asset" name="nama_asset" placeholder="Masukkan Nama Asset" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Lokasi</label>
					<div class="col-md-8">
						<select class="form-control" name="lokasi" required>
		            	<option value="">-- Pilih Lokasi --</option>
		                @foreach ($lokasi as $k)
		                <option value="{{ $k->id }}">{{ $k->nama_lokasi }}</option>
		                @endforeach 
					</select>
					</div>
				</div>

				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Expired Date</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="expired_date" placeholder="Masukkan Tanggal" >
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nama Supplier</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_supplier" name="nama_supplier" placeholder="Masukkan Nama" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Harga Satuan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="harga_satuan" name="harga_satuan" placeholder="Masukkan Harga" required>
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