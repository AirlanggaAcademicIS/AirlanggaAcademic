@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Data Mahasiswa Skripsi
@endsection

@section('contentheader_title')
Monitoring Skripsi
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

<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead><h3>Data Skripsi</h3>
    <tr>
      <tr><td width="15%">Nama</td><td>{{$mhs->nama_mhs}}</td></tr>
      <tr><td width="15%">NIM</td><td>{{$mhs->nim_id}}</td></tr>
      <tr><td width="15%">KBK</td><td>{{$skripsi->kbk['jenis_kbk']}}</td></tr>
      <tr><td width="15%">Judul</td><td>{{$skripsi->Judul}}</td></tr>
      <tr><td width="15%">Dosen Pembimbing 1</td><td>{{$dosen1->nama_dosen}}</td></tr>
      <tr><td width="15%">Dosen Pembimbing 2</td><td>{{$dosen2->nama_dosen}}</td></tr>
      <tr><td width="15%">Mulai Pengerjaan</td><td>
      @if($skripsi->tgl_sidangpro==null)
      Belum
      @else
      {{$skripsi->tgl_sidangpro}}
      @endif</td></tr>
      <tr><td width="15%">Selesai Pengerjaan</td><td>
      @if($skripsi->tgl_sidangskrip==null)
      Belum
      @else
      {{$skripsi->tgl_sidangskrip}}
      @endif
      </td></tr>
    </tr>
        </thead>
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection