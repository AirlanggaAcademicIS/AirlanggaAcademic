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
    <a href="{{url('/karyawan/kurikulum/mata-kuliah/create')}}" type="button" class="btn btn-info btn-md" >
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
        <th style="vertical-align: center; text-align:center">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach($matkul as $i => $mk)
        <tr>
          <td style="text-align: center;">{{ $i+1 }}</td>
          <td style="text-align: center;">
          {{$mk->jenisMatkul['jenis_mk']}}
          </td>
          <td style="text-align: center;">{{$mk->kode_matkul}}</td>
          <td style="text-align: center;">{{$mk->nama_matkul}}</td>
          <td style="text-align: center;">{{$mk->sks}}</td>      
          <td style="text-align: center;">{{$mk->deskripsi_matkul}}</td>
          <td style="text-align:center" >
            <div class="row">
              <div class="col-md-3">
                <a style="width: 110%; margin-bottom: 5px;" onclick="return confirm('Anda yakin untuk menghapus mata kuliah ini?');" href="{{url('/karyawan/kurikulum/mata-kuliah/delete/'.$mk->id_mk)}}" class="btn btn-danger btn-xs">
                <i class="fa fa-trash-o"></i> Hapus</a>                
              </div>              
              <div class="col-md-3">
                <a style="width: 100%; margin-bottom: 5px;" href="{{url('/karyawan/kurikulum/mata-kuliah/edit/'.$mk->id_mk)}}" class="btn btn-warning btn-xs">
                <i class="fa fa-pencil-square-o"></i> Edit</a>                
              </div>
              <div class="col-md-3">
                <a target="_blank" style="width: 100%; margin-bottom: 5px;" href="{{url('/karyawan/kurikulum/mata-kuliah/print/'.$mk->id_mk)}}" class="btn btn-primary btn-xs">
                <i class="fa fa-print"></i> PDF</a>                                
              </div>
            </div>
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