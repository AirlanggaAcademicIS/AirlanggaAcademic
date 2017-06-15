<!DOCTYPE html>
<html>
<head>
    <title>
         
    </title>
</head>
<body>
<img src="http://4.bp.blogspot.com/-q9CDx5hZ_kQ/Vn8eWBxpssI/AAAAAAAAEPk/_Y7Bi4C0YT0/s1600/logo-unair-universitas-airlangga-kecil.png" alt="logo" style="float:left;width:120px;height:120px;">
<strong>UNIVERSITAS AIRLANGGA</strong>
<br>FAKULTAS SAINS DAN TEKNOLOGI
<br>S1-SISTEM INFORMASI
<br>KAMPUS C UNAIR, MULYOREJO SURABAYA, 60115
<br>Telp. 031-5936501, Fax. 031-5936502
<br>https://fst.unair.ac.id, fsaintek@unair.ac.id
<br>___________________________________________________________________________________________________________
<b></b>
<p>
<center><b><u>LAPORAN KINERJA DOSEN {{$semester}} {{$thn}} </u></center></b>
<br>
</p>
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  
    <tr>
      <tr><td>Nama                 </td><td>:   {{$biodata->nama_dosen}}</td></tr>
      <tr><td>NIP                  </td><td>:   {{$biodata->nip}}</td></tr>
      <tr><td>Status               </td><td>:   {{$biodata->status_dosen}}</td></tr>
      <tr><td>Tanggal Lahir        </td><td>:   {{$biodata->tanggal_lahir_dosen}}</td></tr>
      <tr><td>Alamat               </td><td>:   {{$biodata->alamat_dosen}}</td></tr>
    </tr>
  <tbody>
   
    <tr>

        </td>
    </tr>


  </tbody>
</table>

<table style="width:100%; border: 1px solid black; border-collapse: collapse; font-family: arial ">
  <thead><h3>Jurnal</h3>
    <tr>
      <th width="3%" style="text-align:center; border: 1px solid black">No.</th>
      <th style="text-align:center; border: 1px solid black">Judul</th>
      <th style="text-align:center; border: 1px solid black">Halaman</th>
      <th style="text-align:center; border: 1px solid black">Bidang</th>
      <th style="text-align:center; border: 1px solid black">Volume</th>
      <th style="text-align:center; border: 1px solid black">Penulis ke</th>
      <th width="13%" style="text-align:center; border: 1px solid black">Tanggal</th>
    </tr>
    </thead>
  <tbody>
   
    <tr>
      @foreach($jurnal as $i => $j)
      @if($j->status_jurnal == 1)
      <td width="3%" style="text-align:center; border: 1px solid black">{{$i+1}}</td>
      <td width="%" style="text-align:center; border: 1px solid black">{{$j->nama_jurnal}}</td>
      <td width="%" style="text-align:center; border: 1px solid black">{{$j->halaman_jurnal}}</td>
      <td width="5%" style="text-align:center; border: 1px solid black">{{$j->bidang_jurnal}}</td>
      <td width="5%" style="text-align:center; border: 1px solid black">{{$j->volume_jurnal}}</td>
      <td width="%" style="text-align:center; border: 1px solid black">{{$j->penulis_ke}}</td>
      <td width="13%" style="text-align:center; border: 1px solid black">{{$j->tanggal_jurnal}}</td>
        </td>
        @else
        
        @endif
        @endforeach
    </tr>


  </tbody>
</table>

<br>
<table style="width:100%; border: 1px solid black; border-collapse: collapse; font-family: arial ">
  <thead><h3>Penelitian</h3>
    <tr>
      <th width="3%" style="text-align:center; border: 1px solid black">No.</th>
      <th width="%" style="text-align:center; border: 1px solid black">Judul</th>
      <th width="%" style="text-align:center; border: 1px solid black">Nama Ketua</th>
      <th width="%" style="text-align:center; border: 1px solid black">Bidang</th>
      <th width="13%" style="text-align:center; border: 1px solid black">Tanggal</th>
      </tr>
    </thead>
  <tbody>
   
    <tr>
      @foreach($penelitian as $i => $p)
      @if($p->status_penelitian == 1)
      <td width="3%" style="text-align:center; border: 1px solid black">{{$i+1}}</td>
      <td width="%" style="text-align:center; border: 1px solid black">{{$p->judul_penelitian}}</td>
      <td width="%" style="text-align:center; border: 1px solid black">{{$p->nama_ketua}}</td>
      <td width="%" style="text-align:center; border: 1px solid black">{{$p->bidang_penelitian}}</td>
      <td width="13%" style="text-align:center; border: 1px solid black">{{$p->tanggal_penelitian}}</td>
      </td>
      @else
        
      @endif
      @endforeach
    </tr>
  </tbody>
