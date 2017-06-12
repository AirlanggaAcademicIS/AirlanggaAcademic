@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Silabus
@endsection
  
@section('contentheader_title')
    Silabus
@endsection
 
@section('code-header')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
    <link rel="stylesheet" href="{{ asset('/css/dropzone.css') }}">
@endsection

@section('main-content')
<form role="form" id="tambah-silabus" method="post" action="{{url('/karyawan/kurikulum/silabus/edit/'.$matkul_silabus->id_mk)}}" enctype="multipart/form-data">
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">Silabus Mata Kuliah {{$matkul_silabus->nama_matkul}}</h3>
        </div>
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
                <label for="capaian_matkul"><b>Capaian Mata Kuliah</b></label>    
                <textarea name="capaian_matkul" class="form-control" rows="4" placeholder="Masukan Capaian Mata Kuliah" required disabled="">{!!$matkul_silabus->capaian_matkul!!}</textarea>
            </div><br>

            <div class="form-group">
                <label for="penilaian"><b>Deskripsi Mata Ajar</b></label>    
                <textarea name="deskripsi_mata_ajar" class="form-control" rows="4" placeholder="Masukan Deskripsi Mata Ajar" required disabled="">{!!$matkul_silabus->deskripsi_mata_ajar!!}</textarea>
            </div>

            <div class="form-group">
                <label for="penilaian"><b>Penilaian Hasil Belajar</b></label>    
                <textarea name="penilaian_matkul" class="form-control" rows="4" placeholder="Masukan Penilaian Hasil Belajar" required disabled="">{!!$matkul_silabus->penilaian_matkul!!}</textarea>
            </div>
            
            <div class="form-group">
                <label for="referensi"><b>Referensi Wajib</b></label>
                <textarea name="pustaka_utama" id="pustaka_utama" class="form-control" rows="4" placeholder="Masukkan referensi wajib (pustaka utama)" required disabled="">{!!$matkul_silabus->pustaka_utama!!}</textarea>
            </div>
            
            <div class="box-footer clearfix">
                <a href="{{{('/karyawan/kurikulum/silabus')}}}" class="btn btn-info">Kembali</a>
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
        ( function() {
            var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();
        } );
    </script>
@endsection