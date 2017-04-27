@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Detail Nilai
@endsection

@section('contentheader_title')
Tambah Detail Nilai
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
			<form id="tambahDetailNilai" method="post" action="{{url('/krs-khs/khs/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="id_mk_ditawarkan" class="col-sm-2 control-label">ID MK Ditawarkan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_mk_ditawarkan" name="id_mk_ditawarkan" placeholder="Masukkan ID MK Ditawarkan" required>
					</div>
				</div>

				<div class="form-group">
					<label for="NIM" class="col-sm-2 control-label">NIM</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="NIM" name="NIM" placeholder="Masukkan NIM Mahasiswa" required>
					</div>
				</div>

				<div class="form-group">
					<label for="id_jenis_penilaian" class="col-sm-2 control-label">Jenis Penilaian</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_jenis_penilaian" name="id_jenis_penilaian" placeholder="Masukkan ID Jenis Penilaian" required>
					</div>
				</div>

				<div class="form-group">
					<label for="detail_nilai" class="col-sm-2 control-label">Nilai</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="detail_nilai" name="detail_nilai" placeholder="Masukkan Nilai" required>
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

