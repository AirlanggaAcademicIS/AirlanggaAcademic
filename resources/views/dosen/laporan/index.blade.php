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
<h3>Laporan Kinerja Dosen {{$semester}} {{$thn}}</h3>
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
      @if($j->status_jurnal == 1)
      <td width="3%" style="text-align:center">{{$i+1}}</td>
      <td width="%" style="text-align:center">{{$j->nama_jurnal}}</td>
      <td width="%" style="text-align:center">{{$j->halaman_jurnal}}</td>
      <td width="%" style="text-align:center">{{$j->bidang_jurnal}}</td>
      <td width="%" style="text-align:center">{{$j->volume_jurnal}}</td>
      <td width="%" style="text-align:center">{{$j->penulis_ke}}</td>
      <td width="13%" style="text-align:center">{{$j->tanggal_jurnal}}</td>
        </tr>
       @else
        
        @endif
        @endforeach
    


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
      @if($p->status_penelitian == 1)
      <td width="3%" style="text-align:center">{{$i+1}}</td>
      <td width="%" style="text-align:center">{{$p->judul_penelitian}}</td>
      <td width="%" style="text-align:center">{{$p->nama_ketua}}</td>
      <td width="%" style="text-align:center">{{$p->bidang_penelitian}}</td>
      <td width="13%" style="text-align:center">{{$p->tanggal_penelitian}}</td>
      </tr>
      @else
        
      @endif
      @endforeach
    
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
      @if($k->status_konferensi == 1)
      <td width="3%" style="text-align:center">{{$i+1}}</td>
      <td width="%" style="text-align:center">{{$k->nama_konferensi}}</td>
      <td width="%" style="text-align:center">{{$k->pemapar_konferensi}}</td>
      <td width="%" style="text-align:center">{{$k->tempat_konferensi}}</td>
      <td width="%" style="text-align:center">{{$k->materi_konferensi}}</td>
      <td width="13%" style="text-align:center">{{$k->tanggal_konferensi}}</td>
    </tr>
      @else
        
      @endif
      @endforeach
    
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
      @if($p2->status_pengmas == 1)
      <td width="3%" style="text-align:center">{{$i+1}}</td>
      <td width="42%" style="text-align:center">{{$p2->nama_kegiatan}}</td>
      <td width="42%" style="text-align:center">{{$p2->tempat_kegiatan}}</td>
      <td width="13%" style="text-align:center">{{$p2->tanggal_kegiatan}}</td>
     </tr>     @else
        
      @endif
      @endforeach
    
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
      <td width="42%" style="text-align:center">{{$s->no_surat}}</td>
      <td width="42%" style="text-align:center">{{$s->keterangan_sk}}</td>
      <td width="13%" style="text-align:center">{{$s->tanggal_surat}}</td>
      </td>
      @endforeach
    </tr>
  </tbody>
</table>
</div>

<form method="get" action="{{url('dosen/laporan/cetak')}}" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden"  id="tahun" name="tahun" value="{{$thn}}">
                <input type="hidden"  id="tahun" name="semester" value="{{$semester}}">
                <button type="submit" class="btn btn-primary btn-lg">
              Cetak
            </button>
                </form>
</body>


@endsection

@section('code-footer')




@endsection