@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Rapat
@endsection

@section('contentheader_title')
Tambah Rapat
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
      <form id="tambahNotulensi" method="post" action="{{url('tambahrapat')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!-- Menampilkan input text biasa -->


  <div class="form-group">

         <label class="col-sm-2 control-label"
         for="permohonan_ruang_id">Ruangan</label>
         <div class="col-sm-9">
        <select class="form-control" name="permohonan_ruang_id" required>
    <option>Pilih Ruang</option>
     @foreach($ruang as $i => $m)
    <option value="{{$m->id_ruang}}" required>{{$m->nama_ruang }}</option>
      @endforeach
           </select>
            </div>
    </div>
    <!-- <l
    abel for="permohonan_ruang_id" class="col-sm-2 control-label">ID Permohonan Ruang</label>
    <div class="col-sm-9">
      <input class="form-control" id="permohonan_ruang_id" type="text" enable> -->
    

    <div class="form-group">
      <label class="control-label col-sm-2" for="waktu_pelaksanaan" >Tanggal Rapat </label>
        <div class="col-sm-9">
        <input type="text" id="waktu_pelaksanaan" name="waktu_pelaksanaan"  required>
        </div>
    </div>

  
<div class="form-group">
    <label for="nama_rapat" class="col-sm-2 control-label">Nama Rapat</label>
    <div class="col-sm-9">
      <input class="form-control" name="nama_rapat" type="text" required>
    </div>
  </div>

  <div class="form-group">
    <label for="agenda_rapat"class="col-sm-2 control-label">Agenda Rapat:</label>
    <div class="col-sm-9">
      <textarea class="form-control" name="agenda_rapat" rows="3" id="agenda_rapat" required></textarea>
    </div>
  </div>
  
      <div class="form-group">
    <div class="col-sm-offset-10 col-sm-10">
      <button type="submit" class="btn btn-info">Confirm</button>
    </div>
  </div>


</form>
</div>
        
        
@endsection

@section('code-footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>

// $( function() {
//     var date = $('#datepicker').datepicker({ dateFormat: 'yyyy/mm/dd' }).val();

//   } );


$( function() {
    var date = $( "#waktu_pelaksanaan" ).datepicker({dateFormat: 'yy-mm-dd'}).val();
  } );
  </script>
@endsection


