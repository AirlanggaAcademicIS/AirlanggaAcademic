@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Konferensi
@endsection

@section('contentheader_title')
Edit Konferensi
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
			<form id="tambahKonferensi" method="post" action="{{url('/dosen/konferensi/'.$konferensi->konferensi_id.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nim" class="col-sm-2 control-label">Nama Konferensi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_konferensi" name="nama_konferensi" placeholder="Masukkan Nama Konferensi" value="{{$konferensi->nama_konferensi}}" required>
					</div>
				</div>

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Pemapar Konferensi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="pemapar_konferensi" name="pemapar_konferensi" placeholder="Masukkan Pemapar Konferensi" value="{{$konferensi->pemapar_konferensi}}" required>
					</div>
				</div>

				<!-- Menampilkan textbiasa -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Tempat Konferensi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="tempat_konferensi" name="tempat_konferensi" placeholder="Masukkan Pemapar Konferensi" value="{{$konferensi->pemapar_konferensi}}" required>
					</div>
				</div>


				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Tanggal Konferensi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="tanggal_konferensi" placeholder="Masukkan Tanggal Konferensi" required>
					</div>
				</div>


				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Materi Konferensi</label>
					<div class="col-md-8">
						<textarea id="materi_konferensi" name="materi_konferensi" placeholder=" Masukkan Materi Konferensi" value="{{$konferensi->materi_konferensi}}" required cols="82" rows="5">
						</textarea>
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

