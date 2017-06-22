@extends('adminlte::layouts.app')

@section('code-header')


@endsection
karyawan

@section('htmlheader_title')
  Silabus 
@endsection

@section('contentheader_title')
Silabus
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
<div class="flash-message" style="margin-left: -16px;margin-right: -16px; margin-top: 13px;">
  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(Session::has('alert-' . $msg))
<div class="alert alert-{{ $msg }}">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p class="" style="border-radius: 0">{{ Session::get('alert-' . $msg) }}</p>
</div>
  {!!Session::forget('alert-' . $msg)!!}
  @endif
  @endforeach
</div>

<div class="box box-danger">
<div class="box-body">

<table class="table table-bordered table-striped" id="data-table" style="width:100%">
  <thead>
    <tr>
      <th>Nomer</th>
      <th style="text-align:center">Kode Mata Kuliah</th>
      <th style="text-align:center">Nama Mata Kuliah</th>     
      <th style="text-align:center">Aksi</th>
    </tr>
  </thead>

  <tbody>
  @foreach($mata_kuliah as $i => $mk)
  <tr>
    <td width="2%" style="text-align-center">{{$i+1}}</td>
    <td style="text-align:center"><a href="{{url('/mahasiswa/kurikulum/silabus/edit/'.$mk->id_mk)}}">{{$mk->kode_matkul}}</a></td>
    <td width="40%" style="text-align:center">{{$mk->nama_matkul}}</td>
    <td width="30%" style="text-align:center">
      <a target="__blank" href="{{url('/mahasiswa/kurikulum/silabus/pdf/'.$mk->id_mk)}}" class="btn btn-info btn-xs">
        <i class="fa fa-file-text-o" aria-hidden="true"></i> Download PDF</a>
    </td>
    @endforeach 
  </tbody>                                
</table>
</div>
</div>
@endsection

@section('code-footer')
<script type="text/javascript">
  $(document).ready(function(){
      $('#data-table').DataTable();
  });
</script>  
@endsection