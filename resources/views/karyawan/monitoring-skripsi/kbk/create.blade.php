@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah KBK
@endsection

@section('contentheader_title')
Tambah KBK
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
			<form id="tambahKBK" method="post" action="{{url('/karyawan/monitoring-skripsi/KBK/create')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label for="id_kbk" class="col-sm-2 control-label">No. KBK :</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-md" id="id_kbk" name="id_kbk" placeholder="Masukkan id status" required>
					</div>
				</div>

				<div class="form-group">
					<label for="jenis_kbk" class="col-sm-2 control-label">Jenis KBK :</label>
					<div class="col-sm-8">
					<input type="text" class="form-control input-md" name="jenis_kbk" id="jenis_kbk" placeholder="Masukkan Jenis KBK">
					</div>
				</div>

				<!-- /.box-body -->
  				<br>
      			<button type="submit" class="btn btn-primary" style="margin-left: 500px;">Simpan</button>

			</form>
			<br>
				<a href="{{url('karyawan/monitoring-skripsi/KBK')}}">
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

@endsection

