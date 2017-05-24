@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Publikasi
@endsection

@section('contentheader_title')
Publikasi
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
      <th style="text-align:center">Nomer Kegiatan</th>
      <th style="text-align:center">Nama Kegiatan</th>      
      <th style="text-align:center">Tempat</th>
      <th style="text-align:center">Tanggal</th>
      <th style="text-align:center">Poster</th>
      <th style="text-align:center">Pilihan</th>
    </tr>
    </thead>
  <tbody>
   @forelse($publikasi as $i => $publik) 
    <tr>
      <td width="10%">{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$publik->id_kegiatan}}</td>
      <td width="10%" style="text-align:center">{{$publik->nama}}</td>
      <td width="20%" style="text-align:center">{{$publik->rpengajuan}}</td>
      <td width="10%" style="text-align:center">{{$publik->tglpelaksanaan}}</td>
      <td width="10%" style="text-align:center">{{$publik->url_poster}}</td>
      <td width="10%" style="text-align:center" >
        <a href="{{url('/mahasiswa/kegiatan/publikasi/'.$publik->id_kegiatan.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada publikasi</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection