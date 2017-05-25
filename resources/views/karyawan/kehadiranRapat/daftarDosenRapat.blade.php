@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Fitur 
@endsection

@section('contentheader_title')
DAFTAR PESERTA RAPAT
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
      <th style="text-align:center">No</th>
      <th style="text-align:center">Nama Rapat</th>
      <th style="text-align:center">Tempat</th>
      <th style="text-align:center">Tanggal</th>      
      <th style="text-align:center">List Peserta</th>
    </tr>
    </thead>
  <tbody>
   @forelse($notulensi as $i => $dosen_rapat) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="40%" style="text-align:center">{{$dosen_rapat->nama_rapat}}</td>
      <td width="25%" style="text-align:center">{{$dosen_rapat->nama_ruang}}</td>
      <td width="25%" style="text-align:center">{{$dosen_rapat->waktu_pelaksanaan}}</td>
      <td ><a href="{{url('notulensi/cetakPDF/'.$dosen_rapat->id_notulen)}}" class="btn btn-primary btn-xs">
        <i class="fa fa-pencil-square-o"></i> Cetak</a></td>
    </tr>
     @empty

    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')
  
@endsection