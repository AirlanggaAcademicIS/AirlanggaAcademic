@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Data Dosen
@endsection

@section('contentheader_title')
Tambah Data Dosen
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
			<form id="tambahKonferensi" method="post" action="{{url('/dosen/biodata-dosen/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="judul_penelitian" class="col-sm-2 control-label">NIP</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nip" name="nip" placeholder="Masukkan NIP Dosen" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama_ketua" class="col-sm-2 control-label">Nama Dosen</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_ketua" name="nama_dosen" placeholder="Masukkan Nama Dosen" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama_ketua" class="col-sm-2 control-label">Password</label>
					<div class="col-md-8">
						<input type="Password" class="form-control input-lg" id="nama_ketua" name="password" placeholder="Masukkan Nama Dosen" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama_ketua" class="col-sm-2 control-label">Confirm Password</label>
					<div class="col-md-8">
						<input type="Password" class="form-control input-lg" id="nama_ketua" name="password_confirmation" placeholder="Masukkan Nama Dosen" required>
					</div>
				</div>


				<div class="form-group">
                  <label for="nama_ketua" class="col-sm-2 control-label">Alamat Dosen</label>
                  <div class="col-md-8">                 
						<textarea class="form-control input-lg" id="bidang_penelitian" name="alamat_dosen" placeholder="Masukkan Alamat Dosen" rows="5" required ></textarea>
					</div>
				</div>

				<div class="form-group">
					<label for="nama_ketua" class="col-sm-2 control-label">Email Dosen</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_ketua" name="email" placeholder="Masukkan Email Dosen" required>
					</div>
				</div>

				<div class="form-group">
                  <label for="nama_ketua" class="col-sm-2 control-label">Status Dosen</label>
                  <div class="col-md-8" >  <select class="form-control" name="status_dosen">
                    <option value="Kepala Program Studi">Kepala Program Studi</option>
                    <option value="Dosen Tetap">Dosen Biasa</option>
                                                          
                  </select>                   
						
					</div>
				</div>

				

				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="tanggal_konferensi" class="col-sm-2 control-label">Tanggal Lahir</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="tanggal_lahir_dosen" placeholder="Masukkan Tanggal Lahir" required>
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

