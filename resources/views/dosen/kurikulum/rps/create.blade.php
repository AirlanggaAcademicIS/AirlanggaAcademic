@extends('adminlte::layouts.app')

@section('htmlheader_title')
Rencana Pembelajaran Semester
@endsection

@section('contentheader_title')
Rencana Pembelajaran Semester
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
<div class="box box-danger">
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

<form id="tambahRPS" method="post" action="{{url('dosen/kurikulum/rps/create')}}" enctype="multipart/form-data"  class="form-horizontal">
  <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

  <div class="box-header with-border">
    <h3 class="box-title">Form Rencana Pembelajaran Semester</h3>
  </div>

<div class="col-md-12">
  <div class="form-group box-header">
    <label>Mata Kuliah</label>
      <select id="selectMatkul" name="matkul" class="form-control select2" style="width: 100%;" required>
        <option value="">-- Kode Mata Kuliah - Nama Mata Kuliah --</option>
        @foreach ($mata_kuliah as $mk)
        {
          <option value="{{$mk->id_mk}}">{{$mk->kode_matkul}} - {{$mk->nama_matkul}} ({{$mk->sks}} SKS)</option>
        }
        @endforeach
      </select>
   </div>

<div class="form-group box-header">
  <label for="prasyarat"><b>Mata Kuliah Prasyarat</b></label><br>     
    @foreach($matkul as $mk)
      <label class="checkbox-inline"><input type="checkbox" value="{{$mk->id_mk}}" name="mk_syarat_id[]"> {{$mk->nama_matkul}}  </label> 
    @endforeach                                
</div>

<div class="form-group box-header ">
  <label for="cpl"><b>CPL Prodi</b></label><br>     
    @foreach($cpl as $cpl)
      <label class="checkbox-inline"><input type="checkbox" value="{{$cpl->id_cpem}}" name="cpem_id[]"> {{$cpl->kode_cpem}}  </label>
    @endforeach 
  </label>                               
</div>

<div class="form-group box-header">
  <label for="deskripsi_matkul"><b>Deskripsi Singkat Mata Kuliah</b></label>
    <textarea class="form-control" rows="3" placeholder="Masukkan deskripsi singkat tentang mata kuliah" name="deskripsi_matkul"></textarea>
</div>

<div class="form-group box-header">
  <label for="pokok_pembahasan"><b>Pokok Pembahasan</b></label>
    <textarea class="form-control" rows="3" placeholder="Masukkan pokok pembahasan mata kuliah" name="pokok_pembahasan"></textarea><br>
</div>

<div class="form-group box-header">
  <p><b>Pustaka</b></p>
    <label for="pustaka_utama">Pustaka Utama</label>
      <textarea class="form-control" rows="3" placeholder="Masukkan pustaka utama" name="pustaka_utama"></textarea>
</div>
 
<div class="form-group box-header">
  <label for="pustaka_pendukung">Pustaka Pendukung</label>
    <textarea class="form-control" rows="3" placeholder="Masukkan pustaka pendukung" name="pustaka_pendukung"></textarea><br>
</div>
  
<div class="form-group box-header">
  <p><b>Team Teaching</b></p>
    <label for="koor_mk">Koordinator Mata kuliah</label>
      <select name="koor_mk" class="form-control" required>
        <option value="">Pilih Dosen</option>
          @foreach($dosen as $d)
            <option value="{{$d->nip}}">{{$d->nama_dosen}}</option>
          @endforeach
      </select>
</div>

<div class="form-group box-header">
  <label for="koor_mk1">Anggota Team Teaching 1</label>
    <select name="koor_mk1" class="form-control" required>
      <option value="">Pilih Dosen</option>
      @foreach($dosen as $d) 
        <option value="{{$d->nip}}">{{$d->nama_dosen}}</option>
      @endforeach
    </select>
</div>

<div class="form-group box-header">
  <label for="koor_mk2">Anggota Team Teaching 2</label>
    <select name="koor_mk2" class="form-control">
      <option value="">Pilih Dosen</option>
        @foreach($dosen as $d) 
          <option value="{{$d->nip}}">{{$d->nama_dosen}}</option>
        @endforeach
    </select>
</div>

<div class="form-group box-header">
  <label for="koor_mk3">Anggota Team Teaching 3</label>
    <select name="koor_mk3" class="form-control">
      <option value="">Pilih Dosen</option>
        @foreach($dosen as $d) 
          <option value="{{$d->nip}}">{{$d->nama_dosen}}</option>
        @endforeach
    </select>
</div>
<br>

<div class="col-md-12 box-body">
  <button type="submit" class="btn btn-primary pull-right">Selanjutnya</button> 
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
<script type="text/javascript">
@endsection

