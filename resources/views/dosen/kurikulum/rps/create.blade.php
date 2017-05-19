@extends('adminlte::layouts.app')

@section('htmlheader_title')
Tambah Kategori Media Pembelajaran
@endsection

@section('contentheader_title')
Tambah Kategori Media Pembelajaran
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
<form role="form">
<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Form Rencana Pembelajaran Semester</h3>
        </div>

      <div class="box-body">

<div class="form-group">
<p><b>Mata Kuliah</b></p>
    <div class="form-group">
      <select class="form-control" id="kode_matkul" name="kode_matkul">
      @foreach ($mata_kuliah as $mk) 
          {
      <option value="{{$mk->kode_matkul}}">{{$mk->nama_matkul}}</option>
       }
          @endforeach
          </select>
    </div>
</div><br>

<div class="form-group">
<p><b>Kode Mata Kuliah</b></p>
    <div class="form-group">
      <input class="form-control" value="{{$mk->kode_matkul}}" >
    </div>
</div><br>

<div class="form-group">
    <label for="nama-matkul">Mata Kuliah Prasyarat</label>
    </div>
    <div class="form-group">
    <input class="form-control" value="" data-role="tagsinput">
    </div><br>

<div class="form-group">
<p><b>SKS</b></p>
    <div class="form-group">
      <input class="form-control" value="{{$mk->sks}}" disabled="">
    </div>
</div><br>

<div class="form-group">
<p><b>Capaian Pembelajaran</b></p>
</div>

<div class="form-group">
    <label for="nama-matkul">CPL Prodi</label>
    </div>
    <div class="form-group">
    <input class="form-control" value="" data-role="tagsinput">
    </div>
      
<div class="form-group">
    <label for="nama-matkul">CP MK</label>
    </div>
    <div class="form-group">
    <input class="form-control" value="" data-role="tagsinput">
    </div><br>

<div class="form-group">
<label for="deskripsi-mk"><b>Deskripsi Singkat Mata Kuliah</b></label>
<textarea class="form-control" rows="3" placeholder=""></textarea>
</div><br>

<div class="form-group">
<label for="deskripsi-mk"><b>Pokok Pembahasan</b></label>
<textarea class="form-control" rows="3" placeholder=""></textarea><br>
</div>

<div class="form-group">
  <label for="deskripsi-mk"><b>Pustaka</b></label>
  <div class="form-group">
<label for="deskripsi-mk">Pustaka Utama</label>
<textarea class="form-control" rows="3" placeholder=""></textarea>
</div>
 <div class="form-group">
<label for="deskripsi-mk">Pustaka Pendukung</label>
<textarea class="form-control" rows="3" placeholder=""></textarea><br>
</div>
  </div>
  
  <div class="form-group">
<p><b>Media Pembelajaran</b></p>
</div>

    <div class="form-group">
    <label for="nama-matkul">Perangkat Lunak</label>
    </div>
    <div class="form-group">
    <input class="form-control" value="" data-role="tagsinput">
    </div>

     <div class="form-group">
    <label for="nama-matkul">Perangkat Keras</label>
    </div>
    <div class="form-group">
    <input class="form-control" value="" data-role="tagsinput">
    </div><br>

<div class="form-group">
<p><b>Team Teaching</b></p>
<label for="nama-matkul">Koordinator Mata kuliah</label>
<!-- select -->
    <div class="form-group">
      <select class="form-control">
      <option></option>
        <option>Nama Dosen 1</option>
      </select>
    </div>
</div>

<div class="form-group">
<label for="nama-matkul">Anggota Team Teaching 1</label>
<!-- select -->
    <div class="form-group">
      <select class="form-control">
      <option></option>
        <option>Nama Dosen 1</option>
        <option>Nama Dosen 2</option>
        <option>Nama Dosen 3</option>
        <option>Nama Dosen 4</option>
        <option>Nama Dosen 5</option>
      </select>
    </div>
</div>

<div class="form-group">
<label for="nama-matkul">Anggota Team Teaching 2</label>
<!-- select -->
    <div class="form-group">
      <select class="form-control">
      <option></option>
        <option>Nama Dosen 1</option>
        <option>Nama Dosen 2</option>
        <option>Nama Dosen 3</option>
        <option>Nama Dosen 4</option>
        <option>Nama Dosen 5</option>
      </select>
    </div>
</div>

<div class="form-group">
<label for="nama-matkul">Anggota Team Teaching 3</label>
<!-- select -->
    <div class="form-group">
      <select class="form-control">
      	<option></option>
        <option>Nama Dosen 1</option>
        <option>Nama Dosen 2</option>
        <option>Nama Dosen 3</option>
        <option>Nama Dosen 4</option>
        <option>Nama Dosen 5</option>
      </select>
    </div>
</div><br>
<button type="submit" class="btn btn-info pull-right">Tambah</button> 

</div>

</form>
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

