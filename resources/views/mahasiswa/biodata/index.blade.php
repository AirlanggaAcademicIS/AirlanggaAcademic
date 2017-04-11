@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Biodata
@endsection

@section('contentheader_title')
Biodata
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
  <a href="{{url('/mahasiswa/biodata/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Biodata</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NIM</th>      
      <th style="text-align:center">Nama</th>
      <th style="text-align:center">Alamat</th>
      <th style="text-align:center">Provinsi</th>
      <th style="text-align:center">Tanggal Masuk</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($biodata as $i => $bio) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$bio->nim}}</td>
      <td width="15%" style="text-align:center">{{$bio->nama}}</td>
      <td width="20%" style="text-align:center">{{$bio->alamat}}</td>
      <td width="10%" style="text-align:center">{{$bio->provinsi}}</td>
      <td width="10%" style="text-align:center"> {!!App\Helpers\GeneralHelper::indonesianDateFormat($bio->tanggal_masuk)!!}</td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus biodata ini?');" href="{{url('/mahasiswa/biodata/'.$bio->id.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/mahasiswa/biodata/'.$bio->id.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada biodata</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection