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
       
  <form role="form-control">
 
  <div class="box-header with-border">
    <h3 class="box-title">Detail RPS</h3>
  </div>

  <div class="col-md-12">
  <div class="form-group box-header">
    <label>Mata Kuliah</label>
      <input class="form-control" id="nama_matkul" name="nama_matkul" disabled="" value="{{$mata_kuliah->kode_matkul}} - {{$mata_kuliah->nama_matkul}} - ({{$mata_kuliah->sks}} SKS)">
   </div>

    <div class="form-group box-header">
    <label for="mk_prasyarat"><b>Mata Kuliah Prasyarat</b></label><br>
      @foreach($mk_prasyarat as $syarat)
        <input type="checkbox" name="kode_cpem" value="
        {{$syarat->matkul['nama_matkul']}}
        ">
        {{$syarat->matkul['nama_matkul']}} <br> 
      @endforeach
    </div> 

    <div class="form-group box-header">
    <label for="cpl_prodi"><b>CPL Prodi</b></label><br>
      @foreach($cp_prodi as $cprodi)
        <input type="checkbox" name="kode_cpem" value="
        {{$cprodi->cpem['kode_cpem']}}
        ">
        {{$cprodi->cpem['kode_cpem']}} <br> 
      @endforeach
    </div> 

    <div class="form-group box-header">
      <label for="deskripsi_matkul"><b>Deskripsi Singkat Mata Kuliah</b></label>
      <textarea class="form-control" name="deskripsi_matkul" id="deskripsi_matkul" rows="3" placeholder="" disabled="">{!!$mata_kuliah->deskripsi_matkul!!}</textarea>
    </div>
    <br>

    <div class="form-group box-header">
      <label for="pokok_pembahasan"><b>Pokok Pembahasan</b></label>
      <textarea class="form-control" name="pokok_pembahasan" id="pokok_pembahasan" rows="3" placeholder="" disabled="">{!!$mata_kuliah->pokok_pembahasan!!}</textarea><br>
    </div>

    <div class="form-group box-header">
      <label for="pustaka"><b>Pustaka</b></label>
      <br>
        <label for="pustaka_utama">Pustaka Utama</label>
        <textarea class="form-control" rows="3" id="pustaka_utama" name="pustaka_utama" placeholder="" disabled="">{!!$mata_kuliah->pustaka_utama!!}</textarea>
    </div>

    <div class="form-group box-header">
      <label for="pustaka_pendukung">Pustaka Pendukung</label>
      <textarea class="form-control" rows="3" id="pustaka_pendukung" name="pustaka_pendukung" placeholder="" disabled="">{!!$mata_kuliah->pustaka_pendukung!!}</textarea><br>
    </div>

    <div class="form-group box-header">
      <p><b>Team Teaching</b></p>
      <label for="dosen1">Koordinator Mata kuliah</label>
      <select class="form-control" disabled="">
        @foreach($koor as $k) 
          @if ($k->status_tt_id === 1)
            <option selected="selected">{{$k->nip_id}}</option>
            @else
            <option>{{$k->nip_id}}</option>
          @endif
        @endforeach
      </select>
    </div>

    <div class="form-group box-header">
      <label for="dosen2">Anggota Team Teaching 1</label>
        <select class="form-control" disabled="">
          @foreach($koor as $k) 
            @if ($k->status_tt_id === 2)
              <option selected="selected">{{$k->nip_id}}</option>
            @else
              <option>{{$k->nip_id}}</option>
            @endif
          @endforeach
        </select>
      </div>

    <div class="form-group box-header">
      <label for="dosen3">Anggota Team Teaching 2</label>
        <select class="form-control" disabled="">
          @foreach($koor as $k) 
            @if ($k->status_tt_id === 3)
              <option selected="selected">{{$k->nip_id}}</option>
            @else
              <option>{{$k->nip_id}}</option>
            @endif
          @endforeach
        </select>
      </div>

    <div class="form-group box-header">
      <label for="dosen4">Anggota Team Teaching 3</label>
        <select class="form-control" disabled="">
        @foreach($koor as $k) 
          @if ($k->status_tt_id === 4)
            <option selected="selected">{{$k->nip_id}}</option>
          @endif
        @endforeach
        </select>
    </div>
    <br>
    <button type="submit" class="btn btn-info pull-right">Edit</button> 
    <a href="{{{('/dosen/kurikulum/rps')}}}" class="btn btn-info">Kembali</a>
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
  </div>
@endsection

