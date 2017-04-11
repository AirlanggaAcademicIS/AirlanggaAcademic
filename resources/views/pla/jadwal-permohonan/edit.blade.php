@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Jadwal Permohonan
@endsection

@section('contentheader_title')
Edit Jadwal Permohonan
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
			<form id="tambahJadwalPermohonan" method="post" action="{{url('/pla/jadwal-permohonan/'.$jadwalpermohonan->id.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="id_permohonan_ruang" class="col-sm-2 control-label">ID Permohonan Ruang</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_permohonan_ruang" name="id_permohonan_ruang" value="{{$jadwalpermohonan->id_permohonan_ruang}}" placeholder="Masukkan ID Permohonan Ruang" required>
					</div>
				</div>

				<div class="form-group">
					<label for="id_ruang" class="col-sm-2 control-label">ID Ruang</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_ruang" name="id_ruang" value="{{$jadwalpermohonan->id_ruang}}" placeholder="Masukkan ID Ruang" required>
					</div>
				</div>

				<!-- Menampilkan dropdown -->
				<div class="form-group">
					<label for="id_hari" class="col-sm-2 control-label">ID Hari</label>
					<div class="col-md-8">
						<select name="id_hari" required>
							<option value="1">Senin</option>
							<option value="2">Selasa</option>
							<option value="3">Rabu</option>
							<option value="4">Kamis</option>
							<option value="5">Jumat</option>
							<option value="6">Sabtu</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="id_jam" class="col-sm-2 control-label">ID Jam</label>
					<div class="col-md-8">
						<select name="id_jam" required>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
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

