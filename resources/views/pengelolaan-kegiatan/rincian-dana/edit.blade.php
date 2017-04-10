@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Rincian Dana
@endsection

@section('contentheader_title')
Edit Rincian Dana
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
			<form id="tambahBiodata" method="post" action="{{url('/pengelolaan-kegiatan/rincian-dana/'.$rincian_dana->kode_rincian.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="kode_rincian" class="col-sm-2 control-label">Kode Rincian</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="kode_rincian" name="kode_rincian" placeholder="Masukkan Kode Rincian" value="{{$rincian_dana->kode_rincian}}" required>
					</div>
				</div>

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nama_barang" class="col-sm-2 control-label">Nama Barang</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_barang" name="nama_barang" placeholder="Masukkan Nama Barang" value="{{$rincian_dana->nama_barang}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="qty" class="col-sm-2 control-label">Qty</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="qty" name="qty" placeholder="Masukkan Qty" value="{{$rincian_dana->qty}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="harga" class="col-sm-2 control-label">Harga</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="harga" name="harga" placeholder="Masukkan Harga" value="{{$rincian_dana->harga}}" required>
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

