@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Jadwal
@endsection

@section('contentheader_title')
Tambah Jadwal
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
			<form id="tambahJadwal" method="post" action="{{url('/krs-khs/JadwalKuliah/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="id_mk_ditawarkan" class="col-sm-2 control-label">mk ditawarkan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_mk_ditawarkan" name="id_mk_ditawarkan" placeholder="Masukkan Nama Mk" required>
					</div>
				</div>

				<div class="form-group">
					<label for="id_jam" class="col-sm-2 control-label">jam</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_jam" name="id_jam" placeholder="Masukkan Jam" required>
					</div>
				</div>

				<div class="form-group">
					<label for="id_hari" class="col-sm-2 control-label">hari</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_hari" name="id_hari" placeholder="Masukkan Hari" required>
					</div>
				</div>

				<div class="form-group">
					<label for="id_ruang" class="col-sm-2 control-label">ruang</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_ruang" name="id_ruang" placeholder="Masukkan Ruang" required>
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
@endsection

