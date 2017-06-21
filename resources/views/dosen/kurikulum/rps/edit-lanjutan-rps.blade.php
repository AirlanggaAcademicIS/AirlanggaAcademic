
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

  <form id="tambahRPS" method="post" action="{{url('dosen/kurikulum/rps/edit-lanjutan-rps/'.$rps->id_rps)}}" enctype="multipart/form-data"  class="form-horizontal">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">       
  
    <div class="box-header with-border">
      <h3 class="box-title">Ubah RPS Lanjutan</h3>
    </div>

    <div class="col-md-12">

    <div class="form-group box-header">
    <label>Mata Kuliah</label>
      <input class="form-control" id="nama_matkul" name="nama_matkul" disabled="" value="{{$mk->kode_matkul}} - {{$mk->nama_matkul}} - ({{$mk->sks}} SKS)">
   </div>

    <div class="form-group box-header">
      <label for="kemampuan_akhir"><b>Kemampuan Akhir</b></label>
        <textarea class="form-control" rows="3" placeholder="Masukkan kemampuan akhir yang diharapkan" name="kemampuan_akhir" required="">{!!$rps->kemampuan_akhir!!}</textarea>
    </div>

    <div class="form-group box-header">
      <label for="indikator"><b>Indikator</b></label>
        <textarea class="form-control" rows="3" placeholder="Masukkan indikator" name="indikator" required="">{!!$rps->indikator!!}</textarea>
    </div>

    <div class="form-group box-header">
      <label for="kriteria"><b>Kriteria</b></label>
        <textarea class="form-control" rows="3" placeholder="Masukkan kriteria" name="kriteria" required="">{!!$rps->kriteria!!}</textarea>
    </div>

    <div class="form-group box-header">
      <label for="kriteria_non_test"><b>Kriteria Non Test</b></label>
        <textarea class="form-control" rows="3" placeholder="Masukkan kriteria non-test" name="kriteria_non_test" required="">{!!$rps->kriteria_non_test!!}</textarea>
    </div>

  <div class="form-group box-header">
    <label for="cpl_prodi"><b>Metode Pembelajaran</b></label><br>            
      @php $isSameMetode = false; @endphp
        @foreach($metode_pembelajaran as $mp)          
          @foreach($pembelajaran_rps as $pr)
              @if($mp->id == $pr->sistem_pembelajaran_id)
                  @php $isSameMetode= true; @endphp
                  <label class="checkbox-inline"><input checked type="checkbox" name="sistem_pembelajaran_id[]" value="{{$mp->id}}"> {{$mp->sistem_pembelajaran}} </label>       
              @endif            
          @endforeach
          @if($isSameMetode == false)
              <label class="checkbox-inline"><input type="checkbox" name="sistem_pembelajaran_id[]" value="
            {{$mp->id}}"> {{$mp->sistem_pembelajaran}} </label>
          @endif
          @php $isSameMetode = false; @endphp        
      @endforeach        
  </div>

    <div class="form-group box-header">
      <label><b>Estimasi Waktu Pembelajaran</b></label>
        <textarea class="form-control" rows="1" placeholder="Masukkan estimasi waktu pembelajaran" name="waktu_pembelajaran" required="">{!!$rps->waktu_pembelajaran!!}</textarea>
    </div>

    <div class="form-group box-header">
      <label><b>Tugas dan Estimasi Waktu</b></label>
        <textarea class="form-control" rows="4" placeholder="Masukkan tugas dan estimasi waktunya" name="tugas" required="">{!!$rps->tugas!!}</textarea>
    </div>

    <div class="form-group box-header">
      <label><b>Materi Pembelajaran</b></label>
        <textarea class="form-control" rows="3" placeholder="Masukkan materi pembelajaran" name="materi_pembelajaran" required="">{!!$rps->materi_pembelajaran!!}</textarea>
    </div>

    <div class="form-group box-header">
      <label><b>Bobot Penilaian (%)</b></label>
        <textarea class="form-control" rows="1" placeholder="Masukkan persentase (%) bobot penilaian" name="bobot_penilaian" required="">{!!$rps->bobot_penilaian!!}</textarea><br>
    </div>
      <div class="col-md-12 box-body">
        <button type="submit" class="btn btn-primary" style="float:right;">Ubah</button>
    </div>
    </div>
  </form>
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

