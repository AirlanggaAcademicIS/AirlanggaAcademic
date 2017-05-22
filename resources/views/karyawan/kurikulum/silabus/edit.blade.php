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
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Silabus</h3>
    </div>

    <div class="box-body">

    <div class="form-group">
        <label for="nama_matkul"><b>Mata Kuliah</b></label>
    <input class="form-control" id="nama_matkul" name="nama_matkul" placeholder="Masukkan Mata Kuliah" value="{{$mata_kuliah->nama_matkul}}" disabled="" required>
    </div>
    <div class="form-group">
        <label for="sks"><b>Beban Studi</b></label>
    <input class="form-control" id="sks" name="sks" placeholder="Masukkan SKS" value="{{$mata_kuliah->sks}}" disabled="" required>
    </div>
    <div class="form-group">
        <label for="prasyarat"><b>Prasyarat</b></label><br>
        <input type="text" value=
        "@foreach($mk_prasyarat as $syarat)             
          {{$syarat->matkul['nama_matkul']}}
        @endforeach" 
        data-role="tagsinput">                    
    </div>
    <div class="form-group">
        <label for="deskripsi_cpmk"><b>Capaian Pembelajaran yang dibebankan pada matakuliah ini</b></label>
        @foreach($cp_matkul as $cp )
        <textarea class="form-control" rows="4" id="deskripsi_cpmk" name="deskripsi_cpmk" required>{!!$cp->deskripsi_cpmk!!}</textarea>
        @endforeach
        </div>
    <div class="form-group">
        <label for="dekripsi_matkul"><b>Deskripsi Mata Kuliah/Silabus</b></label>
        <textarea class="form-control" rows="4" id="deskripsi_matkul" name="deskripsi_matkul" required>{!!$mata_kuliah->deskripsi_matkul!!}</textarea>
    </div>
    <div class="form-group">
        <label for="softskill"><b>Atribut Softskill</b></label><br>
        <input type="text" value=
        "@foreach($mk_softskills as $softskill)
          {{$softskill->softskill['softskill']}}
        @endforeach" 
        data-role="tagsinput">                    
        <p></p>
    </div>
    <div class="form-group">
        <label for="metode-pembelajaran"><b>Metode Pembelajaran</b></label><br>     
        <input type="text" value="ceramah,diskusi" data-role="tagsinput">                    
    </div>
    <div class="form-group">
        <label for="media-pembelajaran"><b>Media Pembelajaran</b></label><br>    
        <input type="text" value="LCD,laptop,white board" data-role="tagsinput">                    
    </div>
    <div class="form-group">
        <label for="penilaian_matkul"><b>Penilaian Hasil Belajar</b></label>    
        <textarea class="form-control" rows="4" id="penilaian_matkul" name="penilaian_matkul" required>{!!$mata_kuliah->penilaian_matkul!!}</textarea>
        </textarea>                   
    </div>
    <div class="form-group">
        <label>Dosen</label>
        <select class="form-control select2" style="width: 100%;">
        @foreach($koor as $k)
          <option selected="selected">{{$k->status['status_tt']}}</option>
        @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="pustaka_utama"><b>Referensi Wajib</b></label>
        <textarea class="form-control" id="pustaka_utama" name="pustaka_utama" required>{!!$mata_kuliah->pustaka_utama!!}</textarea>
        </textarea>
    </div>

	<div class="box-footer clearfix">
      <a href="{{{('/karyawan/kurikulum/silabus')}}}" class="btn btn-info">Kembali</a>
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