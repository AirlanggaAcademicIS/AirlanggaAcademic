@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Status
@endsection

@section('contentheader_title')
Tambah Status
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
			<form id="tambahStatus" method="post" action="{{url('/karyawan/monitoring-skripsi/status/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="id" class="col-sm-2 control-label">No. Status</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="id" name="id" placeholder="Masukkan no status" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Keterangan</label>
					<div class="col-md-8">
						<input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan" required>
					</div>
				</div>
					<button type="submit" class="btn btn-primary" style="margin-left: 500px;">
							Simpan
						</button>
			</form>
			<br>
				<a href="{{url('karyawan/monitoring-skripsi/status')}}">
					<button class="btn btn-danger" style="margin-left: 500px;">
					
							Kembali
					</button>
				</a>
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