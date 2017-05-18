@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Data Mahasiswa Skripsi
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
  <a href="{{url('/karyawan/monitoring-skripsi/skripsi/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Skripsi</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NIM</th>      
      <th style="text-align:center">KBK</th>
      <th style="text-align:center">Judul</th>
      <th style="text-align:center">NIP Petugas</th>
      <th style="text-align:center">Dosen Pembimbing 1</th>
      <th style="text-align:center">Dosen Pembimbing 2</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($skripsi as $i => $skrip) 
    <tr>
      <td width="10%" style="text-align:center">{{ $i+1 }}</td>
      <td width="10%" style="text-align:center">{{$skrip->NIM_id}}</td>
      <td width="10%" style="text-align:center">{{$skrip->kbk_id}}</td>
      <td width="20%" style="text-align:center">{{$skrip->Judul}}</td>
      <td width="10%" style="text-align:center">{{$skrip->nip_petugas_id}}</td>
      <td width="10%" style="text-align:center">{{$skrip->nip_id1}}</td>
      <td width="10%" style="text-align:center">{{$skrip->nip_id2}}</td>
      <td width="10%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus data skripsi ini?');" href="{{url('/karyawan/monitoring-skripsi/skripsi/'.$skrip->id_skripsi.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/karyawan/monitoring-skripsi/skripsi/'.$skrip->id_skripsi.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada data skripsi</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection