@extends('adminlte::layouts.app')

@section('code-header')
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<link rel="stylesheet" href="{{ asset('/css/dropzone.css') }}">
@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Laporan Pelaksanaan
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Laporan Pelaksanaan
@endsection



@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->

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
      <form id="tambahLaporanPelaksanaan" method="post" action="{{url('/pengelolaan-kegiatan/laporan_pelaksanaan/create')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

 <!-- Main content -->


 <div class="box-body">
      <div class="form-group">
          <label for="nama_kegiatan" class="col-sm-2 control-label">Nama Kegiatan</label>
          <div class="col-md-7">
            <input type="text" class="form-control input-lg" id="nama_kegiatan" name="nama_kegiatan" placeholder="Masukkan Nama Kegiatan" required>
          </div>
        </div>

      <!-- Menampilkan tanggal dengan datepicker -->
        <div class="form-group">
          <label for="tanggal_pelaksanaan" class="col-sm-2 control-label">Tanggal Pelaksanaan</label>
          <div class="col-md-7">
            <input type="text" class="form-control input-lg" id="datepicker" name="tanggal_pelaksanaan" placeholder="Masukkan Tanggal" required>
          </div>
        </div>

       <!-- textarea -->
        <div class="form-group">
          <label for="tempat_pelaksanaan" class="col-sm-2 control-label">Tempat Pelaksanaan</label>
          <div class="col-md-8">
            <textarea id="tempat_pelaksanaan" name="tempat_pelaksanaan" placeholder=" Masukkan Tempat Pelaksanaan" required cols="82" rows="5">
            </textarea>
          </div>
        </div>
        
        <!-- number -->
        <div class="form-group">
          <label for="pelaksanaan_dana" class="col-sm-2 control-label">Dana Pelaksanaan</label>
          <div class="col-md-8">
            <input type="number" id="pelaksanaan_dana" name="pelaksanaan_dana" placeholder=" Masukkan Dana Pelaksanaan Kegiatan"  required>
          </div>
        </div>

       
               
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>


 
                
@endsection

@section('code-footer')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();

  } );
  </script>




@endsection

