@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Capaian Program
@endsection

@section('contentheader_title')
Capaian Program
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
<div class="box box-danger">
<div class="box-body">
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->
  <a href="{{url('dosen\kurikulum\cp_program\create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Capaian Program</a>
</div>
<div style="overflow: auto">
<table id="data-table" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Prodi</th>      
      <th style="text-align:center">Capaian Program Spesifik</th>
      <th style="text-align:center">Dimensi Capaian Umum</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($cp_program as $i => $cp) 
    <tr>
      <td width="2%"style="text-align:center">{{ $i+1 }}</td>
      <td width="5%" style="text-align:center">{{$cp->prodi['nama_prodi']}}</td>
      <td width="20%" style="text-align:left">{{$cp->capaian_program_spesifik}}</td>
      <td width="20%" style="text-align:leftr">{{$cp->dimensi_capaian_umum}}</td>
      <td width="10%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus capaian program ini?');" href="{{url('/dosen/kurikulum/cp_program/'.$cp->id.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('dosen/kurikulum/cp_program/'.$cp->id.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada data</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>
</div>
</div>


@endsection

@section('code-footer')

<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#data-table').DataTable(); 
});
</script>
@endsection
