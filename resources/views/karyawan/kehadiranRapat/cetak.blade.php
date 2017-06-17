<!DOCTYPE html>
<html>
<head>
<!--<img style="height: 100px; width: 100px;" src="https://thumb.ibb.co/fs8ktF/UNAIR.jpg">
<img style="height: 100px; width: 300px;" src="http://i.imgur.com/rNr2K0y.jpg">

<hr size="3" width="900" color="black"> 
</head>

<body>
<br>
<br>-->
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
<h2 align="center">DAFTAR PESERTA RAPAT</h2>
@forelse($rapat as $a => $b)
<p> Nama : {{$b->nama_rapat}} </p>
<p> Tempat : {{$b->nama_ruang}}</p>
<p> Tanggal : {{$b->waktu_pelaksanaan}}</p>
@empty
@endforelse
<br>
<table style="width:100%; border: 1px solid black;">
    <thead>
        <th style="text-align:center; border: 1px solid black">No</th>
        <th style="text-align:center; border: 1px solid black">Nama Dosen</th> 
        <th style="text-align:center; border: 1px solid black">TTD</th>
    </thead>
    <tbody>
    @forelse($dosen as $i => $o)
    <tr>
        <td style="text-align:center; border: 1px solid black">{{$i+1}}</td>
        <td style="text-align:center; border: 1px solid black">{{$o->nama_dosen}}</td>
        <td style="text-align:center; border: 1px solid black"></td>
        </tr>
        @empty
        @endforelse
    </tbody>
</table>
<br>
<footer>
  <p align="right">Surabaya, {{App\Helpers\GeneralHelper::indonesianDateFormat($b->waktu_pelaksanaan)}}</p>
  <br>
  <br>
  <br>


  <p align="right">{{$o->nama_dosen}}</p>
</footer>

</body>
</html>-->
