@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Surat Tugas
@endsection

@section('contentheader_title')
Tambah Surat Tugas
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
			<form id="tambah_surattugas" method="post" action="{{url('/dosen/surat-tugas/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="no_surat" class="col-sm-2 control-label">no surat</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="no_surat" name="no_surat" placeholder="Masukkan No Surat" required>
					</div>
				</div>
<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="tanggal_surat" class="col-sm-2 control-label">Tanggal surat</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="tanggal_surat" placeholder="Masukkan Tanggal Surat" required>
					</div>
				</div>
				<div class="form-group">
					<label for="keterangan_sk" class="col-sm-2 control-label">Keterangan Surat</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="keterangan_sk" name="keterangan_sk" placeholder="Masukkan Keterangan Surat" required>
					</div>
				</div>
				<div class="form-group">
					<label for="file_sk" class="col-sm-2 control-label">File Surat</label>
					<div class="col-md-8">
						<input type="file" class="form-control input-lg" id="file_sk" name="file_sk" placeholder="Pilih File Surat" required>

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

