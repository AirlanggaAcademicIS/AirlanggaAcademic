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
			<form id="suratkeluar" method="post" action="{{url('dosen/surat-keluar-dosen/'.$surat_keluar_dosen->id_surat_keluar.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->

				<!--<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">NIP Petugas</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nip_petugas_id" name="nip_petugas_id" value="{{$surat_keluar_dosen->nip_petugas_id}}" placeholder="Masukkan NIP Petugas" required>
					</div>
				</div>-->

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Perihal Surat</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama" name="nama" value="{{$surat_keluar_dosen->nama}}" placeholder="Perihal Surat" required>
					</div>
				</div>

<!--
				<!-- Menampilkan dropdown -->
				 <!--<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Status</label>
					<div class="col-md-8">
						<select name="status" required>
							<option value="0">Belum Selesai</option>
							<option value="1">Sudah Selesai</option>						
						</select>
					</div>
				</div>-->
				
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

