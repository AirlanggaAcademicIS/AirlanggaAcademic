@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Daftar Konfirmasi Kegiatan
@endsection

@section('contentheader_title')
Daftar Konfirmasi Kegiatan
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

<!--Tabel LPJ-->
<div style="overflow: auto">
<h2>Daftar Laporan Penanggung Jawaban Kegiatan</h2>
<table id="lpjTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th width="10%" style="text-align:center">No</th>
      <th width="20%" style="text-align:center">Nama LPJ</th>      
      <th width="10%" style="text-align:center">Tanggal Pengajuan</th>
      <th width="10%" style="text-align:center">Tanggal Pelaksanaan</th>
      <th width="20%" style="text-align:center">Tindakan</th>
     </tr>
    </thead>
  <tbody>
   @forelse($konfirmasiLPJ as $i => $konfirmasi_kegiatan) 
    <tr>
      <td width="10%" style="text-align:center">{{$i+1}}</td>
      <td width="20%" style="text-align:center">{{ $konfirmasi_kegiatan->nama }}</td>
      <td width="10%" style="text-align:center">{{$konfirmasi_kegiatan->tglpengajuan}}</td>
      <td width="10%" style="text-align:center">{{$konfirmasi_kegiatan->tglpelaksanaan}}</td>
      <td width="20%" style="text-align:center">
        <a href="{{url('/karyawan/pengelolaan-kegiatan/detail-pengajuan/'.$konfirmasi_kegiatan->id_kegiatan.'/daftar-konfirmasi/lpj')}}" class="btn btn-success btn-xs"> View Detail</a>
      </td>
    </tr>


     @empty
        <tr>
          <td colspan="6"><center>Belum ada lpj yang dikonfirmasi</center></td>
        </tr>
   
    @endforelse
  </tbody>
</table>
</div>



@endsection

@section('code-footer')

@endsection
