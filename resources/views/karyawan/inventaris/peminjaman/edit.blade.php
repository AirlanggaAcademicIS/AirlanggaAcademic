@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Biodata
@endsection

@section('contentheader_title')
Edit Biodata
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
			<form id="tambahBiodata" method="post" action="{{url('/inventaris/'.$peminjaman->id_peminjaman.'/post-edit-peminjaman')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">


				<div class="form-group">
					<label for="nim" class="col-sm-2 control-label">ID Asset</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_asset" name="id_asset" placeholder="Masukkan ID Asset" value="{{$peminjaman->asset_id}}" required>
					</div>
				</div>

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Peminjam</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nim_nip_peminjam" name="nim_nip_peminjam" placeholder="Masukkan Nama" value="{{$peminjaman->nim_nip_peminjam}}" required>
					</div>
				</div>

				<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Asset yang dipinjam</label>
					<div class="col-md-8">
						<textarea id="asset_yang_dipinjam" name="asset_yang_dipinjam" placeholder=" Masukkan Alamat" required cols="82" rows="5">{{$peminjaman->asset_yang_dipinjam}}
						</textarea>
					</div>
				</div>


				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Checkin Date</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="checkin_date" value="{{$peminjaman->checkin_date}}" placeholder="Masukkan Tanggal" >
					</div>
				</div>

				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Checkout Date</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="checkout_date" placeholder="Masukkan Tanggal" value="{{$peminjaman->checkout_date}}" required>
					</div>
				</div>


				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Expected Checkin Date</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="expected_checkin_date" placeholder="Masukkan Tanggal" value="{{$peminjaman->expected_checkin_date}}" required>
					</div>
				</div>

				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Waktu Pinjam</label>
					<div class="col-md-8">
						<input type="text" value="{{ $peminjaman->waktu_pinjam }}" class="form-control input-lg" id="datepicker" name="waktu_pinjam" placeholder="Masukkan Tanggal" required>
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

