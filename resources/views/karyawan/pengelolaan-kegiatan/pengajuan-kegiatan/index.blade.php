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

<!--Tabel Proposal-->
<div style="overflow: auto">
<h2>Tabel Pengajuan Proposal Kegiatan</h2>

<table id="proposalTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th width="10%" style="text-align:center">ID Proposal</th>
      <th width="20%" style="text-align:center">Nama Proposal</th>      
      <th width="10%" style="text-align:center">Tanggal Pengajuan</th>
      <th width="10%" style="text-align:center">Tanggal Pelaksanaan</th>
      <th width="30%" style="text-align:center">Catatan Perbaikan</th>
      <th width="20%" style="text-align:center">Tindakan</th>
    </tr>
    </thead>
  <tbody>
   @forelse($pengajuanKegiatan as $i => $pengajuan_kegiatan) 
    <tr>
      <td width="10%" style="text-align:center">{{ $pengajuan_kegiatan->id_kegiatan }}</td>
      <td width="20%" style="text-align:center">{{$pengajuan_kegiatan->nama}}</td>
      <td width="10%" style="text-align:center">{{$pengajuan_kegiatan->tglpengajuan}}</td>
      <td width="10%" style="text-align:center">{{$pengajuan_kegiatan->tglpelaksanaan}}</td>
      <td width="30%" style="text-align:center">
      <textarea></textarea>
      </td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus akun ini?');" href="{{url('/karyawan/pengelola-kegiatan/pengajuan-kegiatan'.$pengajuan_kegiatan->id_kegiatan.'/delete/')}}" class="btn btn-success btn-xs">
        <i class="fa fa-trash-o"></i> Konfirmasi</a>
        <a href="{{url('/karyawan/pengelola-kegiatan/pengajuan-kegiatan'.$pengajuan_kegiatan->id_kegiatan.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-pencil-square-o"></i> Tolak</a>
        </td>
       
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada pengajuan proposal</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

<!--Tabel LPJ-->
<div style="overflow: auto">
<h2>Tabel Pengajuan Laporan Penanggung Jawaban Kegiatan</h2>
<table id="lpjTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th width="10%" style="text-align:center">ID LPJ</th>
      <th width="20%" style="text-align:center">Nama LPJ</th>      
      <th width="10%" style="text-align:center">Tanggal Pengajuan</th>
      <th width="10%" style="text-align:center">Tanggal Pelaksanaan</th>
      <th width="30%" style="text-align:center">Catatan Perbaikan</th>
      <th width="20%" style="text-align:center">Tindakan</th>
    </tr>
    </thead>
  <tbody>
   @forelse($pengajuanKegiatan as $i => $pengajuan_kegiatan) 
    <tr>
      <td width="10%" style="text-align:center">{{ $pengajuan_kegiatan->id_kegiatan }}</td>
      <td width="20%" style="text-align:center">{{$pengajuan_kegiatan->nama}}</td>
      <td width="10%" style="text-align:center">{{$pengajuan_kegiatan->tglpengajuan}}</td>
      <td width="10%" style="text-align:center">{{$pengajuan_kegiatan->tglpelaksanaan}}</td>
      <td width="30%" style="text-align:center">
      <textarea></textarea>
      </td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus akun ini?');" href="{{url('/karyawan/pengelola-kegiatan/pengajuan-kegiatan'.$pengajuan_kegiatan->id_kegiatan.'/delete/')}}" class="btn btn-success btn-xs">
        <i class="fa fa-trash-o"></i> Konfirmasi</a>
        <a href="{{url('/karyawan/pengelola-kegiatan/pengajuan-kegiatan'.$pengajuan_kegiatan->id_kegiatan.'/edit/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-pencil-square-o"></i> Tolak</a>
        </td>
      
    </tr>
     @empty
        <tr>
          <td colspan="6"><center>Belum ada pengajuan lpj</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection