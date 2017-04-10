@extends('adminlte::layouts.app')

@section('htmlheader_title')
Detail Penelitian
@endsection

@section('contentheader_title')
Detail Penelitian
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
			<form id="tambahDetailPenelitian" method="post" action="{{url('/mahasiswa/detailpenelitian/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				
				
				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="abstract" class="col-sm-2 control-label">Abstrak</label>
					<div class="col-md-8">
						<textarea id="abstract" name="abstract" placeholder=" Masukkan abstract" required cols="115" rows="5">
						</textarea>
					</div>
				</div>
				
				
				<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="background" class="col-sm-2 control-label">Background</label>
					<div class="col-md-8">
						<textarea id="background" name="background" placeholder=" Masukkan background" required cols="115" rows="5">
						</textarea>
					</div>
				</div>

				<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="objective" class="col-sm-2 control-label">Objective</label>
					<div class="col-md-8">
						<textarea id="objective" name="objective" placeholder=" Masukkan objective" required cols="115" rows="5">
						</textarea>
					</div>
				</div>
				<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="methods" class="col-sm-2 control-label">Methods</label>
					<div class="col-md-8">
						<textarea id="methods" name="methods" placeholder=" Masukkan methods" required cols="115" rows="5">
						</textarea>
					</div>
				</div>

				<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="results" class="col-sm-2 control-label">Results</label>
					<div class="col-md-8">
						<textarea id="results" name="results" placeholder=" Masukkan results" required cols="115" rows="5">
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

