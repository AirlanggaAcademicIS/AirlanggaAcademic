@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Jurnal
@endsection

@section('contentheader_title')
Edit Jurnal
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
			<form id="tambahjurnal" method="post" action="{{url('/dosen/jurnal/'.$jurnal->jurnal_id.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nama_jurnal" class="col-sm-2 control-label">Judul Jurnal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_jurnal" name="nama_jurnal" placeholder="Masukkan nama_jurnal" value="{{$jurnal->nama_jurnal}}" required>
					</div>
				</div>

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="halaman_jurnal" class="col-sm-2 control-label">Halaman</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="halaman_jurnal" name="halaman_jurnal" placeholder="Masukkan Halaman" value="{{$jurnal->halaman_jurnal}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="bidang_jurnal" class="col-sm-2 control-label">Bidang Jurnal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="bidang_jurnal" name="bidang_jurnal" placeholder="Masukkan bidang" value="{{$jurnal->bidang_jurnal}}" required>
					</div>
				</div>
				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="tanggal_jurnal" class="col-sm-2 control-label">Tanggal Jurnal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="tanggal_jurnal" placeholder="Masukkan Tanggal" value="{{$jurnal->tanggal_jurnal}}" required>
					</div>
				</div>
				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="volume_jurnal" class="col-sm-2 control-label">Volume Jurnal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="volume_jurnal" name="volume_jurnal" placeholder="Masukkan Volume" value="{{$jurnal->volume_jurnal}}" required>
					</div>
				</div>
				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="penulis_ke" class="col-sm-2 control-label">Penulis Ke</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="penulis_ke" name="penulis_ke" placeholder="Masukkan Penulis Ke" value="{{$jurnal->penulis_ke}}" required>
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

