@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Konsultasi
@endsection

@section('contentheader_title')
Konsultasi
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
  <a href="{{url('/mahasiswa/monitoring-skripsi/konsultasi/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Konsultasi</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Tanggal Konsultasi</th>      
      <th style="text-align:center">Catatan Konsultasi</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($konsultasi as $i => $konsul) 
    <tr>
      <td width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td width="15%" style="text-align:center">{{$konsul->tgl_konsul}}</td>
      <td width="20%" style="text-align:center">{{$konsul->catatan_konsul}}</td>
     
      <td width="20%" style="text-align:center" >
      <a onclick="return confirm('Anda yakin untuk menghapus konsultasi ini?');" href="{{url('/mahasiswa/monitoring-skripsi/konsultasi/'.$konsul->id_konsultasi.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/mahasiswa/monitoring-skripsi/konsultasi/'.$konsul->id_konsultasi.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada Konsultasi</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection