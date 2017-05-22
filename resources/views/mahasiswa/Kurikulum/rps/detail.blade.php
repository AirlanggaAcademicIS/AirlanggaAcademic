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
<div class="box box-primary">

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
      <form role="form">
        <div class="box-header with-border">
          
          <h3 class="box-title">Detail RPS</h3>
        </div>

      <div class="box-body">
<div class="form-group">
<label for="nama-matkul"><b>Mata Kuliah</b></label>
<input class="form-control" id="nama_matkul" name="nama_matkul" disabled="" value="{{$mata_kuliah->nama_matkul}}">
</div><br>

<div class="form-group">
<label for="nama-matkul"><b>Kode Mata Kuliah</b></label>
<input class="form-control" id="kode_matkul" name="kode_matkul" disabled="" value="{{$mata_kuliah->kode_matkul}}">
</div><br>

<div class="form-group">
    <label for="nama-matkul">Mata Kuliah Prasyarat</label>
    </div>
    <div class="form-group">
    <input text="text" value="@foreach($mk_prasyarat as $syarat)
    {{$syarat->matkul['nama_matkul']}}
    @endforeach"
    data-role="tagsinput" disabled="">
    </div><br>

<div class="form-group">
<label for="nama-matkul"><b>SKS</b></label>
<input class="form-control" id="sks" name="sks" disabled="" value="{{$mata_kuliah->sks}}">
</div><br>

<div class="form-group">
<p><b>Capaian Pembelajaran</b></p>
</div>

<div class="form-group">
    <label for="nama-matkul">CPL Prodi</label>
    </div>
    <div class="form-group">
    <input text="text" value="@foreach($cp_prodi as $cprodi)
    {{$cprodi->cpem['kode_cpem']}}
    @endforeach"
    data-role="tagsinput" disabled="">
    </div><br>
      
<div class="form-group">
    <label for="nama-matkul">Capaian Mata Kuliah</label>
    </div>
    <div class="form-group">
    <input text="text" value="
    @foreach($cp_mata_kuliah as $cpmk)
    {{$cpmk->kode_cpmk}}
    @endforeach
    "
    data-role="tagsinput" disabled="">
    </div><br>

<div class="form-group">
<label for="deskripsi-mk"><b>Deskripsi Singkat Mata Kuliah</b></label>
<textarea class="form-control" name="deskripsi_matkul" id="deskripsi_matkul" rows="3" placeholder="" disabled="">{!!$mata_kuliah->deskripsi_matkul!!}</textarea>
</div><br>

<div class="form-group">
<label for="deskripsi-mk"><b>Pokok Pembahasan</b></label>
<textarea class="form-control" name="pokok_pembahasan" id="pokok_pembahasan" rows="3" placeholder="" disabled="">{!!$mata_kuliah->pokok_pembahasan!!}</textarea><br>
</div>

<div class="form-group">
  <label for="deskripsi-mk"><b>Pustaka</b></label>
  <div class="form-group">
<label for="deskripsi-mk">Pustaka Utama</label>
<textarea class="form-control" rows="3" placeholder="" disabled="">{!!$mata_kuliah->pustaka_utama!!}</textarea>
</div>
 <div class="form-group">
<label for="deskripsi-mk">Pustaka Pendukung</label>
<textarea class="form-control" rows="3" placeholder="" disabled="">{!!$mata_kuliah->pustaka_pendukung!!}</textarea><br>
</div>
  </div>
  
  <div class="form-group">
<p><b>Media Pembelajaran</b></p>
</div>

    <div class="form-group">
    <label for="nama-matkul">Perangkat Lunak</label>
    </div>
    <div class="form-group">
    <input class="form-control" value="" data-role="tagsinput" disabled="">
    </div>

     <div class="form-group">
    <label for="nama-matkul">Perangkat Keras</label>
    </div>
    <div class="form-group">
    <input class="form-control" value="" data-role="tagsinput" disabled="">
    </div><br>

<div class="form-group">
<p><b>Team Teaching</b></p>
<label for="dosen1">Koordinator Mata kuliah</label>
<select class="form-control" disabled="">
@foreach($koor as $k) 
@if ($k->status_tt_id === 1)
      <option selected="selected">{{$k->nip_id}}</option>
      @endif
      @endforeach
      </select>
    </div>

<div class="form-group">
<label for="dosen2">Anggota Team Teaching 1</label>
<!-- select -->
    <div class="form-group">
      <select class="form-control" disabled="">
  @foreach($koor as $k) 
      @if ($k->status_tt_id === 2)
      <option selected="selected">{{$k->nip_id}}</option>
      @endif
  @endforeach
      </select>
    </div>
</div>

<div class="form-group">
<label for="dosen3">Anggota Team Teaching 2</label>
<!-- select -->
    <div class="form-group">
      <select class="form-control" disabled="">
     @foreach($koor as $k) 
      @if ($k->status_tt_id === 3)
      <option selected="selected">{{$k->nip_id}}</option>
      @endif
  @endforeach
        <option></option>
      </select>
    </div>
</div>

<div class="form-group">
<label for="dosen4">Anggota Team Teaching 3</label>
<!-- select -->
    <div class="form-group">
      <select class="form-control" disabled="">
        @foreach($koor as $k) 
      @if ($k->status_tt_id === 4)
      <option selected="selected">{{$k->nip_id}}</option>
      @endif
  @endforeach
      </select>
    </div>

</div>
<br>
<a href="{{{('/mahasiswa/kurikulum/rps')}}}" class="btn btn-info">Kembali</a>
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
  </div>
@endsection

