@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Peminjaman
@endsection

@section('contentheader_title')
Tambah Peminjaman
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
			<div class="container-fluid spark-screen">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="box box-warning">
					            <div class="box-header with-border">
					              <h3 class="box-title">Tambah Peminjaman</h3>
					            </div>
					            <!-- /.box-header -->
					            <div class="box-body">

			<form id="tambahPeminjaman" method="post" action="{{url('/inventaris/post-input-peminjaman')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nim" class="col-sm-2 control-label">Asset ID</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" value="{{$asset->id_asset}}" id="asset_id" name="asset_id" placeholder="Masukkan ID" readonly required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Asset yang Dipinjam</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" value="{{$asset->nama_asset}}" id="asset_yang_dipinjam" name="asset_yang_dipinjam" placeholder="Masukkan Nama" readonly required>
					</div>
				</div>

				<div class="form-group">
					<label for="nim" class="col-sm-2 control-label">Nomor Induk Peminjam</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nim_nip_peminjam" name="nim_nip_peminjam" placeholder="Masukkan NIM" required>
					</div>
				</div>

				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Expected Checkin Date</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="expected_checkin_date" placeholder="Masukkan Tanggal" required>
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
            <!-- /.box-body -->
          </div>       
</div>
					</div>
			</div>		          
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

