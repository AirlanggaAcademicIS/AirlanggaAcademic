@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Konsultasi
@endsection

@section('contentheader_title')
Data Konsultasi Mahasiswa
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

<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NIM</th>
      <th style="text-align:center">Nama</th>
      <th style="text-align:center">Status</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
  @forelse($dis as $d)
   @foreach($konsultasi as $i => $konsul)
   @if($d->skripsi_id == $konsul->skripsi_id)
    <tr>
      <td width="5%">{{ $i+1 }}</td>
      <td width="10%" style="text-align:center">{{$konsul->nim_id}}</td>
      <td width="10%" style="text-align:center">{{$konsul->nama_mhs}}</td>
      <td width="20%" style="text-align:center">@if($konsul->is_verified==null)
      {{'Belum Diverifikasi'}}
      @else
      {{'Sudah Diverifikasi'}}
      @endif</td>

     
      <td width="20%" style="text-align:center" >
        <a href="{{url('/karyawan/monitoring-skripsi/konsultasi/'.$konsul->nim_id.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Rincian</a>
        </td>
    </tr>
    @break
    @endif
    @endforeach
    @empty
        
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection