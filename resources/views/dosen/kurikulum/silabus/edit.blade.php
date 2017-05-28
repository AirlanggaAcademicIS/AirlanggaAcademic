@extends('adminlte::layouts.app')

@section('htmlheader_title')
<<<<<<< HEAD
Edit Silabus
=======



  Edit Silabus

>>>>>>> f431483d33699cf4bdbf295ca947e24c98658770
@endsection

@section('contentheader_title')
Edit Silabus
@endsection

@section('code-header')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<link rel="stylesheet" href="{{ asset('/css/dropzone.css') }}">

<<<<<<< HEAD
@endsection

@section('main-content')
<form role="form" id="tambah-silabus" method="post" action="{{url('/dosen/kurikulum/silabus/edit/'.$matkul_silabus->id_mk)}}" enctype="multipart/form-data">
  <div class="box box-primary">
=======
  Edit Silabus
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->

<form role="form">
<div class="box box-primary">
>>>>>>> f431483d33699cf4bdbf295ca947e24c98658770
    <div class="box-header with-border">
      <h3 class="box-title">Silabus Mata Kuliah {{$matkul_silabus->nama_matkul}}</h3>
    </div>
<<<<<<< HEAD
    <div class="box-body">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">    


      <div class="form-group">
        <label for="metode-pembelajaran"><b>Atribut Softskill</b></label><br>     
        @php $isSameSoftskill = false; @endphp
        @foreach($atribut_softskill as $softskill)
          @foreach($mk_softskill as $mk_s)
            @if($softskill->id_softskill == $mk_s->softskill_id)
              @php $isSameSoftskill = true; @endphp
              <label class="checkbox-inline"><input type="checkbox" name="softskill_id[]" value="{{$softskill->id_softskill}}" checked>{{$softskill->softskill}}</label>                      
            @endif
          @endforeach
          @if($isSameSoftskill == false)
            <label class="checkbox-inline"><input type="checkbox" name="softskill_id[]" value="{{$softskill->id_softskill}}">{{$softskill->softskill}}</label>        
          @endif
          @php $isSameSoftskill = false; @endphp
        @endforeach
      </div>

      <div class="form-group">
        <label for="metode-pembelajaran"><b>Metode Pembelajaran</b></label><br>             
        @php $isSameMetode = false; @endphp
        @foreach($metode_pembelajaran as $metode)          
          @foreach($mk_metode_pembelajaran as $mk_metode)
            @if($metode->id == $mk_metode->sistem_pembelajaran_id)
              @php $isSameMetode = true; @endphp
              <label class="checkbox-inline"><input checked type="checkbox" name="sistem_pembelajaran_id[]" value="{{$metode->id}}">{{$metode->sistem_pembelajaran}}</label>        
            @endif            
          @endforeach
          @if($isSameMetode == false)
            <label class="checkbox-inline"><input type="checkbox" name="sistem_pembelajaran_id[]" value="{{$metode->id}}">{{$metode->sistem_pembelajaran}}</label>        
          @endif
          @php $isSameMetode = false; @endphp        
        @endforeach        
      </div>

      <div class="form-group">
        <label for="media-pembelajaran"><b>Media Pembelajaran</b></label><br>    
        @php $isSameMedia = false; @endphp
        @foreach($media_pembelajaran as $media)          
          @foreach($mk_media_pembelajaran as $mk_media)
            @if($media->id == $mk_media->media_pembelajaran_id)
              @php $isSameMedia = true; @endphp
              <label class="checkbox-inline"><input checked type="checkbox" name="media_pembelajaran_id[]" value="{{$media->id}}">{{$media->media_pembelajaran}}</label>        
            @endif
          @endforeach
            @if($isSameMedia == false)
              <label class="checkbox-inline"><input type="checkbox" name="media_pembelajaran_id[]" value="{{$media->id}}">{{$media->media_pembelajaran}}</label>        
            @endif
          @php $isSameMedia = false; @endphp
        @endforeach        
      </div>

      <div class="form-group">
        <label for="penilaian"><b>Deskripsi Mata Ajar</b></label>    
        <textarea name="deskripsi_mata_ajar" class="form-control" rows="4" placeholder="Masukan Deskripsi Mata Ajar">{!!$matkul_silabus->deskripsi_matkul!!}</textarea>
      </div>

      <div class="form-group">
        <label for="penilaian"><b>Penilaian Hasil Belajar</b></label>    
        <textarea name="penilaian_matkul" class="form-control" rows="4" placeholder="Masukan Penilaian Hasil Belajar">{!!$matkul_silabus->penilaian_matkul!!}</textarea>
      </div>

      <div class="form-group">
        <label for="referensi"><b>Referensi Wajib</b></label>
        <textarea name="pustaka_utama" id="pustaka_utama" class="form-control" rows="4" placeholder="Masukkan referensi wajib (pustaka utama)">{!!$matkul_silabus->pustaka_utama!!}</textarea>
      </div>

      <div class="box-footer clearfix">
        <button type="edit" class="pull-right btn btn-info btn-sm" id="edit">Edit Silabus
        </button>
      </div>
