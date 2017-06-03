@extends('adminlte::layouts.app')
<html>
@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten
<title></title>
<head></head> 
@endsection

@section('contentheader_title')

@endsection

@section('main-content')
<!-- Kodingan HTML ditaruh di sini -->
<h3>Laporan Kinerja Dosen {{$tahun->semester_periode}}</h3>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  
    <tr>
      <tr><td width="15%">Nama</td><td>{{$biodata->nama_dosen}}</td></tr>
      <tr><td width="15%">NIP</td><td>{{$biodata->nip}}</td></tr>
      <tr><td width="15%">Status</td><td>{{$biodata->status_dosen}}</td></tr>
      <tr><td width="15%">Tanggal Lahir</td><td>{{$biodata->tanggal_lahir_dosen}}</td></tr>
      <tr><td width="15%">Alamat</td><td>{{$biodata->alamat_dosen}}</td></tr>
    </tr>
  <tbody>
   
    <tr>

        </td>
    </tr>


  </tbody>
</table>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead><h3>Jurnal</h3>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Judul</th>
      <th style="text-align:center">Halaman</th>
      <th style="text-align:center">Bidang</th>
      <th style="text-align:center">Tanggal</th>
      <th style="text-align:center">Volume</th>
      <th style="text-align:center">Penulis ke</th>
    </tr>
    </thead>
  <tbody>
   
    <tr>
      @foreach($jurnal as $j)
      @if($j->jurnal['status_jurnal'] == 1)
      <td>1</td>
      <td style="text-align:center">{{$j->jurnal['nama_jurnal']}}</td>
      <td style="text-align:center">{{$j->jurnal['halaman_jurnal']}}</td>
      <td style="text-align:center">{{$j->jurnal['bidang_jurnal']}}</td>
      <td style="text-align:center">{{$j->jurnal['tanggal_jurnal']}}</td>
      <td style="text-align:center">{{$j->jurnal['volume_jurnal']}}</td>
      <td style="text-align:center">{{$j->jurnal['penulis_ke']}}</td>
        </td>
        @endif
        @endforeach
    </tr>


  </tbody>
</table>
</div>

<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead><h3>Penelitian</h3>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Judul</th>
      <th style="text-align:center">Nama Ketua</th>
      <th style="text-align:center">Bidang</th>
      <th style="text-align:center">Tanggal</th>
      </tr>
    </thead>
  <tbody>
   
    <tr>
      @foreach($penelitian as $p)
      @if($p->penelitian['status_penelitian'] == 1)
      <td>1</td>
      <td style="text-align:center">{{$p->penelitian['judul_penelitian']}}</td>
      <td style="text-align:center">{{$p->penelitian['nama_ketua']}}</td>
      <td style="text-align:center">{{$p->penelitian['bidang_penelitian']}}</td>
      <td style="text-align:center">{{$p->penelitian['tanggal_penelitian']}}</td>
      </td>
      @endif
        @endforeach
    </tr>
  </tbody>
</table>
</div>

<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead><h3>Konferensi</h3>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Konferensi</th>
      <th style="text-align:center">Pemapar</th>
      <th style="text-align:center">Tempat</th>
      <th style="text-align:center">Tanggal</th>
      <th style="text-align:center">Materi</th>
      </tr>
    </thead>
  <tbody>
   
    <tr>
      @foreach($konferensi as $k)
      @if($k->konferensi['status_konferensi'] == 1)
      <td>1</td>
      <td style="text-align:center">{{$k->konferensi['nama_konferensi']}}</td>
      <td style="text-align:center">{{$k->konferensi['pemapar_konferensi']}}</td>
      <td style="text-align:center">{{$k->konferensi['tempat_konferensi']}}</td>
      <td style="text-align:center">{{$k->konferensi['tanggal_konferensi']}}</td>
      <td style="text-align:center">{{$k->konferensi['materi_konferensi']}}</td>
      </td>
      @endif
        @endforeach
    </tr>
  </tbody>
</table>
</div>

<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead><h3>Pengabdian Masyarakat</h3>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nama Kegiatan</th>
      <th style="text-align:center">Tempat</th>
      <th style="text-align:center">Tanggal</th>
      </tr>
    </thead>
  <tbody>
   
    <tr>
      @foreach($pengmas as $p2)
      @if($p2->pengmas['status_pengmas'] == 1)
      <td>1</td>
      <td style="text-align:center">{{$p2->pengmas['nama_kegiatan']}}</td>
      <td style="text-align:center">{{$p2->pengmas['tempat_kegiatan']}}</td>
      <td style="text-align:center">{{$p2->pengmas['tanggal_kegiatan']}}</td>
      </td>
      @endif
        @endforeach
    </tr>
  </tbody>
</table>
</div>

<a href="{{url('dosen/laporan/cetak')}}" class="btn btn-success btn-flat">Cetak</a>
</body>


@endsection

@section('code-footer')




@endsection