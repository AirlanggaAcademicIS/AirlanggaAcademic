@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Data Maintenance
@endsection

@section('contentheader_title')
Tambah Data Maintenance
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
			<form id="inputMaintenance" method="post" action="{{url('/inventaris/maintenance/input-maintenance')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->

				<div class="form-group">
					<label for="nim" class="col-sm-2 control-label">ID Asset</label>
					<div class="col-md-6">
						<input type="text" class="form-control input-lg" id="asset_id" name="asset_id" placeholder="Masukkan ID Asset" value="{{$asset->id_asset}}"required>
					</div>
				</div>

				<div class="form-group">
					<label for="nim" class="col-sm-2 control-label">Nama Asset</label>
					<div class="col-md-6">
						<input type="text" class="form-control input-lg" id="asset_yang_dimaintenance" name="asset_yang_dimaintenance" value="{{$asset->nama_asset}}" placeholder="Masukkan Nama Asset yang Dimaintenance" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nama Pemaintenance</label>
					<div class="col-md-6">
						<input type="text" class="form-control input-lg" id="nama_pemaintenance" name="nama_pemaintenance" placeholder="Masukkan Nama Pemaintenance" required>
					</div>
				</div>

			<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Problem</label>
					<div class="col-md-8">
						<textarea id="problem" name="problem" placeholder=" Masukkan Detail Problem" required cols="82" rows="5">
						</textarea>
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Solution</label>
					<div class="col-md-8">
						<textarea id="solution" name="solution" placeholder=" Masukkan Detail Solution" required cols="82" rows="5">
						</textarea>
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Waktu Maintenance</label>
					<div class="col-md-6">
						<input type="text" class="form-control input-lg" id="datepicker" name="waktu_maintenance" placeholder="Masukkan Waktu Maintenance" required>
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

