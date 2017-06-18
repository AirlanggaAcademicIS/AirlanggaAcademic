@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Penelitian Mahasiswa
@endsection

@section('contentheader_title')
Tambah Penelitian Mahasiswa
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
			<form id="tambahPenelitian" method="post" action="{{url('/mahasiswa/penelitian/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="judul" class="col-sm-2 control-label">Judul</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="judul" name="judul" placeholder="Masukkan Judul" required value="{{ old('judul') }}">
					</div>
				</div>

				<div class="form-group">
					<label for="peneliti" class="col-sm-2 control-label">Nama</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="peneliti" name="peneliti" placeholder="Masukkan Nama" value="{{$penelitian_mhs->nama_mhs}}" readonly="readonly">
					</div>
				</div>

				<div class="form-group">
					<label for="fakultas" class="col-sm-2 control-label">Fakultas</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="fakultas" name="fakultas" placeholder="Masukkan Fakultas" value="Sains dan Teknologi" readonly="readonly">
					</div>
				</div>

				<div class="form-group">
					<label for="tahun" class="col-sm-2 control-label">Tahun</label>
					<div class="col-md-8">
						<input type="text" onkeypress="var key = event.keyCode || event.charCode; return ((key  >= 48 && key  <= 57) || key == 8);"; class="form-control input-lg" id="tahun" name="tahun" maxlength="4" placeholder="Masukkan Tahun Penelitian" required value="{{ old('tahun') }}">
					</div>
				</div>

				<div class="form-group">
					<label for="halaman_naskah" class="col-sm-2 control-label">Jumlah Halaman</label>
					<div class="col-md-8">
						<input type="text" onkeypress="var key = event.keyCode || event.charCode; return ((key  >= 48 && key  <= 57) || key == 8);"; class="form-control input-lg" id="halaman_naskah" name="halaman_naskah" maxlength="3" placeholder="Masukkan Jumlah Halaman" required value="{{ old('halaman_naskah') }}">
					</div>
				</div>

				<div class="form-group">
					<label for="sumber_dana" class="col-sm-2 control-label">Sumber Dana</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="sumber_dana" name="sumber_dana" placeholder="Masukkan Sumber Dana" required value="{{ old('sumber_dana') }}">
						<p class="help-block">*contoh: DIPA Universitas Airlangga 2016</p>
						<p class="help-block">*Isi ' - ' jika tidak ada</p>
					</div>
				</div>

				<div class="form-group">
					<label for="besar_dana" class="col-sm-2 control-label">Besar Dana</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="besar_dana" name="besar_dana" placeholder="Masukkan Besar Dana" required value="{{ old('besar_dana') }}">
						<p class="help-block">*contoh: 10000000</p>
						<p class="help-block">*Isi ' - ' jika tidak ada</p>
					</div>
				</div>

				<div class="form-group">
					<label for="sk" class="col-sm-2 control-label">SK</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="sk" name="sk" placeholder="Masukkan SK" required value="{{ old('sk') }}">
						<p class="help-block">*contoh: 553/H3/KR/2010</p>
						<p class="help-block">*Isi ' - ' jika tidak ada</p>
					</div>
				</div>

				<div class="form-group">
					<label for="publikasi" class="col-sm-2 control-label">Publikasi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="publikasi" name="publikasi" placeholder="Masukkan Publikasi" required value="{{ old('publikasi') }}">
						<p class="help-block">*contoh: Seminar</p>
						<p class="help-block">*Isi ' - ' jika tidak ada</p>
					</div>
				</div>

				<div class="form-group">
					<label for="kategori_penelitian" class="col-sm-2 control-label">Jenis Penelitian</label>
					<div class="col-md-8">
						<select class="form-control input-lg" name="kategori_penelitian" required>
							<option value="PKM">PKM</option>
							<option value="Penelitian Dosen">Penelitian Dosen</option>
							<option value="Karya Ilmiah">Karya Ilmiah</option>
						</select>
					</div>
				</div>

				<div class="form-group">
                  <label for="file_pen" class="col-sm-2 control-label">Upload Scan PDF</label>
                  <div class="col-md-8">
                  <input type="file" id="file_pen" name="file_pen" placeholder="Pilih File" required>

                  <p class="help-block">*File berformat .pdf</p>
                  </div>
                </div>

				<div class="form-group">
					<label for="anggota" class="col-sm-2 control-label">Anggota</label>
					<div class="col-md-8">
						<textarea class="form-control input-lg" id="anggota" name="anggota" 
						placeholder="Masukkan Anggota" required cols="115" rows="5">{!! old('anggota') !!}</textarea>
						<p class="help-block">*contoh:</p>
						<p class="help-block">1. Bambang</p>
						<p class="help-block">2. Joko</p>
						<p class="help-block">3. dll...</p>
					</div>
				</div>

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="abstract" class="col-sm-2 control-label">Abstrak</label>
					<div class="col-md-8">
						<textarea class="form-control input-lg" id="abstract" name="abstract" placeholder=" Masukkan abstract" required cols="115" rows="5">{!! old('abstract') !!}</textarea>
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

