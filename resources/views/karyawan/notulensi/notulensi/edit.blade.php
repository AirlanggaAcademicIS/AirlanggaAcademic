@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit Notulensi
@endsection

@section('contentheader_title')
Edit Notulensi
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
      <form id="editNotulensi" method="post" action="{{url('/notulensi/notulensi/'.$notulensi->id_notulen.'/edit/')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!-- Menampilkan input text biasa -->

        <!-- Menampilkan input text biasa -->
        
      <div class="form-group">
    <label for="id_notulen" class="col-sm-2 control-label">ID Notulen</label>
    <div class="col-sm-9">
      <input type="text" class="form-control input-lg" id="id_notulen" name="id_notulen"  value="{{$notulensi->id_notulen}}" disabled>
    </div>
  </div>
  <div class="form-group">
    <label for="nama_ruang" class="col-sm-2 control-label">Ruangan</label>
    <div class="col-sm-9">
      <input type="text" class="form-control input-lg" id="nama_ruang" name="nama_ruang"  value="{{$notulensi->nama_ruang}}" disabled>
    </div>
  </div>
  <div class="form-group">
    <label for="nip_petugas_id" class="col-sm-2 control-label">NIP Petugas</label>
    <div class="col-sm-9">
     <input type="text" class="form-control input-lg" id="nip_petugas_id" name="nip_petugas_id"  value="{{$notulensi->nip_petugas_id}}" disabled>
    </div>
  </div>
   <div class="form-group">
   <label for="nip_id" class="col-sm-2 control-label">Ketua Rapat</label>
    <div class="col-sm-9">
    <select class="form-control" id="permohonan_ruang_id">
    <label for="nip_id" class="col-sm-2 control-label">Ketua Rapat</label>
    <div class="col-sm-9">
      <select class="form-control" id="permohonan_ruang_id">
    <option></option>
    <option></option>
   </select>
    </div>
  </div>
  <!-- <div class="form-group">
    <label for="id_verifikasi" class="col-sm-2 control-label">Status Verifikasi</label>
    <div class="col-sm-9">
       
      @if($notulensi->id_verifikasi==0)
      {{'Belum Terferivikasi'}}
      @else
      {{'Sudah Diferivikasi'}}
      @endif
    </div>
  </div> -->
<div class="form-group">
    <label for="nama_rapat" class="col-sm-2 control-label">Nama Rapat</label>
    <div class="col-sm-9">
      <input type="text" class="form-control input-lg" id="nama_rapat" name="nama_rapat"  value="{{$notulensi->nama_rapat}}" enable>
    </div>
    </div>

  <div class="form-group">
    <label for="agenda_rapat"class="col-sm-2 control-label">Agenda Rapat:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control input-lg" id="agenda_rapat" name="agenda_rapat"  value="{{$notulensi->agenda_rapat}}" enable>
    </div>
  </div>
     <div class="form-group">
  <label for="hasil_pembahasan"class="col-sm-2 control-label">Hasil Rapat:</label>
  <div class="col-sm-9">
  <input type="text" class="form-control input-lg" id="hasil_pembahasan" name="hasil_pembahasan" value="{{$notulensi->hasil_pembahasan}}" enable>
</div>
    </div>
    <div class="form-group">
  <label for="deskripsi_rapat"class="col-sm-2 control-label">Deskripsi Rapat:</label>
  <div class="col-sm-9">
  <input type="text" class="form-control input-lg" id="deskripsi_rapat" name="deskripsi_rapat" value="{{$notulensi->deskripsi_rapat}}" enable>
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

