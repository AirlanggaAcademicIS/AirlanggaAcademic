<!DOCTYPE html>
<html>
<head>
    <title>
         
    </title>
</head>
<body>
<img src="http://4.bp.blogspot.com/-q9CDx5hZ_kQ/Vn8eWBxpssI/AAAAAAAAEPk/_Y7Bi4C0YT0/s1600/logo-unair-universitas-airlangga-kecil.png" alt="logo" style="float:left;width:120px;height:120px;">
<strong>&nbsp; UNIVERSITAS AIRLANGGA</strong>
<br>&nbsp; FAKULTAS SAINS DAN TEKNOLOGI
<br>&nbsp; S1-SISTEM INFORMASI
<br>&nbsp; KAMPUS C UNAIR, MULYOREJO SURABAYA, 60115
<br>&nbsp; Telp. 031-5936501, Fax. 031-5936502
<br>&nbsp; https://fst.unair.ac.id, fsaintek@unair.ac.id
<br>___________________________________________________________________________________________________________
<b></b>
<p>
<center><u><b>KARTU HASIL STUDI TAHUN AKADEMIK {{$tahun->semester_periode}} </b></u></center>
<br>
</p>
<table style="font-family: arial">
<tbody>
<td>NIM</td>   <td> : {{$biodata_mhs->nim_id}} </td>
<tr><td>Nama Mahasiswa</td> <td> : {{$biodata_mhs->nama_mhs}}</td></tr>
<tr><td>Dosen Wali</td> <td> : {{$doswal->nama_dosen}} </td></tr>
</tbody>
</table>
<br>
<table style="width:100%; border: 1px solid black; border-collapse: collapse; font-family: arial ">
 
     <thead style="background-color: #000000">
         <th width="5%" style="text-align:center; color: #ffffff ">NO.</th>
         <th width="15%" style="text-align:center; color: #ffffff ">KODE MK</th>
         <th width="45%" style="text-align:center; color: #ffffff ">NAMA MATA AJAR</th>
         <th width="10%" style="text-align:center; color: #ffffff ">SKS</th>
         <th width="10%" style="text-align:center; color: #ffffff ">NILAI</th>
         <th width="10%" style="text-align:center; color: #ffffff ">BOBOT</th>
    </thead>
    <tbody>
    @foreach($khs as $i => $k)
    <tr style="border: 1px solid black">
        <td style="text-align:center; border: 1px solid black">{{$i+1}}</td>
        <td style="text-align:center; border: 1px solid black">{{$k->kode_matkul}}</td>
        <td style="text-align:center; border: 1px solid black">{{$k->nama_matkul}}</td>
        <td style="text-align:center; border: 1px solid black">{{$k->sks}}</td>
        <td style="text-align:center; border: 1px solid black">{{$k->nilai}}</td> 
        @php 
     $total = 0;
     $sks = 0;
     @endphp
          @php
          $sks = $sks + $k->sks
          @endphp   
          @if($k->nilai=="A")
          @php
          $total = $total + (4 * $k->sks)
          @endphp
          <td width="10%" style="text-align:center; border:">{{4 * $k->sks}} </td>
          @elseif($k->nilai=="AB")
          @php
          $total = $total + (3.5 * $k->sks)
          @endphp
          <td width="10%" style="text-align:center; border:">{{3.5 * $k->sks}} </td>
          @elseif($k->nilai=="B")
          @php
          $total = $total + (3 * $k->sks)
          @endphp
          <td width="10%" style="text-align:center; border:">{{3 * $k->sks}} </td>
          @elseif($k->nilai=="BC")
          @php
          $total = $total + (2.5 * $k->sks)
          @endphp
          <td width="10%" style="text-align:center; border:">{{2.5 * $k->sks}} </td>
          @elseif($k->nilai=="C")
          @php
          $total = $total + (2 * $k->sks)
          @endphp
          <td width="10%" style="text-align:center; border:">{{2 * $k->sks}} </td>
          @elseif($k->nilai=="D")
          @php
          $total = $total + (1 * $k->sks)
          @endphp
          <td width="10%" style="text-align:center; border:">{{1 * $k->sks}} </td>
          @else
          @php
          $total = $total + (0 * $k->sks)
          @endphp
          <td width="10%" style="text-align:center; border:">0</td>
          @endif  
        @endforeach
        </tr>
  </tbody>
  @php
  if($sks == 0){
  $ips = 0;
  }
  else{
  $ips = $total / $sks;
  }
  $lmt = 0;
  if($ips >= 3)
                $lmt = 24;                
            elseif (($ips <3) && ($ips >=2.75))
                $lmt = 23;
            elseif (($ips <2.75) && ($ips >=2.5))
                $lmt = 22;
              else
                $lmt = 21;
  @endphp
  <tfoot>
    <td style="text-align:center"></td>
    <td style="text-align:center"></td>
    <td style="text-align:right;">Total SKS dan Bobot &nbsp; </td>
    <td style="text-align:center; border: 1px solid black;">{{$sks}}</td>
    <td style="text-align:center;"></td>
    <td style="text-align:center; border: 1px solid black;">{{$total}}</td>
