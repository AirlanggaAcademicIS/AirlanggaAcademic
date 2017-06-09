@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Penelitian Mahasiswa
@endsection

@section('contentheader_title')
Edit Penelitian Mahasiswa
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 

@endsection

@section('main-content')
<style>
	.form-group label{
		text-align: left !important;
	}
</style>

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
			<form id="tambahBiodata" method="post" action="{{url('/mahasiswa/penelitian/'.$penelitian_mhs->kode_penelitian.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="judul" class="col-sm-2 control-label">Judul</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="judul" name="judul" placeholder="Masukkan Judul" value="{{$penelitian_mhs->judul}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="peneliti" class="col-sm-2 control-label">Nama</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="peneliti" name="peneliti" placeholder="Masukkan Nama" value="{{$penelitian_mhs->peneliti}}" required  readonly="readonly">
					</div>
				</div>

				<div class="form-group">
					<label for="fakultas" class="col-sm-2 control-label">Fakultas</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="fakultas" name="fakultas" placeholder="Masukkan Fakultas" value="{{$penelitian_mhs->fakultas}}" required readonly="readonly">
					</div>
				</div>

				<div class="form-group">
					<label for="tahun" class="col-sm-2 control-label">Tahun</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="tahun" name="tahun" onkeypress="var key = event.keyCode || event.charCode; return ((key  >= 48 && key  <= 57) || key == 8);"; placeholder="Masukkan Tahun Penelitian" value="{{$penelitian_mhs->tahun}}" maxlength="4" required>
					</div>
				</div>

				<div class="form-group">
					<label for="halaman_naskah" class="col-sm-2 control-label">Jumlah Halaman</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="halaman_naskah" name="halaman_naskah" onkeypress="var key = event.keyCode || event.charCode; return ((key  >= 48 && key  <= 57) || key == 8);"; placeholder="Masukkan Jumlah Halaman" value="{{$penelitian_mhs->halaman_naskah}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="sumber_dana" class="col-sm-2 control-label">Sumber Dana</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="sumber_dana" name="sumber_dana" placeholder="Masukkan Sumber Dana" value="{{$penelitian_mhs->sumber_dana}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="besar_dana" class="col-sm-2 control-label">Besar Dana</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="besar_dana" name="besar_dana" placeholder="Masukkan Besar Dana" value="{{$penelitian_mhs->besar_dana}}" required>
						<p class="help-block">*Isi ' - ' jika tidak ada</p>
					</div>
				</div>

				<div class="form-group">
					<label for="sk" class="col-sm-2 control-label">SK</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="sk" name="sk" placeholder="Masukkan SK" value="{{$penelitian_mhs->sk}}" required>
						<p class="help-block">*Isi ' - ' jika tidak ada</p>
					</div>
				</div>

				<div class="form-group">
					<label for="publikasi" class="col-sm-2 control-label">Publikasi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="publikasi" name="publikasi" placeholder="Masukkan Publikasi" value="{{$penelitian_mhs->publikasi}}" required>
						<p class="help-block">*Isi ' - ' jika tidak ada</p>
					</div>
				</div>

				<div class="form-group">
					<label for="kategori_penelitian" class="col-sm-2 control-label">Jenis Penelitian</label>
					<div class="col-md-8">
						<select class="form-control input-lg" name="kategori_penelitian" value="{{$penelitian_mhs->kategori_penelitian}}" required>
						    @if (($penelitian_mhs->kategori_penelitian)=='PKM')
							<option value="PKM" selected="selected">PKM</option>
							<option value="Penelitian Dosen">Penelitian Dosen</option>
							<option value="Karya Ilmiah">Karya Ilmiah</option>
							@elseif (($penelitian_mhs->kategori_penelitian)=='Penelitian Dosen')
							<option value="PKM">PKM</option>
							<option value="Penelitian Dosen" selected="selected">Penelitian Dosen</option>
							<option value="Karya Ilmiah">Karya Ilmiah</option>
							@elseif (($penelitian_mhs->kategori_penelitian)=='Karya Ilmiah')
							<option value="PKM">PKM</option>
							<option value="Penelitian Dosen">Penelitian Dosen</option>
							<option value="Karya Ilmiah" selected="selected">Karya Ilmiah</option>
							@endif
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

                <!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Anggota</label>
					<div class="col-md-8">
						<textarea type="text" class="form-control input-lg" id="anggota" name="anggota" required cols="115" rows="5"
						placeholder="Masukkan Anggota" required>{{$detail_anggota->anggota}}</textarea>
					</div>
				</div>

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Abstrak</label>
					<div class="col-md-8">
						<textarea id="abstract" class="form-control input-lg" name="abstract" placeholder=" Masukkan Abstract" required cols="115" rows="5">{{$detailpenelitian->abstract}}</textarea>
					</div>
				</div>

				<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Background</label>
					<div class="col-md-8">
						<textarea id="background" class="form-control input-lg" name="background" placeholder=" Masukkan Background" required cols="115" rows="5">{{$detailpenelitian->background}}</textarea>
					</div>
				</div>

				<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Objective</label>
					<div class="col-md-8">
						<textarea id="objective" class="form-control input-lg" name="objective" placeholder=" Masukkan Objective" required cols="115" rows="5">{{$detailpenelitian->objective}}</textarea>
					</div>
				</div>
				
				<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Methods</label>
					<div class="col-md-8">
						<textarea id="methods" class="form-control input-lg" name="methods" placeholder=" Masukkan Methods" required cols="115" rows="5">{{$detailpenelitian->methods}}</textarea>
					</div>
				</div>

				<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Results</label>
					<div class="col-md-8">
						<textarea id="results" class="form-control input-lg" name="results" placeholder=" Masukkan Results" required cols="115" rows="5">{{$detailpenelitian->results}}</textarea>
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

@endsection

