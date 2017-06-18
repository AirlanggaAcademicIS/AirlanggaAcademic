@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Karyawan
@endsection

@section('contentheader_title')
Karyawan
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
  <a href="{{url('/karyawan/pla/karyawan/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Karyawan</a>
</div>
<div style="padding:10px">
<table id="data-table" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NIP Karyawan</th>      
      <th style="text-align:center">Nama Karyawan</th>
      <th style="text-align:center">No Telp Karyawan</th>
      <th style="text-align:center">Email Karyawan</th>
      <th style="text-align:center">Prodi</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($karyawan as $i => $bio) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td style="text-align:center">{{$bio->nip_petugas}}</td>
      <td width="15%" style="text-align:center">{{$bio->nama_petugas}}</td>
      <td width="20%" style="text-align:center">{{$bio->no_telp_petugas}}</td>
      <td width="10%" style="text-align:center">{{$bio->email_petugas}}</td>
      <td width="10%" style="text-align:center">{{$bio->prodi['nama_prodi']}}</td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus karyawan ini?');" href="{{url('/karyawan/pla/karyawan/'.$bio->nip_petugas.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/karyawan/pla/karyawan/'.$bio->nip_petugas.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="8"><center>Belum ada Karyawan</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')
<!-- <script src="{{asset('js/jquery.dataTables.min.js')}}"></script> -->
<script type="text/javascript"> 
    $(document).ready(function(){ 
        $('#data-table').DataTable(); 
    }); 
</script> 
@endsection