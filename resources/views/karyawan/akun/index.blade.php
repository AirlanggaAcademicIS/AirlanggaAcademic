@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Kelola Akun Mahasiswa
@endsection

@section('contentheader_title')
Kelola Akun Mahasiswa
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
  <a href="{{url('/karyawan/akun/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Akun Mahasiswa</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NIM</th>  
      <th style="text-align:center">Nama Mahasiswa</th>   
      <th style="text-align:center">Dosen Wali</th>
      <th style="text-align:center">Angkatan</th>   
      <th style="text-align:center">E-mail Mahasiswa</th>    
      <th style="text-align:center">Fakultas</th>
      <th style="text-align:center">Program Studi</th>
      <th style="text-align:center">Foto Mahasiswa</th> 
      <th style="text-align:center">Action</th>

    </tr>
    </thead>
  <tbody>
   @forelse($akunmahasiswa as $i => $bio) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="10%" style="text-align:center">{{$bio->nim}}</td>
      <td width="10%" style="text-align:center">{{$bio->nama_mhs}}</td>
      @if (($bio->nip_id)!= '')
      <td width="10%" style="text-align:center">{{$bio->nama_dosen}}</td>
      @else
      <td width="10%" style="text-align:center">Belum ada dosen wali</td>
      @endif
      <td width="10%" style="text-align:center">{{$bio->angkatan}}</td>
      <td width="10%" style="text-align:center">{{$bio->email_mhs}}</td>
      <td width="20%" style="text-align:center">Fakultas Sains dan Teknologi</td>
      <td width="15%" style="text-align:center">S1 Sistem Informasi</td>
      <td width="15%" style="text-align:center"><img src="{{URL::asset('/img/foto_mhs/'.$bio->foto_mhs)}}" height="100px" width="80px" hspace="5px" vspace="2px" alt="gambar" style="border:2px solid gray" class="img-rounded" ></td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus akun ini?');" href="{{url('/karyawan/akun/'.$bio->nim.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/karyawan/akun/'.$bio->nim.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="7"><center>Belum ada akun</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>

<script src="http://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>
@endsection