<tr>
        <td colspan="3" style="text-align:right;border-top: 1px solid black;">Indeks Prestasi Semester &nbsp; </td>
    <td colspan="3" style="text-align:center;border:1px solid black;">{{$ips}}</td>
</tr>
<tr>
    <td colspan="3" style="text-align:right;border-top: 1px solid black;">SKS maksimal yang boleh diambil &nbsp; </td>
    <td colspan="3" style="text-align:center;border: 1px solid black;">{{$lmt}}</td>
    
</tr>
  </tfoot>
</table>
<br>
<div style="font-family: arial"> Tanpa mata ajar dengan nilai E, hasil studi sampai semester ini adalah :

  
<br>JUMLAH SKS YANG TELAH DITEMPUH = {{$sum}} , dengan IPK = 
@php
    $total = 0;
    $sks = 0;
    @endphp
   @foreach($histori as $i => $h) 
      @php
      if($h->nilai=="K")
      $sks = $sks + 0;
      else
      $sks = $sks + $h->sks;
      @endphp
      @if($h->nilai=="A")
      @php
      $total = $total + (4 * $h->sks)
      @endphp
      @elseif($h->nilai=="AB")
      @php
      $total = $total + (3.5 * $h->sks)
      @endphp
      @elseif($h->nilai=="B")
      @php
      $total = $total + (3 * $h->sks)
      @endphp
      @elseif($h->nilai=="BC")
      @php
      $total = $total + (2.5 * $h->sks)
      @endphp
      @elseif($h->nilai=="C")
      @php
      $total = $total + (2 * $h->sks)
      @endphp
      @elseif($h->nilai=="D")
      @php
      $total = $total + (1 * $h->sks)
      @endphp
      @else
      @php
      $total = $total + (0 * $h->sks)
      @endphp
      @endif 
    @endforeach 
{{$total / $sks}} </div>
<br>
<br>
<br>
<br>
<table align="right" style="margin-right: 180px; font-family: arial;">
<td style="text-align: center;">Surabaya, 
@php
$bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
echo date("j")." ".$bulan[date("n")]." ".date("Y");
@endphp
</td>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>
<tr><td style="text-align: center;"></td></tr>

<tr><td style="text-align: center;">{{$doswal->nama_dosen}}</td></tr>
<tr><td style="text-align: center;">{{$doswal->nip}}</td></tr>
</table>
<!-- <div style="text-align: right;margin-right: 220px;">Dosen Wali</div>
</br>
</br>
</br>
<div style="text-align: right;margin-right: 230px;">{{$doswal->nama_dosen}}</div>
<div style="text-align: right;margin-right: 200px;">{{$doswal->nip}}</div> -->
<br>Lembar :
<div style="font-family: arial;margin-left: 30px">&nbsp; 1. Untuk mahasiswa
<br>&nbsp; 2. Untuk dosen wali
<br>&nbsp; 3. Untuk departemen
</div>
</body>
</html>