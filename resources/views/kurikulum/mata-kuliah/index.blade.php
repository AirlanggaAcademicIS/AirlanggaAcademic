@extends('adminlte::layouts.app')

@section('code-header')

@endsection

@section('htmlheader_title')
Mata Kuliah
@endsection

@section('contentheader_title')
Mata Kuliah
@endsection

@section('main-content')
<!-- include summernote css/js-->

<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->
    <a href="{{url('/kurikulum/mata-kuliah/create')}}" type="button" class="btn btn-info btn-md" >
        <i class="fa fa-plus-square"></i> Tambah Mata Kuliah
    </a>
</div>
<div style="overflow: auto">
<table class="table" id="data-table" style="width:100%">
    <thead>
        <tr>
      <th style="vertical-align: center; text-align:center">No.</th>
      <th style="vertical-align: center; text-align:center">Jenis Matkul</th>      
      <th style="vertical-align: center; text-align:center">Kode</th>      
      <th style="vertical-align: center; text-align:center">Nama</th>
      <th style="vertical-align: center; text-align:center">SKS</th>
      <th style="vertical-align: center; text-align:center">Deskripsi Matkul</th>
      <th style="vertical-align: center; text-align:center">Capaian Matkul</th>
      <th style="vertical-align: center; text-align:center">Penilaian Matkul</th>
      <th style="vertical-align: center; text-align:center">Pokok Pembahasan</th>      
      <th style="vertical-align: center; text-align:center">Pustaka Utama</th>            
      <th style="vertical-align: center; text-align:center">Pustaka Pendukung</th>                  
      <th style="vertical-align: center; text-align:center">Syarat SKS</th>                        
      <th style="vertical-align: center; text-align:center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($matkul as $i => $mk)
        <tr>
          <td>{{ $i+1 }}</td>
          <td>
          {{$mk->jenisMatkul['jenis_mk']}}
          </td>
          <td>{{$mk->kode_matkul}}</td>
          <td>{{$mk->nama_matkul}}</td>
          <td>{{$mk->sks}}</td>      
          <td>{{$mk->deskripsi_matkul}}</td>
          <td>{{$mk->capaian_matkul}}</td>
          <td>{{$mk->penilaian_matkul}}</td>
          <td>{{$mk->pokok_pembahasan}}</td>      
          <td>{{$mk->pustaka_utama}}</td>            
          <td>{{$mk->pustaka_pendukung}}</td>
          <td>{{$mk->syarat_sks}}</td>                  
          <td style="text-align:center" >
                <a style="width: 100%; margin-bottom: 5px;" onclick="return confirm('Anda yakin untuk menghapus mata kuliah ini?');" href="{{url('/kurikulum/mata-kuliah/'.$mk->id.'/delete/')}}" class="btn btn-danger btn-xs">
                <i class="fa fa-trash-o"></i> Hapus</a>
                <a style="width: 100%; margin-bottom: 5px;" href="{{url('/kurikulum/mata-kuliah/'.$mk->id.'/edit/')}}" class="btn btn-warning btn-xs">
            <i class="fa fa-pencil-square-o"></i> Edit</a>
          </td>
        </tr>
        @endforeach

    </tbody>
</table>
</div>

@stop



@section('code-footer')

<!-- <script src="{{asset('js/jquery.dataTables.min.js')}}"></script> -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#data-table').DataTable();
    });
</script>

@endsection