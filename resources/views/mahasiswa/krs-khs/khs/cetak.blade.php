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
@foreach($tahun as $i=>$thn)
<center><u>KARTU HASIL STUDI TAHUN AKADEMIK {{$thn->semester_periode}} </u></center>
<br>
@endforeach
</p>
<br>NIM &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;   {{$biodata_mhs->nim_id}} 
<br>Nama Mahasiswa &nbsp; &nbsp; &nbsp;:  &nbsp;  {{$biodata_mhs->nama_mhs}}
<table style="width:100%; border: 1px solid black; border-collapse: collapse; font-family: arial ">
 
     <thead style="background-color: #000000">
         <th style="text-align:center; color: #ffffff ">NO.</th>
         <th style="text-align:center; color: #ffffff ">NAMA MATA AJAR</th>
         <th style="text-align:center; color: #ffffff ">SKS</th>
         <th style="text-align:center; color: #ffffff ">NILAI</th>
    </thead>
    <tbody>
    @foreach($khs as $i => $k)
    <tr style="border: 1px solid black">
        <td style="text-align:center; border: 1px solid black">{{$i+1}}</td>
        <td style="text-align:center; border: 1px solid black">{{$k->MKDitawarkan->MK->nama_matkul}}</td>
        <td style="text-align:center; border: 1px solid black">{{$k->MKDitawarkan->MK->sks}}</td>
        <td style="text-align:center; border: 1px solid black">{{$k->nilai}}</td> 
        </tr>
        @endforeach
    </tbody>
</table>
<br>Tanpa mata ajar dengan nilai E, hasil studi sampai semester ini adalah :
<br>JUMLAH SKS YANG TELAH DITEMPUH = {{$sum}} , dengan IPK = 
</body>
</html>