@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Silabus
@endsection

@section('contentheader_title')
Tambah Silabus
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<link rel="stylesheet" href="{{ asset('/css/dropzone.css') }}">

@endsection

@section('main-content')

<form role="form">
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah Silabus</h3>
    </div>

  <div class="box-body">

    <div class="form-group">
      <label>Nama Mata Kuliah</label>
      <select class="form-control select2" style="width: 100%;">
      @foreach ($mata_kuliah as $mk)
      {
      <option></option>
         <option value="{{$mk->nama_matkul}}">{{$mk->nama_matkul}}</option>
          }
         @endforeach
      </select>
  </div>

  <div class="form-group">
      <label>Kode Mata Kuliah</label>
      <select class="form-control select2" style="width: 100%;">
      @foreach ($mata_kuliah as $mk)
      {
      <option></option>
         <option value="{{$mk->kode_matkul}}">{{$mk->kode_matkul}}</option>
          }
         @endforeach
      </select>
  </div>

    <div class="form-group">
    <label for="sks"><b>Beban Studi</b></label>
    <input type="text" class="form-control" id="sks" name="sks" placeholder="Masukkan beban studi" value="">
    </div>

    <div class="form-group">
        <label for="prasyarat"><b>Prasyarat</b></label><br>     
        <input type="text" value=" " data-role="tagsinput">                    
    </div>

    <div class="form-group">
        <label for="capaian_pembelajaran"><b>Capaian Pembelajaran yang dibebankan pada mata kuliah ini</b></label>
        <textarea class="form-control" id="" name="sks" rows="4" placeholder="Masukan Capaian Pembelajaran">
        </textarea>
    </div>

    <div class="form-group">
        <label for="dekripsi-matkul"><b>Deskripsi Mata Kuliah/Silabus</b></label>
        <textarea class="form-control" rows="4" placeholder="Masukan Deskripsi Mata Kuliah">
        </textarea>
    </div>
    <div class="form-group">
        <label for="softskill"><b>Atribut Softskill</b></label><br>    
        <input type="text" value=" " data-role="tagsinput">                    
    </div>
    <div class="form-group">
        <label for="metode-pembelajaran"><b>Metode Pembelajaran</b></label><br>     
        <input type="text" value=" " data-role="tagsinput">                    
    </div>
    <div class="form-group">
        <label for="media-pembelajaran"><b>Media Pembelajaran</b></label><br>    
        <input type="text" value=" " data-role="tagsinput">                    
    </div>
    <div class="form-group">
        <label for="penilaian"><b>Penilaian Hasil Belajar</b></label>    
        <textarea class="form-control" rows="4" placeholder="Masukan Penilaian Hasil Belajar">
        </textarea>
    </div>
    <div class="form-group">
      <label>Dosen</label>
      <select class="form-control select2" style="width: 100%;">
        <option selected="selected">Tim Pengajar</option>
      </select>
  </div>
  <div class="form-group">
        <label for="referensi"><b>Referensi Wajib</b></label>
        <textarea class="form-control" rows="4">
        </textarea>
    </div>

  <!-- /.box-body -->

  <div class="box-footer clearfix">
      <button type="tambah" class="pull-right btn btn-info btn-sm" id="tambah">Tambah
      </button>
    </div>

</form>
</div>       

    <!-- /.box -->
    
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

