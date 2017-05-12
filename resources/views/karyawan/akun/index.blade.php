@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
akunmahasiswa
@endsection

@section('contentheader_title')
akunmahasiswa
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
      <th style="text-align:center">nlp_id</th>      
      <th style="text-align:center">Fakultas</th>
      <th style="text-align:center">Program Studi</th>
      <th style="text-align:center">Action</th>

    </tr>
    </thead>
  <tbody>
   @forelse($akunmahasiswa as $i => $bio) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$bio->nim}}</td>
      <td width="15%" style="text-align:center">{{$bio->nlp_id}}</td>
      <td width="25%" style="text-align:center">Fakultas Sains dan Teknologi</td>
      <td width="15%" style="text-align:center">S1 Sistem Informasi</td>
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

@endsection