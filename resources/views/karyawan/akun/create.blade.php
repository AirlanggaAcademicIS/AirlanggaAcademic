@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Akun
@endsection

@section('contentheader_title')
Tambah Akun Mahasiswa
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
			<form id="tambahAkun" method="post" action="{{url('/karyawan/akun/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nim" class="col-sm-2 control-label">NIM</label>
					<div class="col-md-8">
						<input type="number" class="form-control input-lg" id="nim" name="nim" placeholder="Masukkan NIM" required>
			 		</div>
				</div>

				<div class="form-group">
					<label for="nama_mhs" class="col-sm-2 control-label">Nama Mahasiswa</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_mhs" name="nama_mhs" placeholder="Masukkan Nama Mahasiswa" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nlp_id" class="col-sm-2 control-label">Dosen Wali</label>
					<div class="col-md-8">
						<select class="form-control input-lg" id="nlp_id" name="nlp_id" placeholder="Masukkan NIP Dosen Wali" required>
						@foreach ($akun as $k)
						<option value="{{$k->nip}}">{{$k->nama_dosen}}</option>
						@endforeach 
						<option value="000000">--Belum ada dosen wali--</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="angkatan" class="col-sm-2 control-label">angkatan</label>
					<div class="col-md-8">
						<input type="number" class="form-control input-lg" id="angkatan" name="angkatan" placeholder="Masukkan angkatan" required>
					</div>
				</div>


				<div class="form-group">
					<label for="E-mail" class="col-sm-2 control-label">E-mail</label>
					<div class="col-md-8">
						<input type="email" class="form-control input-lg" id="email" name="email" placeholder="Masukkan e-mail" required>
					</div>
				</div>

				<div class="form-group">
					<label for="fakultas" class="col-sm-2 control-label">Fakultas</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="fakultas" name="fakultas" value="Fakultas Sains dan Teknologi" readonly="readonly">
					</div>
				</div>

				<div class="form-group">
					<label for="program studi" class="col-sm-2 control-label">Program Studi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="program studi" name="program studi" value="S1 Sistem Informasi" readonly="readonly">
					</div>
				</div>

				<div class="form-group">
					<label for="foto_mhs" class="col-sm-2 control-label">Foto Mahasiswa</label>
					<div class="col-md-8">
						<input type="file" class="form-control input-lg" id="foto_mhs" name="foto_mhs" placeholder="Pilih Foto Mahasiswa" required>

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

  <script type="text/javascript">
	var elBrowse  = document.getElementById("foto_mhs");
	elBrowse.addEventListener("change", function() {
		var files  = this.files;
		var errors = "";
		if (!files) {
			errors += "File upload not supported by your browser.";
		}
		if (files && files[0]) 
		{
			for(var i=0; i<files.length; i++) 
			{
				var file = files[i];
				if ( (/\.(png|jpeg|jpg|gif)$/i).test(file.name) ) 
				{
					readImage( file ); 
				} 
				else 
				{
					errors += file.name +" is unsupported Image extension\n";
					document.getElementById("foto_mhs").value = null;  
				}
			}
		}
		if (errors) {
			alert(errors); 
		}
	});
</script>
@endsection

