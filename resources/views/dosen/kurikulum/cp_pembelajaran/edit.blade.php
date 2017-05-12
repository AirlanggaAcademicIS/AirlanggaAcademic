@extends('adminlte::layouts.app')

@section('htmlheader_title')
Edit capaian pembelajaran
@endsection

@section('contentheader_title')
Edit capaian pembelajaran
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
      
      <form id="tambahCapaianPembelajaran" method="post" action="{{url('/dosen/kurikulum/cp_pembelajaran/'.$cp_pembelajaran->id_cp.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="prodi_id" class="col-sm-2 control-label">Id Prodi</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="id_prodi" name="prodi_id" placeholder="Masukkan id_prodi" value="{{$cp_pembelajaran->prodi_id}}" required>
          </div>
        </div>

        <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="kategori_cpem_id" class="col-sm-2 control-label">ID Kategori Capaian Pembelajaran</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="kategori_cpem_id" name="kategori_cpem_id" placeholder="Masukkan kategori capaian pembelajaran" value="{{$cp_pembelajaran->kategori_cpem_id}}" required>
          </div>
        </div>

        <!-- Menampilkan textarea -->
        <div class="form-group">
          <label for="kode_cpem" class="col-sm-2 control-label">Kode Capaian Pembelajaran</label>
          <div class="col-md-8">
            <textarea id="kode_cp" name="kode_cpem" placeholder=" Masukkan Kode Capaian Pembelajaran" required cols="82" rows="5" value="{{$cp_pembelajaran->kode_cpem}}" required>
            </textarea>
          </div>
        </div>

                <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="deskripsi_cpem" class="col-sm-2 control-label">Deskripsi Capaian Pembelajaran</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="deskripsi_cpem" name="deskripsi_cpem" placeholder="Masukkan kategori capaian pembelajaran" value="{{$cp_pembelajaran->deskripsi_cpem}}" required>
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