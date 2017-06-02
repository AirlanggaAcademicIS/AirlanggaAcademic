@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Penelitian
@endsection

@section('contentheader_title')
Edit Penelitian
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
			<form id="tambahpenelitian" method="post" action="{{url('/dosen/penelitian/'.$penelitian->penelitian_id.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Judul Penelitian</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="penelitian" name="judul_penelitian" placeholder="Masukkan nama" value="{{$penelitian->judul_penelitian}}" required>
					</div>
				</div>

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nama Ketua</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama" name="nama_ketua" placeholder="Masukkan tempat" value="{{$penelitian->nama_ketua}}" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Bidang Penelitian</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="bidang" name="bidang_penelitian" placeholder="Masukkan tempat" value="{{$penelitian->bidang_penelitian}}" required>
					</div>
				</div>


				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Tanggal kegiatan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="tanggal_penelitian" placeholder="Masukkan Tanggal" value="{{$penelitian->tanggal_penelitian}}" required>
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

