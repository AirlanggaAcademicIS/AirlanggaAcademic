@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Permohonan Ruang
@endsection

@section('contentheader_title')
Edit Permohonan Ruang
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
			<form id="tambahPermohonanRuang" method="post" action="{{url('/pla/PermohonanRuang/'.$PermohonanRuang->id_permohonan_ruang.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nip_petugas" class="col-sm-2 control-label">NIP Petugas</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nip_petugas" name="nip_petugas" placeholder="Masukkan NIP" value="{{$PermohonanRuang->nip_petugas}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nama</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama" name="nama" placeholder="Masukkan Nama" value="{{$PermohonanRuang->nama}}" required>
					</div>
				</div>

			<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Verifikasi</label>
					<div class="col-md-8">
						<select name="atribut_verifikasi" required>
							<option value="0">Belum Konfirmasi</option>
							<option value="1">Konfirmasi</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="nim_nip" class="col-sm-2 control-label">NIM/NIP Peminjam</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nim_nip" name="nim_nip" placeholder="NIP/NIM Peminjam" value="{{$PermohonanRuang->nim_nip}}" required>
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

