@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Daftar Dokumentasi Kegiatan Akademik
@endsection

@section('contentheader_title')
Daftar Dokumentasi Kegiatan Akademik
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
      <th style="text-align:center">Kode Dokumentasi</th>
      <th style="text-align:center">Nomor Kegiatan</th>      
      <th style="text-align:center">Evaluasi Kegiatan</th>
      <th style="text-align:center">Dokumentasi</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($dokumentasi as $i => $dokumen) 
    <tr>
      <td width="10%">{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$dokumen->id_dokumentasi}}</td>
      <td width="10%" style="text-align:center">{{$dokumen->kegiatan_id}}</td>
      <td width="20%" style="text-align:center">{{$dokumen->lesson_learned}}</td>
      <td width="10%" style="text-align:center">{{$dokumen->url_foto}}</td>
      <td width="10%" style="text-align:center" ><a onclick="return publish('Anda yakin untuk menghapus dokumentasi ini?');" href="{{url('/karyawan/pengelolaan-kegiatan/dokumentasi/'.$dokumen->id_dokumentasi.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Delete</a>
        <a href="{{url('/karyawan/pengelolaan-kegiatan/dokumentasi/'.$dokumen->id_dokumentasi.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada dokumentasi</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection