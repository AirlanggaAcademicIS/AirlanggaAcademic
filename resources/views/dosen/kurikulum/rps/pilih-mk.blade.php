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

<form id="pilihMatkul" method="post" class="form-horizontal">
  <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

  <div class="box-header with-border">
    <h3 class="box-title">Pilih Mata Kuliah</h3>
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

<div class="box-body">
  <button type="submit" class="btn btn-primary pull-right">Tambah RPS Per Minggu</button>
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

