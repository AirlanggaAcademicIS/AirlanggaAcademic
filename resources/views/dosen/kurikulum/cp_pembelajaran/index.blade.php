@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Capaian Pembelajaran
@endsection

@section('contentheader_title')
Capaian Pembelajaran
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
  <div class="box box-info">
<div class="box-body">

</div>
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->
  <a href="{{url('dosen/kurikulum/capaian-pembelajaran/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Capaian</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table tabl0e-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Prodi</th>      
      <th style="text-align:center">Nama Kategori Capaian Pembelajaran</th>
      <th style="text-align:center">Kode Capaian Pembelajaran</th>
      <th style="text-align:center">Deskripsi</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($capaianpembelajaran as $i => $cp) 
    <tr>
      <td width="5%" style="text-align:center" >{{ $i+1 }}</td>
      <td width="15%" style="text-align:center">{{$cp->prodi['nama_prodi']}}</td>
      <td width="15%" style="text-align:center">{{$cp->kategori['nama_cpem']}}</td>
      <td width="15%" style="text-align:center">{{$cp->kode_cpem}}</td>
      <td width="30%" style="text-align:center">{{$cp->deskripsi_cpem}}</td>
      <td width="10%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus data ini?');" href="{{url('/dosen/kurikulum/capaian-pembelajaran/'.$cp->id_cpem.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/dosen/kurikulum/capaian-pembelajaran/'.$cp->id_cpem.'/edit/')}}" class="btn btn-warning btn-xs">
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

@endsection