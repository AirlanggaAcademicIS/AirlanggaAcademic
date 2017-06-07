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
<h3>Laporan Kinerja Dosen 2016/2017 Genap</h3>
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
      <th width="3%" style="text-align:center">No.</th>
      <th style="text-align:center">Judul</th>
      <th style="text-align:center">Halaman</th>
      <th style="text-align:center">Bidang</th>
      <th style="text-align:center">Volume</th>
      <th style="text-align:center">Penulis ke</th>
      <th width="13%" style="text-align:center">Tanggal</th>
    </tr>
    </thead>
  <tbody>
   
    <tr>
      @foreach($jurnal as $i => $j)
      @if($j->jurnal['status_jurnal'] == 1)
      <td width="3%" style="text-align:center">{{$i+1}}</td>
      <td width="%" style="text-align:center">{{$j->jurnal['nama_jurnal']}}</td>
      <td width="%" style="text-align:center">{{$j->jurnal['halaman_jurnal']}}</td>
      <td width="5%" style="text-align:center">{{$j->jurnal['bidang_jurnal']}}</td>
      <td width="5%" style="text-align:center">{{$j->jurnal['volume_jurnal']}}</td>
      <td width="%" style="text-align:center">{{$j->jurnal['penulis_ke']}}</td>
      <td width="13%" style="text-align:center">{{$j->jurnal['tanggal_jurnal']}}</td>
        </td>
        @else
        <tr>
          <td colspan="7"><center>Belum ada data</center></td>
        </tr>
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
      <th width="3%" style="text-align:center">No.</th>
      <th width="%" style="text-align:center">Judul</th>
      <th width="%" style="text-align:center">Nama Ketua</th>
      <th width="%" style="text-align:center">Bidang</th>
      <th width="13%" style="text-align:center">Tanggal</th>
      </tr>
    </thead>
  <tbody>
   
    <tr>
      @foreach($penelitian as $i => $p)
      @if($p->penelitian['status_penelitian'] == 1)
      <td width="3%" style="text-align:center">{{$i+1}}</td>
      <td width="%" style="text-align:center">{{$p->penelitian['judul_penelitian']}}</td>
      <td width="%" style="text-align:center">{{$p->penelitian['nama_ketua']}}</td>
      <td width="%" style="text-align:center">{{$p->penelitian['bidang_penelitian']}}</td>
      <td width="13%" style="text-align:center">{{$p->penelitian['tanggal_penelitian']}}</td>
      </td>
      @else
        <tr>
          <td colspan="5"><center>Belum ada data</center></td>
        </tr>
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
      <th width="3%" style="text-align:center">No.</th>
      <th width="%" style="text-align:center">Nama Konferensi</th>
      <th width="%" style="text-align:center">Pemapar</th>
      <th width="%" style="text-align:center">Tempat</th>
      <th width="%" style="text-align:center">Materi</th>
      <th width="13%" style="text-align:center">Tanggal</th>
      </tr>
    </thead>
  <tbody>
   
    <tr>
      @foreach($konferensi as $i => $k)
      @if($k->konferensi['status_konferensi'] == 1)
      <td width="3%" style="text-align:center">{{$i+1}}</td>
      <td width="%" style="text-align:center">{{$k->konferensi['nama_konferensi']}}</td>
      <td width="%" style="text-align:center">{{$k->konferensi['pemapar_konferensi']}}</td>
      <td width="%" style="text-align:center">{{$k->konferensi['tempat_konferensi']}}</td>
      <td width="%" style="text-align:center">{{$k->konferensi['materi_konferensi']}}</td>
      <td width="13%" style="text-align:center">{{$k->konferensi['tanggal_konferensi']}}</td>
      </td>
      @else
        <tr>
          <td colspan="6"><center>Belum ada data</center></td>
        </tr>
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
      <th width="3%" style="text-align:center">No.</th>
      <th width="%" style="text-align:center">Nama Kegiatan</th>
      <th width="%" style="text-align:center">Tempat</th>
      <th width="13%" style="text-align:center">Tanggal</th>
      </tr>
    </thead>
  <tbody>
   
    <tr>
      @foreach($pengmas as $i => $p2)
      @if($p2->pengmas['status_pengmas'] == 1)
      <td width="3%" style="text-align:center">{{$i+1}}</td>
      <td width="42%" style="text-align:center">{{$p2->pengmas['nama_kegiatan']}}</td>
      <td width="42%" style="text-align:center">{{$p2->pengmas['tempat_kegiatan']}}</td>
      <td width="13%" style="text-align:center">{{$p2->pengmas['tanggal_kegiatan']}}</td>
      </td>
      @else
        <tr>
          <td colspan="4"><center>Belum ada data</center></td>
        </tr>
      @endif
      @endforeach
    </tr>
  </tbody>
</table>
</div>

<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead><h3>Surat Tugas</h3>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Nomor surat</th>      
      <th style="text-align:center">Keterangan Surat</th>
      <th style="text-align:center">Tanggal</th>
      </tr>
    </thead>
  <tbody>
   
    <tr>
      @foreach($stugas as $i => $s)
      <td width="3%" style="text-align:center">{{$i+1}}</td>
      <td width="42%" style="text-align:center">{{$s->stugas['no_surat']}}</td>
      <td width="42%" style="text-align:center">{{$s->stugas['keterangan_sk']}}</td>
      <td width="13%" style="text-align:center">{{$s->stugas['tanggal_surat']}}</td>
      </td>
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