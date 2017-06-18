@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Hasil Rapat
@endsection

@section('contentheader_title')
Tambah Hasil Rapat
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<link rel="stylesheet" href="{{ asset('/css/dropzone.css') }}">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
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
      <form id="createNotulensi" method="post" action="{{url('notulensi/'.$notulensi->id_notulen.'/create/')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!-- Menampilkan input text biasa -->

        <!-- Menampilkan input text biasa -->
        
     <!--  <div class="form-group">
    <label for="id_notulen" class="col-sm-2 control-label">ID Notulen</label>
    <div class="col-sm-9">
      <input type="text" class="form-control input-lg" name="id_notulen" name="id_notulen"  value="{{$notulensi->id_notulen}}" disabled>
    </div>
  </div> -->
  <div class="form-group">
    <label for="nama_rapat" class="col-sm-2 control-label">Nama Rapat</label>
    <div class="col-sm-9">
      <input type="text" class="form-control input-lg" name="nama_rapat" name="nama_rapat"  value="{{$notulensi->nama_rapat}}" required>
    </div>
    </div>
  <div class="form-group">
    <label for="nama_ruang" class="col-sm-2 control-label">Ruangan</label>
    <div class="col-sm-9">
 @foreach($notulensi2 as $a)
      <input type="text" class="form-control input-lg" name="nama_ruang" name="nama_ruang"  value="{{$a->nama_ruang}}" disabled>
      @endforeach
    </div>
  </div>
 <div class="form-group">
      <label class="control-label col-sm-2" for="waktu_pelaksanaan" >Tanggal Rapat :</label>
        <div class="col-sm-9">
        <input type="text" id="waktu_pelaksanaan"  placeholder="dd-mm-yyyy" class="form-control"
        value="{{$notulensi->waktu_pelaksanaan}}" disabled>
        </div>
    </div>
  
 <div class="form-group">
    <label for="nip_id" class="col-sm-2 control-label">Ketua Rapat</label>
    <div class="col-sm-9">
    <select class="form-control" name="nip_id" required="">
    <option> </option>
    @foreach($dosen as $i => $m)
    <option value="{{$m->nip}}">{{$m->nama_dosen}}</option>
      @endforeach
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
    <label for="agenda_rapat"class="col-sm-2 control-label">Agenda Rapat:</label>
    <div class="col-sm-9">
      <textarea class="form-control" rows="5" name="agenda_rapat" name="agenda_rapat" required>{{$notulensi->agenda_rapat}}</textarea>
    </div>



  </div>
     <div class="form-group">
  <label for="hasil_pembahasan"class="col-sm-2 control-label">Hasil Rapat:</label>
  <div class="col-sm-9">
  <textarea class="form-control" rows="5" name="hasil_pembahasan" name="hasil_pembahasan" required>{{$notulensi->hasil_pembahasan}}</textarea>
</div>
    </div>
     <div class="form-group">
  <label for="deskripsi_rapat"class="col-sm-2 control-label">Deskripsi Rapat:</label>
  <div class="col-sm-9">
  <textarea class="form-control" rows="5" name="deskripsi_rapat" required>{{$notulensi->deskripsi_rapat}}</textarea>
</div>
    </div>
   <!--  <div class="form-group">
  <label for="deskripsi_rapat"class="col-sm-2 control-label">Deskripsi Rapat:</label>
  <div class="col-sm-9">
  <input type="text" class="form-control input-lg" id="deskripsi_rapat" name="deskripsi_rapat" value="{{$notulensi->deskripsi_rapat}}" enable>
</div>
    </div> -->
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
    var date = $( "#waktu_pelaksanaan" ).datepicker({dateFormat: 'yy-mm-dd'}).val();
  } );
  </script>
@endsection

