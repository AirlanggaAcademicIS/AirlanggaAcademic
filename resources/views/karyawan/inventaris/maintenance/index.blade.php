@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Maintenance
@endsection

@section('contentheader_title')
Maintenance
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
  </div>
<div style="overflow: auto">
<table class="table" id="myTable1" style="width:100%">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NIP Petugas</th> 
      <th style="text-align:center">Nama Asset</th>
      <th style="text-align:center">Nama Pemaintenance</th>
      <th style="text-align:center">Waktu Maintenance</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($maintenance as $i => $main) 
    <tr>
      <td width="10%" style="text-align:center">{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$main->nip_petugas_id}}</td>
      <td width="20%" style="text-align:center">{{$main->asset_yang_dimaintenance}}</td>
      <td width="10%" style="text-align:center">{{$main->nama_pemaintenance}}</td>
      <td width="10%" style="text-align:center">{{ App\Helpers\GeneralHelper::indonesianDateFormat( $main->waktu_maintenance) }}</td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus data ini?');" href="{{url('/inventaris/maintenance/'.$main->id_maintenance.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>

        <a href="{{url('inventaris/maintenance/'.$main->id_maintenance.'/viewDetail/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-eye"></i> View Detail</a>

        <a href="{{url('/inventaris/maintenance/'.$main->id_maintenance.'/edit-maintenance/')}}" class="btn btn-success btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="9"><center>Belum ada data</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#myTable1').DataTable();
});
</script>

@endsection