@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
  Silabus 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Nama konten
@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
<div class="form-group">
<a href="{{url('/dosen/kurikulum/silabus/create')}}" class="btn btn-info btn-sm">Tambah Silabus</a>
</div>

<div class="box box-primary">
<div class="box-body">

<table id="example2" class="table table-bordered table-striped">
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
    <td><a href="/kurikulum/detail-silabus">{{$mk->kode_matkul}}</a></td>
    <td>{{$mk->nama_matkul}}</td>
    <td width="30%" style="text-align:center">
    <a onclick="return confirm('Anda yakin untuk menghapus Kategori ini?');" href="{{url('/dosen/kurikulum/silabus'.$mk->id_mk.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Delete</a>
    <a class="btn btn-info btn-xs">
        <i class="fa fa-download-square-o"></i> Download</a>
        </td>
    @endforeach 
  </tbody>                                
</table>
</div>
</div>
@endsection

@section('code-footer')
  



@endsection