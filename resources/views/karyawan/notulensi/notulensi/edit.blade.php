@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Jenis Penilaian
@endsection

@section('contentheader_title')
Edit Jenis Penilaian
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
			<form id="tambahRuang" method="post" action="{{url('/notulensi/notulensi/'.$a->id_notulen.'/delete/')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Menampilkan input text biasa -->

				<!-- Menampilkan input text biasa -->
			<div class="form-group">
    <label for="id_notulen" class="col-sm-2 control-label">ID Notulen</label>
    <div class="col-sm-9">
      <input class="form-control" id="id_notulen" type="text" enable>
    </div>
  </div>
  <div class="form-group">
    <label for="permohonan_ruang_id" class="col-sm-2 control-label">ID Permohonan Ruang</label>
    <div class="col-sm-9">
      <input class="form-control" id="permohonan_ruang_id" type="text" enable>
    </div>
  </div>
  <div class="form-group">
    <label for="nip_petugas_id" class="col-sm-2 control-label">NIP Petugas</label>
    <div class="col-sm-9">
      <input class="form-control" id="nip_petugas_id" type="text" enable>
    </div>
  </div>
   <div class="form-group">
    <label for="nip_id" class="col-sm-2 control-label">NIP Karyawan</label>
    <div class="col-sm-9">
      <input class="form-control" id="nip_id" type="text" enable>
    </div>
  </div>
  <div class="form-group">
    <label for="id_verifikasi" class="col-sm-2 control-label">ID Verifikasi</label>
    <div class="col-sm-9">
      <input class="form-control" id="id_verifikasi" type="text" enable>
    </div>
  </div>
<div class="form-group">
    <label for="nama_rapat" class="col-sm-2 control-label">Nama Rapat</label>
    <div class="col-sm-9">
      <input class="form-control" id="nama_rapat" type="text" enable>
    </div>
  </div>
  <div class="form-group">
    <label for="agenda_rapat"class="col-sm-2 control-label">Agenda Rapat:</label>
    <div class="col-sm-9">
      <textarea class="form-control" rows="3" id="agenda_rapat" enable></textarea>
    </div>
  </div>
     <div class="form-group">
  <label for="hasil_pembahasan"class="col-sm-2 control-label">Hasil Rapat:</label>
  <div class="col-sm-9">
  <textarea class="form-control" rows="5" id="hasil_pembahasan" enable></textarea>
</div>
    </div>
    <div class="form-group">
  <label for="deskripsi_rapat"class="col-sm-2 control-label">Deskripsi Rapat:</label>
  <div class="col-sm-9">
  <textarea class="form-control" rows="5" id="deskripsi_rapat" enable></textarea>
</div>
    </div>
      <div class="form-group">
    <div class="col-sm-offset-10 col-sm-10">
      <button type="submit" class="btn btn-info">Confirm</button>
    </div>
  </div>
</div>

@endsection

@section('code-footer')
@endsection

