@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Fitur 
@endsection

@section('contentheader_title')
Fitur
@endsection

@section('main-content')
<form class="form-horizontal">
  <br>
  <div class="box-body">
    <div class="form-group">
      <label for="nama" class="col-sm-2">Nama Mahasiswa:</label>

      <div class="col-sm-10">
        <input type="nama" class="form-control" id="nama" disabled placeholder="Regina Devi Loanita Lapian">
      </div>
    </div>
    <div class="form-group">
      <label for="nim" class="col-sm-2">NIM:</label>

      <div class="col-sm-10">
        <input type="nim" class="form-control" id="nim" disabled placeholder="081411633005">
      </div>
    </div>
    <div class="form-group">
      <label for="kbk" class="col-sm-2">KBK:</label>
      <div class="col-sm-10">
        <input type="text" id="kbk" class="form-control" value="Information System Engineering" disabled>
        
      </div>
    </div>
    <div class="form-group">
      <label for="topik" class="col-sm-2">Topik:</label>

      <div class="col-sm-10">
        <input type="topik" class="form-control" id="topik" value="Penelitian Dosen" disabled>
      </div>
    </div>
    <div class="form-group">
      <label for="judul" class="col-sm-2">Judul:</label>

      <div class="col-sm-10">
        <input type="judul" class="form-control" id="judul" value="Analisis Sistem Keamanan Jaringan Hot-Spot" disabled>
      </div>
    </div>
    <div class="form-group">
      <label for="dospem1" class="col-sm-2">Dosen Pembimbing 1:</label>
      <div class="col-sm-10">
        <input type="text" id="dospem1" class="form-control" value="Dosen 3" disabled>
        
      </div>
    </div>
    <div class="form-group">
      <label for="dospem2" class="col-sm-2">Dosen Pembimbing 2:</label>
      <div class="col-sm-10">
        <input type="text" id="dospem2" class="form-control" value="Dosen 2" disabled>
        
      </div>
    </div>

   

  </div>
      
</form>

@endsection

@section('code-footer')




@endsection