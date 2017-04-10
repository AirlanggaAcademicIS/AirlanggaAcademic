@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Kategori Media Pembelajaran
@endsection

@section('contentheader_title')
Edit Kategori Media Pembelajaran
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
			<form id="tambahKategoriMedia" method="post" action="{{url('/kurikulum/kategori-media-pembelajaran/'.$kategori_media_pembelajaran->id.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
				<label for="kategori_media_pembelajaran" class="col-sm-2 control-label" >Kategori Media Pembelajaran</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="kategori_media_pembelajaran" name="kategori_media_pembelajaran" style="font-size:12px;" placeholder="Masukkan Kategori Media" value="{{$kategori_media_pembelajaran->kategori_media_pembelajaran}}" required>
					</div>
				</div>

				<div class="form-group">
				<label for="kategori_media_pembelajaran" class="col-sm-2 control-label" >Media Pembelajaran</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="media_pembelajaran" name="media_pembelajaran" style="font-size:12px;" placeholder="Masukkan Media Pembelajaran" value="{{$kategori_media_pembelajaran->media_pembelajaran}}" required>
					</div>
				</div>

				<div class="form-group col-md-10">
				<div class="form-group col-md-1" style="float:right;">
					<button type="submit" class="btn btn-primary btn-md">
							Edit
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

