<table style="width:100%; border: 0px;">
    <tr>
        <td style="width:30%"><img style="width:50%;" align="middle" alt="logo-unair" src="http://4.bp.blogspot.com/-76MDmdoORaA/U1lWncmRO_I/AAAAAAAAAvc/ixvvomJWHyI/s1600/Logo+UNAIR+%2528Universitas+Negeri+Airlangga%2529+%2528Frendday+Lawutara%2529.png"></td>
        <td><h1 style="text-align:center">UNIVERSITAS AIRLANGGA</h1></td>
    </tr>
</table>
<style type="text/css">
table {
    border-collapse: collapse;
    text-align: justify;
}

table, th, td {
    text-align: justify;
    padding: 8px;
}

</style>

<div class="col-md-12" style="text-align">
    <h1>Proposal Kegiatan</h1>    
</div>

<br>
<table style="width:100%">
    <tr>
        <td style="width:30%;">Nama Kegiatan</td> 
        <td>{{$kegiatan->nama}}</td>
    </tr>
    <tr>
        <td style="width:30%;">Kategori Pengajuan Kegiatan</td> 
        <td>Laporan Pertanggung Jawaban</td>    
    </tr>
    <tr>
        <td style="width:30%;">Status Kegiatan</td> 
        <td>
          @if($kegiatan->konfirmasi_proposal == 0)
          @if($kegiatan->konfirmasi_lpj == 0)
          Sedang Diproses
          @endif
          @endif

          <!-- status proposal telah dikonfirmasi -->
          @if($kegiatan->konfirmasi_proposal == 1)
          @if($kegiatan->konfirmasi_lpj == 0)
          Telah Dikonfirmasi
          @endif
          @endif

          <!-- status proposal ditolak -->
          @if($kegiatan->konfirmasi_proposal == 2)
          @if($kegiatan->konfirmasi_lpj == 0)
          Ditolak
          @endif
          @endif

           <!-- status LPJ sedang diproses -->
          @if($kegiatan->konfirmasi_proposal == 1)
          @if($kegiatan->konfirmasi_lpj == 1)
          Sedang Diproses
          @endif
          @endif

          <!-- status LPJ telah dikonfirmasi -->
          @if($kegiatan->konfirmasi_proposal == 1)
          @if($kegiatan->konfirmasi_lpj == 2)
          Telah Dikonfirmasi
          @endif
          @endif

          <!-- status LPJ ditolak -->
          @if($kegiatan->konfirmasi_proposal == 1)
          @if($kegiatan->konfirmasi_lpj == 3)
          Ditolak
          @endif
          @endif</td>    
    </tr>    
    <tr>
        <td style="width:30%;">Latar Belakang Kegiatan</td> 
        <td>{{$kegiatan->history}}</td>    
    </tr>        
    <tr>
        <td style="width:30%;">Mekanisme Kegiatan</td> 
        <td>{{$kegiatan->mekanisme}}</td>    
    </tr>
    <tr>
        <td style="width:30%;">Tanggal Pengajuan Kegiatan</td> 
        <td>{{$kegiatan->tglpengajuan}}</td>    
    </tr>
    <tr>
        <td style="width:30%;">Tempat Pengajuan Kegiatan</td> 
        <td>{{$kegiatan->rpengajuan}}</td>    
    </tr>
    
  </table>
    

<table style="width:100%">
    <tr>
        <td style="width:30%;">Struktur Panitia</td> 
        <td></td>    
    </tr>
  </table>
 <table style="width:100%">
    <thead>
        <th width="4%" style="text-align:center;border: 1px solid black;">No</th>
        <th width="20%" style="text-align:center;border: 1px solid black;">Nama Panitia</th>      
        <th width="10%" style="text-align:center;border: 1px solid black;">Waktu Dimulai</th>
    </thead>
    <tbody>
         @forelse($struktur as $i => $panitia)
          <tr>
            <td width="10%" style="text-align:center;border: 1px solid black;">{{$i+1}}</td>
            <td width="20%" style="text-align:center;border: 1px solid black;">{{$panitia->mahasiswa['nama_mhs']}}</td>
            <td width="10%" style="text-align:center;border: 1px solid black;">{{$panitia->jabatan['jabatan']}}</td>
          </tr>

        @empty
          <tr>
            <td colspan="6"><center>Belum ada Struktur Panitia</center></td>
          </tr>
    
      @endforelse
    
    </tbody>
  </table>
 
 <table style="width:100%">
    <tr>
        <td style="width:30%;">Rincian Rundown Proposal</td> 
        <td></td>    
    </tr>
  </table>
 <table style="width:100%">
    <thead>
        <th width="4%" style="text-align:center;border: 1px solid black;">No</th>
        <th width="20%" style="text-align:center;border: 1px solid black;">Nama Rundown</th>      
        <th width="10%" style="text-align:center;border: 1px solid black;">Waktu Dimulai</th>
    </thead>
    <tbody>
         @forelse($rundownProposal as $i => $rincianRundown)
          <tr>
            <td width="10%" style="text-align:center;border: 1px solid black;">{{$i+1}}</td>
            <td width="20%" style="text-align:center;border: 1px solid black;">{{$rincianRundown->nama}}</td>
            <td width="10%" style="text-align:center;border: 1px solid black;">{{$rincianRundown->waktu}}</td>
          </tr>

        @empty
          <tr>
            <td colspan="6"><center>Belum ada rundown Proposal</center></td>
          </tr>
    
      @endforelse
    
    </tbody>
  </table>


          

  <table style="width:100%">
    <tr>
        <td style="width:30%;">Rincian Dana Proposal</td> 
        <td></td>    
    </tr>
  </table>
  <table style="width:100%">
    <thead>
        <th width="4%" style="text-align:center;border: 1px solid black;">No</th>
        <th width="20%" style="text-align:center;border: 1px solid black;">Nama Dana</th>      
        <th width="10%" style="text-align:center;border: 1px solid black;">Kuantitas</th>     
        <th width="10%" style="text-align:center;border: 1px solid black;">Harga</th>
        <th width="10%" style="text-align:center;border: 1px solid black;">Sumber Dana</th>
    </thead>
    <tbody>
         @forelse($danaProposal as $i => $rincianDana)
          <tr>
            <td width="10%" style="text-align:center;border: 1px solid black;">{{$i+1}}</td>
            <td width="20%" style="text-align:center;border: 1px solid black;">{{$rincianDana->nama}}</td>
            <td width="10%" style="text-align:center;border: 1px solid black;">{{$rincianDana->kuantitas}}</td>
            <td width="10%" style="text-align:center;border: 1px solid black;">{{$rincianDana->harga}}</td>
            <td width="10%" style="text-align:center;border: 1px solid black;">{{$rincianDana->kategoriDana['jenis_dana']}}</td>
          </tr>

        @empty
          <tr>
            <td colspan="6"><center>Belum ada rincian dana Proposal</center></td>
          </tr>
    
      @endforelse
    
    </tbody>
  </table>

   