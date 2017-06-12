@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
Data Mahasiswa Skripsi
@endsection

@section('contentheader_title')
Data Mahasiswa Skripsi
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
      <th style="text-align:center">Nama Mahasiswa</th> 
      <th style="text-align:center">NIM</th>     
      <th style="text-align:center">KBK</th>
      <th style="text-align:center">Judul</th>
      <th style="text-align:center">Dosen Pembimbing 1</th>
      <th style="text-align:center">Dosen Pembimbing 2</th>
      <th style="text-align:center">Mulai Pengerjaan</th>
      <th style="text-align:center">Selesai</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   @forelse($skripsi as $i => $skrip) 
    <tr>
      <td width="5%" style="text-align:center">{{ $i+1 }}</td>
      <td width="15%" style="text-align:center">
      {{$skrip->mhs['nama_mhs']}}
      </td>
      <td width="10%" style="text-align:center">{{$skrip->NIM_id}}</td>
      <td width="15%" style="text-align:center">
      @foreach($kbk as $k)
      @if($k->id_kbk == $skrip->kbk_id)
      {{$k->jenis_kbk}}
      @endif
      @endforeach
      </td>
      <td width="20%" style="text-align:center">{{$skrip->Judul}}</td>
      <td width="10%" style="text-align:center">
      @foreach($dosen1 as $i => $d1)
      @if($d1->id_skripsi == $skrip->id_skripsi && $d1->status == '0')
      {{$d1->nama_dosen}}
      @endif
      @endforeach
      </td>
      <td width="10%" style="text-align:center">
      @foreach($dosen2 as $i => $d2)
      @if($d2->id_skripsi == $skrip->id_skripsi && $d2->status == '1')
      {{$d2->nama_dosen}}
      @endif
      @endforeach
      </td>
      <td width="10%" style="text-align:center">
      @if($skrip->tgl_sidangpro==null)
      Belum
      @else
      {{$skrip->tgl_sidangpro}}
      @endif
      </td>
      <td width="10%" style="text-align:center">
      @if($skrip->tgl_sidangskrip==null)
      Belum
      @else
      {{$skrip->tgl_sidangskrip}}
      @endif
      </td>
      
      <td width="10%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus data skripsi ini?');" href="{{url('/karyawan/monitoring-skripsi/skripsi/'.$skrip->id_skripsi.'/delete/')}}" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="{{url('/karyawan/monitoring-skripsi/skripsi/'.$skrip->id_skripsi.'/edit/')}}" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     @empty
        <tr>
          <td colspan="12"><center>Belum ada data skripsi</center></td>
        </tr>
    @endforelse
  </tbody>
</table>
</div>

@endsection

@section('code-footer')

@endsection