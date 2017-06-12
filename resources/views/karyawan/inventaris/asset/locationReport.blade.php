@extends('adminlte::layouts.app')

@section('htmlheader_title')
Location Report
@endsection

@section('contentheader_title')
Location Report
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
			<form id_asset="tambahAsset" method="post" action="{{ url('inventaris/asset/print-location-report') }}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
                <div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Lokasi</label>
					<div class="col-md-8">
						<select class="form-control" name="lokasi" required>
		            	<option value="">-- Pilih Lokasi --</option>
		                @foreach ($lokasi as $k)
		                <option value="{{ $k->id }}">{{ $k->nama_lokasi }}</option>
		                @endforeach
		               
					</select>
					</div>
				</div>

				 
				<div class="form-group text-center">
					<div class="col-md-8 col-md-offset-2">
					<button type="submit" class="btn btn-primary btn-lg">
							PRINT REPORT
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