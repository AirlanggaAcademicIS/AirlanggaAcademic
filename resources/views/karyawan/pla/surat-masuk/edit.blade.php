@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Surat
@endsection

@section('contentheader_title')
Edit Surat
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
			<form id="suratmasuk" method="post" action="{{url('karyawan/surat-masuk/'.$surat_masuk->id.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
			<div class="form-group">
					<label for="nim" class="col-sm-2 control-label">Nomor Surat</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="no_surat_masuk" name="no_surat_masuk" value="{{$surat_masuk->no_surat_masuk}}" placeholder="Masukkan No Surat" required>
					</div>
				</div>

				

			<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nama Lembaga</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_lembaga" name="nama_lembaga" value="{{$surat_masuk->nama_lembaga}}" placeholder="Masukkan Nama Lembaga" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Judul Surat</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="judul_surat_masuk" name="judul_surat_masuk" value="{{$surat_masuk->judul_surat_masuk}}" placeholder="Masukkan Judul Surat" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">NIM/NIP</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nim_nip" name="nim_nip" value="{{$surat_masuk->nim_nip}}" placeholder="Masukkan NIP/NIM" required>
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

