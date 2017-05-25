@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')


  Edit Silabus

@endsection

@section('contentheader_title')


    Edit Silabus

@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->

<form role="form">
    <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Silabus</h3>
        </div>

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
    </div>

</form>
</div>       

    <!-- /.box -->
</div> 
</form>


@endsection

@section('code-footer')


@endsection