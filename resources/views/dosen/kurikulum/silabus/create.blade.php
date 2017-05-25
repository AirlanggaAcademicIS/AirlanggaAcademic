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
<form role="form" id="tambah-silabus" method="post" action="{{url('/dosen/kurikulum/silabus/create')}}" enctype="multipart/form-data">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Tambah Silabus</h3>
    </div>

    <div class="box-body">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">    

      <div class="form-group">
  	    <label>Mata Kuliah</label>
  	    <select name="matkul" class="form-control select2" style="width: 100%;" required>
          <option value="">-- Pilih Mata Kuliah --</option>
          @foreach ($mata_kuliah as $mk)
          {
            <option value="{{$mk->id_mk}}">{{$mk->kode_matkul}} - {{$mk->nama_matkul}} ({{$mk->sks}} SKS)</option>
          }
          @endforeach
  	    </select>
  	   </div>

      <!-- Pakai Checkbox -->
      <div class="form-group">
        <label for="prasyarat"><b>Prasyarat</b></label><br>     
        @foreach($mata_kuliah as $mk)
          <label class="checkbox-inline"><input name="mk_syarat_id" type="checkbox" value="{{$mk->id_mk}}">{{$mk->nama_matkul}}</label>            
        @endforeach                                
      </div>

      <div class="form-group">
        <label for="capaian_pembelajaran"><b>Capaian Mata Kuliah</b></label>
      	<textarea class="form-control" id="" name="capaian_matkul" rows="4" placeholder="Masukan Capaian Mata Kuliah">
      	</textarea>
      </div>

      <div class="form-group">
        <label for="deskripsi_matkul"><b>Deskripsi Mata Kuliah</b></label>
      	<textarea name="deskripsi_matkul" class="form-control" rows="4" placeholder="Masukan Deskripsi Mata Kuliah">
      	</textarea>
      </div>

    <div class="form-group">
        <label for="metode-pembelajaran"><b>Sistem Pembelajaran</b></label><br>     
        <input type="text" value=" " data-role="tagsinput">                    
    </div>
    <div class="form-group">
        @foreach($atribut_softskill as $softskill)
          <label class="checkbox-inline"><input type="checkbox" name="softskill_id" value="{{$softskill->id_softskill}}">{{$softskill->softskill}}</label>          
        @endforeach
      </div>

      <!-- Pakai Checkbox -->
      <div class="form-group">
        <label for="metode-pembelajaran"><b>Metode Pembelajaran</b></label><br>     
        @foreach($metode_pembelajaran as $metode)
          <label class="checkbox-inline"><input type="checkbox" name="" value="{{$metode->id}}">{{$metode->sistem_pembelajaran}}</label>        
        @endforeach
      </div>

      <!-- Pakai Checkbox -->
      <div class="form-group">
        <label for="media-pembelajaran"><b>Media Pembelajaran</b></label><br>    
        @foreach($media_pembelajaran as $media)
          <label class="checkbox-inline"><input name="sistem_pembelajaran_id" type="checkbox" value="{{$media->id}}">{{$media->media_pembelajaran}}</label>        
        @endforeach
      </div>

      <div class="form-group">
        <label for="penilaian"><b>Penilaian Hasil Belajar</b></label>    
        <textarea name="penilaian_matkul" class="form-control" rows="4" placeholder="Masukan Penilaian Hasil Belajar">
        </textarea>
      </div>

    	<div class="form-group">
        <label for="referensi"><b>Referensi Wajib</b></label>
        <textarea name="pustaka_utama" class="form-control" rows="4">
      	</textarea>
      </div>

    	<div class="box-footer clearfix">
        <button type="tambah" class="pull-right btn btn-info btn-sm" id="tambah">Tambah
        </button>
      </div>
    </div>
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

