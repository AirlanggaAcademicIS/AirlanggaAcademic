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
<center><b>KRS AKADEMIK</b></center>
<br>
</p>
<table style="font-family: arial">
<tbody>
<td width="10%">NIM</td><td width="10%"> : {{$biodata_mhs->nim_id}} </td><td width="10%" ></td>
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
    @if($sks==0)
    @php
    $ipk = 0
    @endphp  
    @else
    @php
    $ipk = $total / $sks
    @endphp
    @endif
<td width="5%">IPK</td> <td width="10%">: {{$ipk}} </td>
<tr>
<td width="10%">Nama Mahasiswa</td> <td width="10%"> : {{$biodata_mhs->nama_mhs}}</td>  
<td width="10%"></td> 
@php
    $total = 0;
    $sks = 0;
    @endphp
   @foreach($ips as $i => $h) 
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
    @if($sks==0)
    @php
    $ips = 0
    @endphp  
    @else
    @php
    $ips = $total / $sks
    @endphp
    @endif
<td width="5%">IPS</td> <td width="10%">: {{$ips}}</td>
</tr>
<tr>
@if(($ips>=3)||($ipk==0))
@php
$sks=24;
@endphp
@elseif(($ips<3)&&($ips>=2.75))
@php
$sks=23;
@endphp
@elseif(($ips<2.75)&&($ips>=2.5))
@php
$sks=22;
@endphp
@else
@php
$sks=21;
@endphp
@endif

<td>SKS Maks</td> <td>: {{$sks}}</td>
</tr>
</tbody>
</table>
<br>
<table style="width:100%; border: 1px solid black; border-collapse: collapse; font-family: arial ">
 
     <thead style="background-color: #000000">
         <th width="10%" style="text-align:center; color: #ffffff ">KODE MK</th>
         <th width="50%" style="text-align:center; color: #ffffff ">NAMA MATA AJAR</th>
         <th width="5%" style="text-align:center; color: #ffffff ">SKS</th>
         <th width="10%" style="text-align:center; color: #ffffff ">HARI</th>
         <th width="15%" style="text-align:center; color: #ffffff ">JAM</th>
         <th width="10%" style="text-align:center; color: #ffffff ">RUANG</th>
    </thead>
    <tbody>
        @foreach($app as $j => $s) 
                 <tr>
                    <td style="text-align:center; border: 1px solid black">{{$s->kode_matkul}}</td>
                    <td style="text-align:center; border: 1px solid black">{{$s->nama_matkul}}</td>
                    <td style="text-align:center; border: 1px solid black">{{$s->sks}}</td>
                    <td style="text-align:center; border: 1px solid black">{{$s->nama_hari}}</td>
                    <td style="text-align:center; border: 1px solid black">{{$s->waktu}}</td>
                    <td style="text-align:center; border: 1px solid black">{{$s->nama_ruang}}</td>
                  </tr>
                  @endforeach
  </tbody>
  <tfoot>
        <td style="text-align:center"></td>
        <td style="text-align:center;"> &nbsp; Total SKS  </td>
        <td style="text-align:center; border: 1px solid black;">{{$sum}}</td>
        <td style="text-align:center;"></td>
        <td style="text-align:center;"></td>
        <td style="text-align:center;"></td>
        
  </tfoot>
</table>
<br>


<br>
<br>
<br>
<br>
<div style="text-align: right;margin-right: 180px;font-family: arial">
Surabaya, 
@php
$bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
echo date("j")." ".$bulan[date("n")]." ".date("Y");
@endphp
</div>
<div style="text-align: right;margin-right: 220px;">Dosen Wali</div>
</br>
</br>
</br>
<div style="text-align: right;margin-right: 230px;">{{$doswal->nama_dosen}}</div>
<div style="text-align: right;margin-right: 200px;">{{$doswal->nip}}</div>
<br>Lembar :
<div style="font-family: arial;margin-left: 30px">&nbsp; 1. Untuk mahasiswa
<br>&nbsp; 2. Untuk dosen wali
<br>&nbsp; 3. Untuk departemen
</div>
</body>
</html>