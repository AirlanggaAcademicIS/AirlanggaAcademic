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

<div class="box box-info">
<div class="box-body">
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
      <form id="tambahCapaianPembelajaran" method="post" action="{{url('/dosen/kurikulum/capaian-pembelajaran/'.$cp_pembelajaran->id_cpem.'/edit')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <!-- Menampilkan input text biasa -->
<<<<<<< HEAD
          <div class="form-group">
            <label for="id_prodi" class="col-sm-6 control-label">Nama Prodi</label>
            <div class="col-md-3">
                <select name="prodi_id" class="form-control">
                  @foreach($prodis as $prodi)
                    <option @if ($prodi->id_prodi==$cp_pembelajaran->prodi_id) 
                    {{'selected'}}
                    @endif
                    value="{{$prodi->id_prodi}}">{{$prodi->nama_prodi}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <!-- Menampilkan input text biasa -->
            <div class="form-group">
              <label for="kategori_cpem_id" class="col-sm-6 control-label">Kategori Capaian Pembelajaran</label>
                <div class="col-md-3">
                  <select name="kategori_cpem_id" class="form-control">
                    @foreach($categories as $category)
                      <option @if ($category->id_kategori_cpem==$cp_pembelajaran->  kategori_cpem_id) 
                      {{'selected'}}
                      @endif
                      value="{{$category->id_kategori_cpem}}">{{$category->nama_cpem}}</option>
                    @endforeach
                  </select>
                </div>
            </div>

            <!-- Menampilkan textarea -->
            <div class="form-group">
              <label for="kode_cpem" class="col-sm-6 control-label">Kode Capaian Pembelajaran</label>
              <div class="col-md-3">
                <input type="text" class="form-control input-lg" id="kode_cpem" name="kode_cpem" placeholder="Masukkan kode" value="{{$cp_pembelajaran->kode_cpem}}" required>
              </div>
            </div>

                <!-- Menampilkan input text biasa -->
            <div class="form-group">
                <label for="deskripsi_cpem" class="col-sm-6 control-label">Deskripsi Capaian Pembelajaran</label>
                <div class="col-md-5">
                  <textarea id="deskripsi_cpem" name="deskripsi_cpem" placeholder=" Masukkan Deskripsi Capaian Pembelajaran" required cols="50" rows="4" required>{{$cp_pembelajaran->deskripsi_cpem}}</textarea>
                </div>
            </div>
            <div class="pull-right">
              <button type="submit" class="btn btn-primary btn-lg">
                Simpan
              </button>
            </div>
      </form>
=======
        <div class="form-group">
     <label for="id_prodi" class="col-sm-2 control-label">Nama Prodi</label>
     <div class="col-md-5">
          <select name="prodi_id" class="form-control">
              @foreach($prodis as $prodi)
                <option @if ($prodi->id_prodi==$cp_pembelajaran->prodi_id) 
                {{'selected'}}
                @endif
                value="{{$prodi->id_prodi}}">{{$prodi->nama_prodi}}</option>
              @endforeach
            </select>
        </div>
       </div>

        <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="kategori_cpem_id" class="col-sm-2 control-label">Kategori Capaian Pembelajaran</label>
          <div class="col-md-5">
          <select name="kategori_cpem_id" class="form-control">
              @foreach($categories as $category)
                <option @if ($category->id_kategori_cpem==$cp_pembelajaran->  kategori_cpem_id) 
                {{'selected'}}
                @endif
                value="{{$category->id_kategori_cpem}}">{{$category->nama_cpem}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <!-- Menampilkan textarea -->
        
        <div class="form-group">
          <label for="kode_cpem" class="col-sm-2 control-label">Kode Capaian Pembelajaran</label>
          <div class="col-md-5">
            <input type="text" class="form-control input-md" id="kode_cpem" name="kode_cpem" placeholder="Masukkan kode" value="{{$cp_pembelajaran->kode_cpem}}" required>
          </div>
        </div>

        <div class="form-group">
          <label for="deskripsi_cpem" class="col-sm-2 control-label">Deskripsi Capaian Pembelajaran</label>
          <div class="col-md-8">
            <textarea id="deskripsi_cpem" name="deskripsi_cpem" placeholder=" Masukkan Deskripsi Capaian Pembelajaran" required cols="123" rows="5" required> {{$cp_pembelajaran->deskripsi_cpem}}
            </textarea>
          </div>
        </div>

        <div class="box-footer clearfix">
        <button type="Edit" class="pull-right btn btn-info btn-sm" id="Edit">Edit
        </button>
      </div>
>>>>>>> 51d35c1ddb4c47bc69e19accb81cb22e04df7d5e
    </div>
  </div>       
</form>

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