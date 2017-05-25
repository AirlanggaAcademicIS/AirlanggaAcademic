@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Konferensi
@endsection

@section('contentheader_title')
Tambah Konferensi
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
			<form id="tambahKonferensi" method="post" action="{{url('/dosen/konferensi/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nama_konferensi" class="col-sm-2 control-label">Nama Konferensi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_konferensi" name="nama_konferensi" placeholder="Masukkan Nama Konferensi" required>
					</div>
				</div>

				<div class="form-group">
					<label for="pemapar_konferensi" class="col-sm-2 control-label">Pemapar Konferensi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="pemapar_konferensi" name="pemapar_konferensi" placeholder="Masukkan Pemapar Konferensi" required>
					</div>
				</div>


				<div class="form-group">
					<label for="tempat_konferensi" class="col-sm-2 control-label">Tempat Konferensi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="tempat_konferensi" name="tempat_konferensi" placeholder="Masukkan Tempat Konferensi" required>
					</div>
				</div>

				

				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="tanggal_konferensi" class="col-sm-2 control-label">Tanggal Konferensi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="tanggal_konferensi" placeholder="Masukkan Tanggal Konferensi" required>
					</div>
				</div>



				<div class="form-group">
					<label for="materi_konferensi" class="col-sm-2 control-label">Materi Konferensi</label>
					<div class="col-md-8">
						<textarea id="materi_konferensi" name="materi_konferensi" placeholder=" Masukkan Materi Konferensi" required cols="82" rows="5">
						</textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="file_prestasi" class="col-sm-2 control-label">File Konferensi</label>
					<div class="col-md-8">
						<input type="file" class="form-control input-lg" id="file_konferensi" name="file_konferensi" placeholder="Pilih File Prestasi" required>

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

