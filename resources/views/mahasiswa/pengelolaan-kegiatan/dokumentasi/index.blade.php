@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Dokumentasi
@endsection

@section('contentheader_title')
Dokumentasi
@endsection

@section('main-content')
<!-- include summernote css/js-->
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
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->
  <a href="{{url('mahasiswa/dokumentasi/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah LPJ</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Kode Dokumentasi</th>
      <th style="text-align:center">Nama Kegiatan</th>
      <th style="text-align:center">Tujuan Kegiatan</th>
      <th style="text-align:center">Tanggal Kegiatan</th>
      <th style="text-align:center">Ruang Pelaksanaan</th>
      <th style="text-align:center">Evaluasi Kegiatan</th>
      <th style="text-align:center">Dokumentasi</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($dokumentasi as $i => $dok) 
    <tr>
      <td width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td width="10%" style="text-align:center">{{$dok->id_dokumentasi}}</td>
      <td width="20%" style="text-align:center">{{$dok->namaKegiatan['nama']}}</td>
      <td width="20%" style="text-align:center">{{$dok->namaKegiatan['tujuan']}}</td>
      <td width="20%" style="text-align:center">{{$dok->namaKegiatan['tglpelaksanaan']}}</td>
      <td width="20%" style="text-align:center">{{$dok->namaKegiatan['rpelaksanaan']}}</td>
      <td width="25%" style="text-align:center">{{$dok->lesson_learned}}</td>
      <td width="20%" style="text-align:center"><img src="{{URL::asset('/img/dokumentasi/'.$dok->url_foto)}}" height="100px" width="100px" hspace="5px" vspace="2px"></td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus gambar ini?');" href="{{url('/kegiatan/dokumentasi/'.$dok->id_dokumentasi.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/kegiatan/dokumentasi/'.$dok->id_dokumentasi.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        <a href="{{url('/mahasiswa/pengelolaan-kegiatan/detail-pengajuan/'.$dok->kegiatan_id.'')}}" class="btn btn-success btn-xs"> View Detail</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada Dokumentasi</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection