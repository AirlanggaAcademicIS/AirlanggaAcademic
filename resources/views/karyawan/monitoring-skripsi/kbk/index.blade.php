@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
KBK
@endsection

@section('contentheader_title')
KBK
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
  <a href="{{url('/karyawan/monitoring-skripsi/KBK/create')}}" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah KBK</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No</th>
      <th style="text-align:center">Jenis KBK</th> 
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($kbk as $i => $kbk) 
    <tr>
      <td style="text-align:center">{{ $i+1 }}</td>
      <td style="text-align:center">{{$kbk->jenis_kbk}}</td>
      <td style="text-align:center" >
        <a onclick="return confirm('Anda yakin untuk menghapus KBK ini?');" href="{{url('/karyawan/monitoring-skripsi/KBK/'.$kbk->id_kbk.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/karyawan/monitoring-skripsi/KBK/'.$kbk->id_kbk.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada KBK</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection