@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Pengmas
@endsection

@section('contentheader_title')
Pengmas
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

  <!-- Href ini biar diklik masuk ke form tambah -->
  
<div  style="margin-bottom: 20px" class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Halaman Validasi
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="jurnal">Jurnal</a></li>
      <li><a href="penelitian">Penelitian</a></li>
      <li><a href="konferensi">Konferensi</a></li>
    </ul>
  </div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Kegiatan</th>      
      <th style="text-align:center">Tempat Kegiatan</th>
      <th style="text-align:center">Tanggal Kegiatan</th>
      <th style="text-align:center">File Pengmas</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($pengmas as $i => $pengmas) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$pengmas->nama_kegiatan}}</td>
      <td width="15%" style="text-align:center">{{$pengmas->tempat_kegiatan}}</td>
      <td width="20%" style="text-align:center">{{$pengmas->tanggal_kegiatan}}</td>
      <td width="20%" style="text-align:center" > <a href="{{URL::asset('/img/dosen/'.$pengmas->file_pengmas)}}" class="btn btn-primary btn-xs">
        <i class="fa fa-pencil-square-o"></i> Download</a> </td>
      <td width="20%" style="text-align:center" ><a href="{{url('/dosen/validasi/pengmas/'.$pengmas->kegiatan_id.'/terima/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-pencil-square-o"></i>Terima</a>
        <a href="{{url('/dosen/validasi/pengmas/'.$pengmas->kegiatan_id.'/tolak/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i>Tolak</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada pengmas</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection