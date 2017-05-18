@extends('adminlte::layouts.app')

@section('htmlheader_title')
Input dokumentasi
@endsection

@section('contentheader_title')
Input Dokumen
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
			<form id="tambahBiodata" method="post" action="{{url('/kegiatan/dokumentasi/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nomor Dokumentasi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_dokumentasi" name="id_dokumentasi" placeholder="Masukkan Nama Gambar" required>
					</div>
				</div>

				<div class="form-group">
				<label for="nama" class="col-sm-2 control-label">Nama Kegiatan</label>
                <div class="col-md-8">
	                <select class="form-control select2" style="width: 100%;" name = "kegiatan_id">
	                  @foreach($kegiatan as $pk)
	                  <option value="{{$pk->id_kegiatan}}" >{{$pk->nama}}</option>
	                  @endforeach
	                </select>
	             </div>
              </div>

			<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Evaluasi Kegiatan</label>
					<div class="col-md-8">
						<textarea id="lesson_learned" name="lesson_learned" placeholder=" Masukkan Evaluasi Kegiatan" required cols="82" rows="5">
						</textarea>
					</div>
				</div>

				<!-- Menampilkan Deskripsi -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Masukkan Foto</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="url_gambar" name="url_foto" placeholder="Masukkan URL Gambar" required>
					</div>
				</div>
				
				<!-- Menampilkan tanggal dengan datepicker -->
				

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

