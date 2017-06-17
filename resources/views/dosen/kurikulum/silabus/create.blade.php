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
  <div class="box box-danger">

    <div class="box-header with-border">
      <h3 class="box-title">Tambah Silabus</h3>
    </div>

    <div class="box-body">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">    

      <div class="form-group">
        <label>Mata Kuliah</label>
        <select name="matkul" id="matkul" class="form-control select2" style="width: 100%;" required>
          <option value="">-- Pilih Mata Kuliah --</option>
          @foreach ($matkul_silabus as $ms)
          {
            <option value="{{$ms->id_mk}}">{{$ms->kode_matkul}} - {{$ms->nama_matkul}} ({{$ms->sks}} SKS)</option>
          }
          @endforeach
        </select>
       </div>

      <div class="form-group">
        <label for="metode-pembelajaran"><b>Atribut Softskill</b></label><br>     
        @foreach($atribut_softskill as $softskill)
          <label class="checkbox-inline"><input type="checkbox" name="sistem_pembelajaran_id[]" value="{{$softskill->id_softskill}}">{{$softskill->softskill}}</label>        
        @endforeach
      </div>

      <div class="form-group">
        <label for="metode-pembelajaran"><b>Metode Pembelajaran</b></label><br>     
        @foreach($metode_pembelajaran as $metode)
          <label class="checkbox-inline"><input type="checkbox" name="softskill_id[]" value="{{$metode->id}}">{{$metode->sistem_pembelajaran}}</label>        
        @endforeach
      </div>

      <div class="form-group">
        <label for="capaian_pembelajaran"><b>Capaian Mata Kuliah</b></label>
        <textarea class="form-control" id="" name="capaian_matkul" rows="4" placeholder="Masukan Capaian Mata Kuliah">
        </textarea>
      </div>

      <div class="form-group">
        <label for="penilaian"><b>Deskripsi Mata Ajar</b></label>    
        <textarea name="deskripsi_mata_ajar" class="form-control" rows="4" placeholder="Masukan Deskripsi Mata Ajar">
        </textarea>
      </div>

      <div class="form-group">
        <label for="penilaian"><b>Penilaian Hasil Belajar</b></label>    
        <textarea name="penilaian_matkul" class="form-control" rows="4" placeholder="Masukan Penilaian Hasil Belajar">
        </textarea>
      </div>

      <div class="form-group">
        <label for="referensi"><b>Referensi Wajib</b></label>
        <textarea name="pustaka_utama" id="pustaka_utama" class="form-control" rows="4" placeholder="Masukkan referensi wajib (pustaka utama)"> 

        </textarea>

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
<script type="text/javascript">
$(document).ready(function(){
    $("#matkul").on("change", function(){
      var id = $("#matkul").val();      
      $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },        
          type: "POST",
          url: "autofill",
          data: {'id' : id},
          dataType: 'json',
          encode : true,
          success: function (data) 
          {
            $("#pustaka_utama").html(data.pustaka);            
          }
      });               
    });
});
</script>

@endsection

