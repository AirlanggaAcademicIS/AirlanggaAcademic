@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Surat Masuk Mahasiswa
@endsection

@section('contentheader_title')
Surat Masuk Mahasiswa
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

<div style="padding:10px">
<table id="data-table" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nomor Surat</th>      
      <th style="text-align:center">Nama Petugas</th>
      <th style="text-align:center">Nama Lembaga</th>
      <th style="text-align:center">Judul Surat</th>
      <th style="text-align:center">NIM/NIP</th>
      <th style="text-align:center">Status</th>

    </tr>
    </thead>
  <tbody>
   @forelse($surat_masuk as $i => $bio) 
    <tr>
      <td>{{ $i+1 }}</td>
      <td width="30%" style="text-align:center">{{$bio->no_surat_masuk}}</td>
      <td width="20%" style="text-align:center">{{$bio->petugas['nama_petugas']}}</td>
      <td width="20%" style="text-align:center">{{$bio->nama_lembaga}}</td>
      <td width="10%" style="text-align:center">{{$bio->judul_surat_masuk}}</td>
      <td width="10%" style="text-align:center">{{$bio->nim_nip}}</td>
      @if($bio->status==0)
      <td width="10%" style="text-align:center">Belum Diambil</td>
      @else
      <td width="10%" style="text-align:center">Sudah Diambil</td>
      @endif

    </tr>
     @empty
        <tr>
          <td colspan="8"><center>Belum ada surat</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')
<script type="text/javascript"> 
    $(document).ready(function(){ 
        $('#data-table').DataTable(); 
    }); 
</script> 
@endsection