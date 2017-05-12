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
</div>
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->
  <a href="{{url('dosen/kurikulum/cp_pembelajaran/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Capaian</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">ID Prodi</th>      
      <th style="text-align:center">ID Kategori Capaian Pembelajaran</th>
      <th style="text-align:center">Kode Capaian Pembelajaran</th>
      <th style="text-align:center">Deskripsi</th>
    </tr>
    </thead>
  <tbody>
   @forelse($capaianpembelajaran as $i => $cp) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="20%" style="text-align:center">{{$cp->prodi_id}}</td>
      <td width="15%" style="text-align:center">{{$cp->kategori_cpem_id}}</td>
      <td width="20%" style="text-align:center">{{$cp->kode_cpem}}</td>
      <td width="20%" style="text-align:center">{{$cp->deskripsi_cpem}}</td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus data ini?');" href="{{url('/dosen/kurikulum/capaian-pembelajaran/'.$cp->id_cp.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/dosen/kurikulum/capaian-pembelajaran/'.$cp->id_cp.'/edit/')}}" class="btn btn-warning btn-xs">
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

@endsection

@section('code-footer')

@endsection