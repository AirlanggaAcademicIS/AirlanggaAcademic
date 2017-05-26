@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Konsultasi
@endsection

@section('contentheader_title')
Tambah Konsultasi
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
			<form id="tambahBimbingan" method="post" action="{{url('/mahasiswa/monitoring-skripsi/konsultasi/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<div class="col-md-8">
					@foreach($mhs as $m)
						<input type="hidden" class="form-control input-lg" id="skripsi_id" value="{{$m->id_skripsi}}" name="skripsi_id" placeholder="Masukkan id skripsi" required>
					@endforeach
					</div>
				</div>

	<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="tgl_konsul" class="col-sm-2 control-label">Tanggal Konsultasi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="tgl_konsul" placeholder="Masukkan Tanggal" required>
					</div>
				</div>

			<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="catatan_konsul" class="col-sm-2 control-label">Catatan</label>
					<div class="col-md-8">
						<textarea id="catatan_konsul" name="catatan_konsul" placeholder=" Masukkan Catatan " required cols="82" rows="5"></textarea>
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