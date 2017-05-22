@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Jenis Penilaian
@endsection

@section('contentheader_title')
Tambah Notulensi
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
      <form id="tambahNotulensi" method="post" action="{{url('/notulensi/notulensi/create')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!-- Menampilkan input text biasa -->

  <div class="form-group">

         <label class="col-sm-2 control-label"
         for="permohonan_ruang_id">Ruangan</label>
         <div class="col-sm-9">
        <select class="form-control" id="permohonan_ruang_id">
    <option></option>
    <option></option>
   
           </select>
            </div>
    <!-- <label for="permohonan_ruang_id" class="col-sm-2 control-label">ID Permohonan Ruang</label>
    <div class="col-sm-9">
      <input class="form-control" id="permohonan_ruang_id" type="text" enable> -->
    </div>
 
   <div class="form-group">
    <label for="nip_id" class="col-sm-2 control-label">Ketua Rapat</label>
    <div class="col-sm-9">
    <select class="form-control" id="permohonan_ruang_id">
    <option></option>
    <option></option>
   </select>
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>
@endsection

