@extends('adminlte::layouts.app')

@section('htmlheader_title')
Biodata Mahasiswa
@endsection

@section('contentheader_title')
Form Biodata Mahasiswa
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
		<form id="tambahBiodataMahasiswa" method="post" action="{{url('/mahasiswa/biodata-mahasiswa/'.$biodatamahasiswa->nim_id.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label for="nama_mhs" class="col-sm-2 control-label">Nama Mahasiswa</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_mhs" name="nama_mhs" placeholder="Masukkan Nama" value="{{$biodatamahasiswa->nama_mhs}}" disabled="disabled" required>
					</div>
				</div>

				<div class="form-group">
					<label for="angkatan" class="col-sm-2 control-label">Angkatan</label>
					<div class="col-md-8">
						<input type="number" class="form-control input-lg" id="angkatan" name="angkatan" placeholder="Masukkan Angkatan"  value="{{$biodatamahasiswa->angkatan}}" disabled="disabled" required>
					</div>
				</div>

				<div class="form-group">
					<label for="email_mhs" class="col-sm-2 control-label">Email</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="email_mhs" name="email_mhs" placeholder="Masukkan Email"  value="{{$biodatamahasiswa->email_mhs}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="no_hp" class="col-sm-2 control-label">No. HP</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="no_hp" name="no_hp" placeholder="Masukkan No. HP"  value="{{$biodatamahasiswa->no_hp}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
					<div class="col-md-8">
						<select class="form-control" name="jenis_kelamin" value="{{$biodatamahasiswa->jenis_kelamin}}" required>
						@if (($biodatamahasiswa->jenis_kelamin=="Laki-Laki"))
							<option value="Laki-Laki" selected="selected" >Laki-Laki</option>
							<option value="Perempuan" >Perempuan</option>
							@else (($biodatamahasiswa->jenis_kelamin=="Perempuan"))
							<option value="Laki-Laki" >Laki-Laki</option>
							<option value="Perempuan" selected="selected" >Perempuan</option>
							@endif
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="negara_asal" class="col-sm-2 control-label">Negara Asal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="negara_asal" name="negara_asal" placeholder="Masukkan Negara Asal"  value="{{$biodatamahasiswa->negara_asal}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="provinsi_asal" class="col-sm-2 control-label">Provinsi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="provinsi_asal" name="provinsi_asal" placeholder="Masukkan Provinsi"  value="{{$biodatamahasiswa->provinsi_asal}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="kota_asal" class="col-sm-2 control-label">Kota Asal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="kota_asal" name="kota_asal" placeholder="Masukkan Kota Asala"  value="{{$biodatamahasiswa->kota_asal}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="kota_tinggal" class="col-sm-2 control-label">Kota Tinggal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="kota_tinggal" name="kota_tinggal" placeholder="Masukkan Kota Tinggal" value="{{$biodatamahasiswa->kota_tinggal}}"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="alamat_tinggal" class="col-sm-2 control-label">Alamat Tinggal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="alamat_tinggal" name="alamat_tinggal" placeholder="Masukkan Alamat Tinggal"  value="{{$biodatamahasiswa->alamat_tinggal}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="kota_lahir" class="col-sm-2 control-label">Kota Lahir</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="kota_lahir" name="kota_lahir" placeholder="Masukkan Kota Lahir"   value="{{$biodatamahasiswa->kota_lahir}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="tanggal_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir"   value="{{$biodatamahasiswa->tanggal_lahir}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="agama" class="col-sm-2 control-label">Agama</label>
					<div class="col-md-8">
						<select class="form-control" name="agama" value="{{$biodatamahasiswa->agama}}" required>
						@if (($biodatamahasiswa->agama=="Islam"))
							<option value="Islam" selected="selected" >Islam</option>
							<option value="Kristen" >Kristen</option>
							<option value="Katholik" >Katholik</option>
							<option value="Hindu" >Hindu</option>
							<option value="Budha" >Budha</option>
							@elseif (($biodatamahasiswa->agama=="Kristen"))
							<option value="Islam" >Islam</option>
							<option value="Kristen" selected="selected" >Kristen</option>
							<option value="Katholik" >Katholik</option>
							<option value="Hindu" >Hindu</option>
							<option value="Budha" >Budha</option>
							@elseif (($biodatamahasiswa->agama=="Katholik"))
							<option value="Islam" >Islam</option>
							<option value="Kristen" >Kristen</option>
							<option value="Katholik" selected="selected" >Katholik</option>
							<option value="Hindu" >Hindu</option>
							<option value="Budha" >Budha</option>
							@elseif (($biodatamahasiswa->agama=="Hindu"))
							<option value="Islam" >Islam</option>
							<option value="Kristen" >Kristen</option>
							<option value="Katholik" >Katholik</option>
							<option value="Hindu" selected="selected" >Hindu</option>
							<option value="Budha" >Budha</option>
							@else (($biodatamahasiswa->agama=="Budha"))
							<option value="Islam" >Islam</option>
							<option value="Kristen" >Kristen</option>
							<option value="Katholik" >Katholik</option>
							<option value="Hindu" >Hindu</option>
							<option value="Budha" selected="selected" >Budha</option>
							@endif
							</select>
					</div>
				</div>

				<div class="form-group">
					<label for="kebangsaan" class="col-sm-2 control-label">Kebangsaan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="kebangsaan" name="kebangsaan" placeholder="Masukkan Kebangsaan"  value="{{$biodatamahasiswa->kebangsaan}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="sma_asal" class="col-sm-2 control-label">SMA Asal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="sma_asal" name="sma_asal" placeholder="Masukkan SMA Asal"  value="{{$biodatamahasiswa->sma_asal}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama_ayah" class="col-sm-2 control-label">Nama Ayah</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama Ayah"  value="{{$biodatamahasiswa->nama_ayah}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama_ibu" class="col-sm-2 control-label">Nama Ibu</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu"  value="{{$biodatamahasiswa->nama_ibu}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="deskripsi_diri" class="col-sm-2 control-label">Deskripsi Diri</label>
					<div class="col-md-8">
						<textarea id="deskripsi_diri" name="deskripsi_diri" placeholder=" Masukkan Deskripsi Diri" required cols="82" rows="5">
						{{$biodatamahasiswa->deskripsi_diri}}
						</textarea>
					</div>
				</div>

				<div class="form-group">
					<label for="motto" class="col-sm-2 control-label">Motto</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="motto" name="motto" placeholder="Masukkan Motto"  value="{{$biodatamahasiswa->motto}}" required>
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
    var date = $('#datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();

  } );
  </script>
@endsection

