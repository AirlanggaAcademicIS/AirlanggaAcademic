@extends('adminlte::layouts.app')

@section('code-header')
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<link rel="stylesheet" href="{{ asset('/css/dropzone.css') }}">

@endsection

@section('htmlheader_title')
Pengajuan Proposal Kegiatan Akademik
@endsection

@section('contentheader_title')
Pengajuan Proposal Kegiatan Akademik
@endsection



@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>

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
      <form id="tambahPengajuan" method="post" action="{{url('mahasiswa/pengelolaan-kegiatan/pengajuan/create')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

 <!-- Main content -->


              <!-- textarea -->
                <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama Kegiatan</label>
          <div class="col-md-8">
            <textarea id="nama" name="nama" placeholder=" Masukkan Nama" required cols="82" rows="2">
            </textarea>
          </div>
        </div>


              <!-- textarea -->
                <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Latar Belakang</label>
          <div class="col-md-8">
            <textarea id="history" name="history" placeholder=" Masukkan Latar Belakang" required cols="82" rows="5">
            </textarea>
          </div>
        </div>

                <!-- textarea -->
                <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Tujuan Kegiatan</label>
          <div class="col-md-8">
            <textarea id="tujuan" name="tujuan" placeholder="Masukkan Tujuan Kegiatan" required cols="82" rows="5">
            </textarea>
          </div>
        </div>

        <!-- textarea -->
                <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Mekanisme Kegiatan</label>
          <div class="col-md-8">
            <textarea id="mekanisme" name="mekanisme" placeholder=" Masukkan Mekanisme Kegiatan" required cols="82" rows="5">
            </textarea>
          </div>
        </div>

              <!-- Menampilkan tanggal dengan datepicker -->
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Tanggal Pengajuan</label>
          <div class="col-md-7">
            <input type="text" class="form-control input-lg" id="datepicker" name="tglpengajuan" placeholder="Masukkan Tanggal" required>
          </div>
        </div>

        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Ruang Pengajuan</label>
          <div class="col-md-7">
            <input type="text" class="form-control input-lg" id="rpengajuan" name="rpengajuan" placeholder="Masukkan Ruang Pengajuan" required>
          </div>
        </div>


        <div class="form-group">
                  <label for="exampleInputFile">Poster</label>
                  <input type="file" id="gambar" name="url_poster">
                </div>
               
                <button type="submit" class="btn btn-primary">Next</button>

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
    var date2 = $('#datepicker2').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );


    var elBrowse  = document.getElementById("gambar");
  elBrowse.addEventListener("change", function() {
    var files  = this.files;
    var errors = "";
    if (!files) {
      errors += "File upload not supported by your browser.";
    }
    if (files && files[0]) 
    {
      for(var i=0; i<files.length; i++) 
      {
        var file = files[i];
        if ( (/\.(png|jpeg|jpg|gif)$/i).test(file.name) ) 
        {
          readImage( file ); 
        } 
        else 
        {
          errors += file.name +" is unsupported Image extension\n";
          document.getElementById("gambar").value = null;  
        }
      }
    }
    if (errors) {
      alert(errors); 
    }
  });

  </script>




@endsection

