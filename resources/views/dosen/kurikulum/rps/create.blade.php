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
<div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Form Rencana Pembelajaran Semester</h3>
        </div>

      <div class="box-body">

<div class="form-group">
    <label>Mata Kuliah</label>
    <select name="nama_matkul" class="form-control select2" style="width: 100%;" required>
      <option value="">-- Kode Mata Kuliah - Nama Mata Kuliah --</option>
      @foreach ($mata_kuliah as $mk)
      {
        <option value="{{$mk->nama_matkul}}">{{$mk->kode_matkul}} - {{$mk->nama_matkul}} ({{$mk->sks}} SKS)</option>
      }
      @endforeach
    </select>
   </div>

<div class="form-group">
  <label for="prasyarat"><b>Prasyarat</b></label><br>     
  @foreach($mata_kuliah as $mk)
    <label class="checkbox-inline"><input type="checkbox" value="">{{$mk->nama_matkul}}</label>          
  @endforeach                                
</div>

<div class="form-group">
  <label for="cpl_prodi"><b>CPL Prodi</b></label><br>     
  @foreach($cpl_prodi as $cpl)
    <label class="checkbox-inline"><input type="checkbox" value="">{{$cpl->cpem['kode_cpem']}}
    @endforeach 
    </label>                               
</div>

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
  @foreach($media as $m)
    <label class="checkbox-inline"><input type="checkbox" value="">{{$m->media_pembelajaran}}</label>       
  @endforeach                                
</div>

<div class="form-group">
<p><b>Team Teaching</b></p>
<label for="nama-matkul">Koordinator Mata kuliah</label>
<!-- select -->
    <div class="form-group">
      <select class="form-control">
        @foreach($dosen as $d) 
      <option selected="selected">{{$d->nama_dosen}}</option>
  @endforeach
      </select>
    </div>

<div class="form-group">
<label for="nama-matkul">Anggota Team Teaching 1</label>
<!-- select -->
    <div class="form-group">
      <select class="form-control">
        @foreach($dosen as $d) 
      <option selected="selected">{{$d->nama_dosen}}</option>
  @endforeach
      </select>
    </div>


<div class="form-group">
<label for="nama-matkul">Anggota Team Teaching 2</label>
<!-- select -->
    <div class="form-group">
      <select class="form-control">
        @foreach($dosen as $d) 
      <option selected="selected">{{$d->nama_dosen}}</option>
  @endforeach
      </select>
    </div>


<div class="form-group">
<label for="nama-matkul">Anggota Team Teaching 3</label>
<!-- select -->
    <div class="form-group">
      <select class="form-control">
        @foreach($dosen as $d) 
      <option selected="selected">{{$d->nama_dosen}}</option>
  @endforeach
      </select>
    </div>

</div><br>
<button type="submit" class="btn btn-info pull-right">Tambah</button> 

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