</table>
<br>
<table style="width:100%; border: 1px solid black; border-collapse: collapse; font-family: arial ">
  <thead><h3>Konferensi</h3>
    <tr>
      <th width="3%" style="text-align:center; border: 1px solid black">No.</th>
      <th width="%" style="text-align:center; border: 1px solid black">Nama Konferensi</th>
      <th width="%" style="text-align:center; border: 1px solid black">Pemapar</th>
      <th width="%" style="text-align:center; border: 1px solid black">Tempat</th>
      <th width="%" style="text-align:center; border: 1px solid black">Materi</th>
      <th width="13%" style="text-align:center; border: 1px solid black">Tanggal</th>
      </tr>
    </thead>
  <tbody>
   
    <tr>
      @foreach($konferensi as $i => $k)
      @if($k->status_konferensi == 1)
      <td width="3%" style="text-align:center; border: 1px solid black">{{$i+1}}</td>
      <td width="%" style="text-align:center; border: 1px solid black">{{$k->nama_konferensi}}</td>
      <td width="%" style="text-align:center; border: 1px solid black">{{$k->pemapar_konferensi}}</td>
      <td width="%" style="text-align:center; border: 1px solid black">{{$k->tempat_konferensi}}</td>
      <td width="%" style="text-align:center; border: 1px solid black">{{$k->materi_konferensi}}</td>
      <td width="13%" style="text-align:center; border: 1px solid black">{{$k->tanggal_konferensi}}</td>
      </td>
      @else
        
      @endif
      @endforeach
    </tr>
  </tbody>
</table>
<br>
<table style="width:100%; border: 1px solid black; border-collapse: collapse; font-family: arial ">
  <thead><h3>Pengabdian Masyarakat</h3>
    <tr>
      <th width="3%" style="text-align:center; border: 1px solid black">No.</th>
      <th width="%" style="text-align:center; border: 1px solid black">Nama Kegiatan</th>
      <th width="%" style="text-align:center; border: 1px solid black">Tempat</th>
      <th width="13%" style="text-align:center; border: 1px solid black">Tanggal</th>
      </tr>
    </thead>
  <tbody>
   
    <tr>
      @foreach($pengmas as $i => $p2)
      @if($p2->status_pengmas == 1)
      <td width="3%" style="text-align:center; border: 1px solid black">{{$i+1}}</td>
      <td width="42%" style="text-align:center; border: 1px solid black">{{$p2->nama_kegiatan}}</td>
      <td width="42%" style="text-align:center; border: 1px solid black">{{$p2->tempat_kegiatan}}</td>
      <td width="13%" style="text-align:center; border: 1px solid black">{{$p2->tanggal_kegiatan}}</td>
      </td>
      @else
        
      @endif
      @endforeach
    </tr>
  </tbody>
</table>
<br>
<table style="width:100%; border: 1px solid black; border-collapse: collapse; font-family: arial ">
  <thead><h3>Surat Tugas</h3>
    <tr>
      <th style="text-align:center; border: 1px solid black">No.</th>
      <th style="text-align:center; border: 1px solid black">Nomor surat</th>      
      <th style="text-align:center; border: 1px solid black">Keterangan Surat</th>
      <th style="text-align:center; border: 1px solid black">Tanggal</th>
      </tr>
    </thead>
  <tbody>
   
    <tr>
      @foreach($stugas as $i => $s)
      <td width="3%" style="text-align:center; border: 1px solid black">{{$i+1}}</td>
      <td width="42%" style="text-align:center; border: 1px solid black">{{$s->no_surat}}</td>
      <td width="42%" style="text-align:center; border: 1px solid black">{{$s->keterangan_sk}}</td>
      <td width="13%" style="text-align:center; border: 1px solid black">{{$s->tanggal_surat}}</td>
      </td>
      @endforeach
    </tr>
  </tbody>
</table>
</div>

</body>
</html>