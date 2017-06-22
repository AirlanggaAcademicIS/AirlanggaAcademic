@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Biodata Mahasiswa
@endsection

@section('contentheader_title')
Biodata Mahasiswa
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
  <a href="{{url('/mahasiswa/biodata-mahasiswa/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Biodata Mahasiswa</a>

</div> -->
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NIM</th>      
      <th style="text-align:center">Nama</th>
      <th style="text-align:center">Angkatan</th>
      <th style="text-align:center">Email</th>
      <th style="text-align:center">No. HP</th>
      <th style="text-align:center">TTL</th>
      <th style="text-align:center">Alamat</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($biodatamahasiswa as $i => $bio) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="15%" style="text-align:center">{{$bio->nim_id}}</td>
      <td width="20%" style="text-align:center">{{$bio->nama_mhs}}</td>
      <td width="10%" style="text-align:center">{{$bio->angkatan}}</td>
      <td width="20%" style="text-align:center">{{$bio->email_mhs}}</td>
      <td width="10%" style="text-align:center">{{$bio->no_hp}}</td>
      <td width="15%" style="text-align:center">{{$bio->kota_lahir}}
      @if($bio->tanggal_lahir != null)
      , {!!App\Helpers\GeneralHelper::indonesianDateFormat($bio->tanggal_lahir)!!}
      @endif
      </td>
      <td width="20%" style="text-align:center">{{$bio->alamat_tinggal}}</td>
      <td width="15%" style="text-align:center" >
      @if($bio->nim_id == Auth::user()->username)
        <a href="{{url('/mahasiswa/biodata-mahasiswa/'.$bio->nim_id.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Input/Edit</a>
      @endif
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="12"><center>Belum ada biodata</center></td>
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