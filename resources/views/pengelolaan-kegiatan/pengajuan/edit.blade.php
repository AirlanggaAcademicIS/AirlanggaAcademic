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
      <form id="tambahPengajuan" method="post" action="{{url('/pengelolaan-kegiatan/pengajuan/'.$pengajuan->id.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">


 <!-- Main content -->
		<div class="box-body">
              <div class="form-group">
          <label for="nim" class="col-sm-2 control-label">Nama Kegiatan</label>
          <div class="col-md-7">
            <input type="text" class="form-control input-lg" id="nama_kegiatan" name="nama_kegiatan" placeholder="Masukkan Nama Kegiatan" value="{{$pengajuan->nama_kegiatan}}" required>
                </div>
        </div>
    
              <!-- textarea -->
                <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Latar Belakang</label>
          <div class="col-md-8">
            <textarea id="latar_belakang" name="latar_belakang" placeholder=" Masukkan Latar Belakang" required cols="82" rows="5">{{$pengajuan->latar_belakang}}
            </textarea>
          </div>
        </div>

              <!-- textarea -->
                <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Tujuan Kegiatan</label>
          <div class="col-md-8">
            <textarea id="tujuan_kegiatan" name="tujuan_kegiatan" placeholder=" Masukkan Tujuan Kegiatan" required cols="82" rows="5">{{$pengajuan->tujuan_kegiatan}}
            </textarea>
          </div>
        </div>

                <!-- textarea -->
                <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Mekanisme Kegiatan</label>
          <div class="col-md-8">
            <textarea id="mekanisme_kegiatan" name="mekanisme_kegiatan" placeholder=" Masukkan Mekanisme Kegiatan" required cols="82" rows="5">{{$pengajuan->mekanisme_kegiatan}}
            </textarea>
          </div>
        </div>

              <!-- Menampilkan tanggal dengan datepicker -->
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Tanggal Pengajuan</label>
          <div class="col-md-7">
            <input type="text" class="form-control input-lg" id="datepicker" name="tanggal_pengajuan" placeholder="Masukkan Tanggal" required>
          </div>
        </div>

              <!-- textarea -->
                <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Tempat Pengajuan</label>
          <div class="col-md-8">
            <textarea id="tempat_pengajuan" name="tempat_pengajuan" placeholder=" Masukkan Tempat Pengajuan" required cols="82" rows="5">{{$pengajuan->tempat_pengajuan}}
            </textarea>
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
    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();

  } );
  </script>




@endsection
