@extends('adminlte::layouts.app')

@section('code-header')

 
@endsection

@section('htmlheader_title')
Download Dokumen
@endsection

@section('contentheader_title')
Download Dokumen
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
<!-- <div style="margin-bottom: 10px">
  <a href="{{url('/mahasiswa/bdata-mahasiswa/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah bdata Mahasiswa</a>

</div> -->
<div style="padding:10px">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Dokumen</th>      
      <th style="text-align:center">Tanggal Dibagikan</th>
      <th style="text-align:center">Pengupload</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($dokumen as $i => $b) 
    <tr>
      <td style="text-align:center">{{ $i+1 }}</td>
      <td style="text-align:center">{{$b->nama}}</td>
      <td style="text-align:center">{{$b->tgl_upload}}</td>
      <td  style="text-align:center">{{$b->petugas['nama_petugas']}}</td>
      <td style="text-align:center">
        <a href="{{url('mahasiswa/'.$b->id_dokumen.'/Download_Dokumen')}}" class="btn btn-success btn-xs">
        <i class="fa fa-pencil-square-o"></i> Download</a>
      
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="12"><center>Belum Ada Dokumen yang Dibagikan</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')
<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>
@endsection