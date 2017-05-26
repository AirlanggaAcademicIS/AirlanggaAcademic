@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Karyawan
@endsection

@section('contentheader_title')
Tambah Karyawan
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
			<form id="tambahPetugasTU" method="post" action="{{url('/karyawan/PLA/karyawan/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nip" class="col-sm-2 control-label">NIP Karyawan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nip_petugas" name="nip_petugas" placeholder="Masukkan NIP" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nama Karyawan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_petugas" name="nama_petugas" placeholder="Masukkan Nama" required>
					</div>
				</div>

			<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">No Telp Karyawan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="no_telp_petugas" name="no_telp_petugas" placeholder="Masukkan No Telp" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Email Karyawan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="email_petugas" name="email_petugas" placeholder="Masukkan Email" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Prodi</label>
					<div class="col-md-2	">
					<select class="form-control" id="prodi_id" name="prodi_id">
      @foreach($prodi as $p)
                    <option>{{$p->nama_prodi}}</option>
            @endforeach
                  </select>

					</div>
				</div>

				<div class="form-group text-center">
					<div class="col-md-8 col-md-offset-2">
					<button type="submit" class="btn btn-primary btn-lg">
							Tambah
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

