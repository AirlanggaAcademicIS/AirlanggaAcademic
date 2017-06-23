
@extends('adminlte::layouts.app')

@section('htmlheader_title')
Rencana Pembelajaran Semester
@endsection

@section('contentheader_title')
Rencana Pembelajaran Semester
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

  <form id="tambahRPS" method="post" action="{{url('dosen/kurikulum/rps/lanjutan-rps/'.$mata_kuliah->id_mk)}}" enctype="multipart/form-data"  class="form-horizontal">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">       
  
    <div class="box-header with-border">
      <h3 class="box-title">Input RPS Lanjutan</h3>
    </div>

    <div class="col-md-12">
      <div class="form-group box-header">
        <label><b>Mata Kuliah</b></label>
          <input class="form-control" id="matkul" name="matkul" disabled="" value="{{$mata_kuliah->kode_matkul}}  - {{$mata_kuliah->nama_matkul}} - ({{$mata_kuliah->sks}} SKS)">
      </div>

    <div class="form-group box-header">
        <label for="minggu"><b>Minggu Ke-</b></label>
          <select id="minggu" name="minggu" class="form-control" style="width:15%;" required>
            <option value="">Pilih Minggu</option>
              @foreach($minggu as $m) 
                <option value="{{$m->id_minggu}}">{{$m->minggu_ke}}</option>
              @endforeach
          </select>
      </div>

    <div class="form-group box-header">
      <label for="kemampuan_akhir"><b>Kemampuan Akhir</b></label>
        <textarea class="form-control" rows="3" placeholder="Masukkan kemampuan akhir yang diharapkan" name="kemampuan_akhir" required=""></textarea>
    </div>

    <div class="form-group box-header">
      <label for="indikator"><b>Indikator</b></label>
        <textarea class="form-control" rows="3" placeholder="Masukkan indikator" name="indikator" required=""></textarea>
    </div>

    <div class="form-group box-header">
      <label for="kriteria"><b>Kriteria</b></label>
        <textarea class="form-control" rows="3" placeholder="Masukkan kriteria" name="kriteria" required=""></textarea>
    </div>

    <div class="form-group box-header">
      <label for="kriteria_non_test"><b>Kriteria Non Test</b></label>
        <textarea class="form-control" rows="3" placeholder="Masukkan kriteria non-test" name="kriteria_non_test" required=""></textarea>
    </div>

    <div class="form-group box-header">
      <label for="metode_pembelajaran"><b>Metode Pembelajaran</b></label><br>
        @foreach($metode_pembelajaran as $mp)
          <label class="checkbox-inline"><input type="checkbox" value="{{$mp->id}}" name="metode_pembelajaran_id[]"> {{$mp->sistem_pembelajaran}}</label> 
        @endforeach                                
    </div>

    <div class="form-group box-header">
      <label><b>Estimasi Waktu Pembelajaran</b></label>
        <textarea class="form-control" rows="1" placeholder="Masukkan estimasi waktu pembelajaran" name="waktu_pembelajaran" required=""></textarea>
    </div>

    <div class="form-group box-header">
      <label><b>Tugas dan Estimasi Waktu</b></label>
        <textarea class="form-control" rows="4" placeholder="Masukkan tugas dan estimasi waktunya" name="tugas" required=""></textarea>
    </div>

    <div class="form-group box-header">
      <label><b>Materi Pembelajaran</b></label>
        <textarea class="form-control" rows="3" placeholder="Masukkan materi pembelajaran" name="materi_pembelajaran" required=""></textarea>
    </div>

    <div class="form-group box-header">
      <label><b>Bobot Penilaian</b></label>
        <textarea class="form-control" rows="1" placeholder="Masukkan persentase (%) bobot penilaian" name="bobot_penilaian" required=""></textarea><br>
    </div>
        <button type="submit" class="btn btn-primary" style="float:right;">Tambah</button>
        
    </div>
  </form>
  <!-- Table Daftar Capaian Mata Kuliah -->  
  <div class="col-md-12">
    <div class="box-header">
    <br>
      <h3 class="box-title">RPS Lanjutan</h3> 
      </div>
        <div class="box-body no-padding">
          <table id="rps" name="rps" class="table table-striped table-bordered" cellspacing="0">
            <tbody>
              <thead>
                <tr>
                  <th style="text-align:center" width="5%">No.</th>
                  <th style="text-align:center">Minggu Ke-</th>      
                  <th style="text-align:center">Kemampuan Akhir</th>
                  <th style="text-align:center">Indikator</th>
                  <th style="text-align:center">Kriteria dan Bentuk Penilaian</th>
                  <th style="text-align:center">Metode Pembelajaran<br>(Estimasi Waktu)</th>
                  <th style="text-align:center">Materi Pembelajaran</th>
                  <th style="text-align:center">Bobot Penilaian</th>
                  <th style="text-align:center">Aksi</th>
                </tr>
              </thead>
            <tbody>
            @foreach($rps_lanjutan as $i => $rps) 
              <tr>
                <td style="text-align:center" width="5%">{{ $i+1 }}</td>
                <td style="text-align:center">{{$rps->minggu_id}}</td>      
                <td style="text-align:center">{{$rps->kemampuan_akhir}}</td>
                <td style="text-align:center">{{$rps->indikator}}</td>
                <td style="text-align:justify">Kreteri: <br> {{$rps->kriteria}} <br> Bentuk non-test: <br> {{$rps->kriteria_non_test}}</td>
                <td style="text-align:justify">{{$rps->sistem_pembelajaran}} <br> Estimasi Waktu: {{$rps->waktu_pembelajaran}} <br> {{$rps->tugas}}</td>
                <td style="text-align:center">{{$rps->materi_pembelajaran}}</td>
                <td style="text-align:center">{{$rps->bobot_penilaian}}</td>
                <td width="10%" style="text-align:center">
                  <a href="{{url('/dosen/kurikulum/rps/edit-lanjutan-rps/'.$rps->id_rps)}}" class="btn btn-warning btn-xs">
                  <i class="fa fa-pencil"></i> Ubah</a></td>
              </tr>
              @endforeach
            </tbody>
          </tbody>
        </table>
      </div>
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

