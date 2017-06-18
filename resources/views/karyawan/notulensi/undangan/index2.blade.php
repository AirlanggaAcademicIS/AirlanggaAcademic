@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Undangan Rapat
@endsection

@section('contentheader_title')
Undangan Rapat
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
  <a href="{{url('tambahrapat')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Rapat</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Rapat</th>
      <th style="text-align:center">Waktu Pelaksanaan</th>
      <th style="text-align:center">Tempat</th>
      <th style="text-align:center">Agenda</th>      
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($undangan as $i => $unkar)
    <tr>
      <td width="5%" style="text-align:center"> {{ $i+1 }}</td>
      <!-- <td width="5%" style="text-align:center">{{$unkar->id_notulen}}</td> -->
      <td width="20%" style="text-align:center">{{$unkar->nama_rapat}}</td>
      <td width="20%" style="text-align:center">{{$unkar->waktu_pelaksanaan}}</td>
      <td width="20%" style="text-align:center">{{$unkar->nama_ruang}}</td>
      <td width="20%" style="text-align:center">{{$unkar->agenda_rapat}}</td>
      <td width="20%" style="text-align:center">
        <a href="{{url('formundangan/'.$unkar->id_notulen.'/undang')}}" class="btn btn-success btn-xs">
        <i class="fa fa-book"></i> Kirim Undangan</a>
        <a href="{{url('formundangan2/'.$unkar->id_notulen.'/undang')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-book"></i> Kirim Email</a>
        <a onclick="return confirm('Anda yakin untuk menghapus rapat ini?');" href="{{url('formundangan/'.$unkar->id_notulen.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash"></i> Hapus Rapat</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada undangan</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection