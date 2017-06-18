@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Prestasi
@endsection

@section('contentheader_title')
Tambah Prestasi
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
			<form id="tambahPrestasi" method="post" action="{{url('/mahasiswa/prestasi/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

<!-- menampilkan input nim-->

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="prestasi" class="col-sm-2 control-label">Prestasi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="prestasi" name="prestasi" placeholder="Masukkan Nama Prestasi" required>
					</div>
				</div>

				<div class="form-group">
					<label for="tahun_kegiatan" class="col-sm-2 control-label">Tahun Kegiatan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="tahun_kegiatan" name="tahun_kegiatan" placeholder="Masukkan Tahun Kegiatan Prestasi" required>
					</div>
				</div>

					<!-- Menampilkan dropdown -->
				<div class="form-group">
					<label for="kelompok_kegiatan" class="col-sm-2 control-label">Kelompok Kegiatan</label>
					<div class="col-md-8">
						<select class="form-control" name="kelompok_kegiatan" required>
							<option value="Kegiatan Wajib Universitas">Kegiatan Wajib Universitas</option>
							<option value="Kegiatan Bidang Organisasi dan Kepemimpinan">Kegiatan Bidang Organisasi dan Kepemimpinan</option>
							<option value="Kegiatan Bidang Minat dan Bakat">Kegiatan Bidang Minat dan Bakat</option>
							<option value="Kegiatan Bidang Kepedulian Sosial">Kegiatan Bidang Kepedulian Sosial</option>
						</select>
					</div>
				</div>

					<!-- Menampilkan dropdown -->
				<div class="form-group">
					<label for="jenis_kegiatan" class="col-sm-2 control-label">Jenis Kegiatan</label>
					<div class="col-md-8">

						<select class="form-control" name="jenis_kegiatan" required>

							<option value="PPKMB">PPKMB</option>
							<option value="KKN">KKN</option>
							<option value="PKL">PKL</option>
							<option value="Pengurus Organisasi">Pengurus Organisasi</option>
							<option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
							<option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
							<option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
							<option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
							<option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
							<option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
							<option value="Penanganan Bencana">Penanganan Bencana</option>
						</select>
					</div>
				</div>

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="penyelenggara" class="col-sm-2 control-label">Penyelenggara</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="penyelenggara" name="penyelenggara" placeholder="Masukkan Penyelenggara Kegiatan" required>
					</div>
				</div>

				<!-- Menampilkan dropdown -->
				<div class="form-group">
					<label for="tingkat" class="col-sm-2 control-label">Tingkat</label>
					<div class="col-md-8">

						<select class="form-control" name="tingkat" required>

							<option value="Universitas">Universitas</option>
							<option value="Fakultas">Fakultas</option>
							<option value="Departemen/Prodi">Departemen/Prodi</option>
							<option value="Nasional">Nasional</option>
							<option value="Internasional">Internasional</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="file_prestasi" class="col-sm-2 control-label">File Prestasi</label>
					<div class="col-md-8">
						<input type="file" class="form-control input-lg" id="gambar" name="file_prestasi" placeholder="Pilih File Prestasi" required>

					</div>
				</div>


			<!-- Menampilkan textarea
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Alamat</label>
					<div class="col-md-8">
						<textarea id="alamat" name="alamat" placeholder=" Masukkan Alamat" required cols="82" rows="5">
						</textarea>
					</div>
				</div>

				Menampilkan dropdown
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Provinsi</label>
					<div class="col-md-8">
						<select name="provinsi" required>
							<option value="Jawa Timur">Jawa Timur</option>
							<option value="Jawa Tengah">Jawa Tengah</option>
							<option value="Jawa Barat">Jawa Barat</option>
						</select>
					</div>
				</div> -->
				<!-- Menampilkan tanggal dengan datepicker
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Tanggal Masuk</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="tanggal_masuk" placeholder="Masukkan Tanggal" required>
					</div>
				</div> -->

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
	var elBrowse  = document.getElementById("gambar");
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
					document.getElementById("gambar").value = null;  
				}
			}
		}
		if (errors) {
			alert(errors); 
		}
	});
</script
@endsection