=======

    <div class="box-body">
    <div class="form-group">

    <label for="nama_matkul"><b>Mata Kuliah</b></label>
    <input class="form-control" id="nama_matkul" name="nama_matkul" disabled="" value="
    {{$mata_kuliah->kode_matkul}} - {{$mata_kuliah->nama_matkul}} - ({{$mata_kuliah->sks}} SKS)">
    </div><br>


    <div class="form-group">
        <label for="mk_prasyarat"><b>Mata Kuliah Prasyarat</b></label><br>
        @foreach($mk_prasyarat as $syarat)
        <input type="checkbox" name="mk_prasyarat" value="
        {{$syarat->matkul['nama_matkul']}}
        ">
        {{$syarat->matkul['nama_matkul']}}<br>
        @endforeach
        </div><br>

    <div class="form-group">
        <label for="deskripsi_cpmk"><b>Capaian Pembelajaran yang dibebankan pada matakuliah ini</b></label>
        @foreach($cp_matkul as $cp )
        <textarea class="form-control" rows="4" id="deskripsi_cpmk" name="deskripsi_cpmk" required>{!!$cp->deskripsi_cpmk!!}</textarea>
        @endforeach
    </div><br>
                   
        </div>
        <label for="prasyarat"><b>Prasyarat</b></label><br>
        <input type="text" value=
        "@foreach($mk_prasyarat as $syarat)             
          {{$syarat->matkul['nama_matkul']}}
        @endforeach" 
        data-role="tagsinput">                    
    </div>
    <div class="form-group">
        <label for="capaian-pembelajaran"><b>Capaian Pembelajaran yang dibebankan pada matakuliah ini</b></label>
        <textarea class="form-control" rows="4">Mahasiswa dapat menggunakan konsep-konsep kalkulus dalam ilmu kehayatan.
        </textarea>
    </div>

    <div class="form-group">
        <label for="dekripsi_matkul"><b>Deskripsi Mata Kuliah/Silabus</b></label>
        <textarea class="form-control" rows="4" id="deskripsi_matkul" name="deskripsi_matkul" required>{!!$mata_kuliah->deskripsi_matkul!!}</textarea>
    </div>

    <div class="form-group">
        <label for="softskill"><b>Atribut Softskill</b></label><br>
        @foreach($mk_softskills as $softskill)
        <input type="checkbox" name="mk_softskill" value="
         {{$softskill->softskill['softskill']}}
        ">
        {{$softskill->softskill['softskill']}}
        @endforeach
    </div><br>

    <div class="form-group">
        <label for="sistem_pembelajaran"><b>Sistem Pembelajaran</b></label><br>  
        @foreach($mk_softskills as $softskill)
        <input type="checkbox" name="sistem_pembelajaran" value="
          {{$softskill->softskill['softskill']}}
          ">
          {{$softskill->softskill['softskill']}}
        @endforeach
    </div><br> 

    <div class="form-group">
        <label for="media_pembelajaran"><b>Media Pembelajaran</b></label><br>     
        @foreach($mk_softskills as $softskill)
        <input type="checkbox" name="media_pembelajaran" value="
          {{$softskill->softskill['softskill']}}
          ">
          {{$softskill->softskill['softskill']}}
        @endforeach                     
    </div><br>  
    <div class="form-group">
        <label for="penilaian_matkul"><b>Penilaian Hasil Belajar</b></label><br>
        <textarea class="form-control" rows="4" id="penilaian_matkul" name="penilaian_matkul" required>{!!$mata_kuliah->penilaian_matkul!!}</textarea>
        </textarea>                   
    </div><br>
    
    <div class="form-group">
        <label for="pustaka_utama"><b>Referensi Wajib</b></label>
        <textarea class="form-control" id="pustaka_utama" name="pustaka_utama" required>{!!$mata_kuliah->pustaka_utama!!}</textarea>
        </textarea>
    </div>

</div><br>  
    <div class="box-footer clearfix">


      <a href="{{{('/dosen/kurikulum/silabus')}}}" class="btn btn-info">Kembali</a>

      <button type="update" class="pull-right btn btn-info" id="update">Edit

      </button>
>>>>>>> f431483d33699cf4bdbf295ca947e24c98658770
    </div>
  </div>       
</form>
<<<<<<< HEAD
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
=======
</div>       

    <!-- /.box -->
</div> 
</form>



@endsection

@section('code-footer')


  

>>>>>>> f431483d33699cf4bdbf295ca947e24c98658770

