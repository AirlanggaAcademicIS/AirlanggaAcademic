@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Data Dosen
@endsection

@section('contentheader_title')
Data Dosen
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
  <a href="{{url('/dosen/biodata-dosen/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Data Dosen</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NIP</th>      
      <th style="text-align:center">Nama Dosen</th>
      <th style="text-align:center">Alamat Dosen</th>
      <th style="text-align:center">Tanggal Lahir</th>
      <th style="text-align:center">Status Dosen</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($dosen as $i => $dosen) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$dosen->nip}}</td>
      <td width="15%" style="text-align:center">{{$dosen->nama_dosen}}</td>
      <td width="20%" style="text-align:center">{{$dosen->alamat_dosen}}</td>
      <td width="10%" style="text-align:center">{{$dosen->tanggal_lahir_dosen}}</td>      
      <td width="10%" style="text-align:center">{{$dosen->status_dosen}}</td>
      <td width="20%" style="text-align:center" > <!-- <a onclick="return confirm('Anda yakin untuk menghapus penelitian ini?');" href="{{url('/dosen/biodata-dosen/'.$dosen->nip.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a> -->
        <a href="{{url('/dosen/biodata-dosen/'.$dosen->nip.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum Ada Data Dosen</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection