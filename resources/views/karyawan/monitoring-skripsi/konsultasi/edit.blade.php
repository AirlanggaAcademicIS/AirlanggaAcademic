@extends('adminlte::layouts.app')

@section('htmlheader_title')
Riwayat Konsultasi
@endsection

@section('contentheader_title')
Riwayat Konsultasi
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
			<form id="tambahKonsultasi" method="post" action="{{url('/karyawan/monitoring-skripsi/konsultasi/'.$mhs->id_skripsi.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label for="nim" class="col-sm-2 control-label">NIM</label>
					<div class="col-md-8">
						<input value="{{$mhs->nim_id}}" type="text" class="form-control input-lg" id="skripsi_id" name="skripsi_id" placeholder="Masukkan id skripsi" readonly>
					</div>
				</div>
				<div class="form-group">
					<label for="nim" class="col-sm-2 control-label">Nama</label>
					<div class="col-md-8">
						<input value="{{$mhs->nama_mhs}}" type="text" class="form-control input-lg" id="skripsi_id" name="skripsi_id" placeholder="Masukkan id skripsi" readonly>
					</div>
				</div>

				<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Tanggal Konsultasi</th>      
      <th style="text-align:center">Catatan Konsultasi</th>
    </tr>
    </thead>
  <tbody>
   @forelse($konsultasi as $i => $konsul) 
    <tr>
      <td width="5%">{{ $i+1 }}</td>
      <td width="15%" style="text-align:center">{{$konsul->tgl_konsul}}</td>
      <td width="20%" style="text-align:center">{{$konsul->catatan_konsul}}</td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada Konsultasi</center></td>
        </tr>
    @endforelse
  </tbody>
</table>

	<div class="form-group text-center">
					<div class="col-md-8 col-md-offset-2">
					<button type="submit" formmethod="get" class="btn btn-danger btn-lg" formaction="{{url('karyawan/monitoring-skripsi/konsultasi')}}">
				Back
			</button>
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