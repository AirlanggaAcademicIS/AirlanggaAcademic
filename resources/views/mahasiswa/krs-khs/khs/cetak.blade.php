<!DOCTYPE html>
<html>
<head>
    <title>
         
    </title>
</head>
<body>
<img src="http://4.bp.blogspot.com/-q9CDx5hZ_kQ/Vn8eWBxpssI/AAAAAAAAEPk/_Y7Bi4C0YT0/s1600/logo-unair-universitas-airlangga-kecil.png" alt="logo" style="float:left;width:120px;height:120px;">
<strong>    UNIVERSITAS AIRLANGGA</strong>
<br>    FAKULTAS SAINS DAN TEKNOLOGI
<br>    S1-SISTEM INFORMASI
<br>    KAMPUS C UNAIR, MULYOREJO SURABAYA, 60115
<br>    Telp. 031-5936501, Fax. 031-5936502
<br>    https://fst.unair.ac.id, fsaintek@unair.ac.id
<br>___________________________________________________________________________________________________________
<b></b>
<p>
@foreach($tahun as $i=>$thn)
<center><b><u>KARTU HASIL STUDI TAHUN AKADEMIK {{$thn->semester_periode}} </u></center></b>
<br>
@endforeach
</p>
@foreach($khs as $b)
<br><b>NIM              :   {{$b->nim_id}} </b>
<br><b>Nama Mahasiswa   :   {{$b->nama_mhs}} </b>
@endforeach
<table style="width:100%; border: 1px solid black;">
    <thead>
        <th style="text-align:center; border: 1px solid black">NO.</th>
        <th style="text-align:center; border: 1px solid black">NAMA MATA AJAR</th> 
        <th style="text-align:center; border: 1px solid black">SKS</th>
        <th style="text-align:center; border: 1px solid black">NILAI</th>
    </thead>
    <tbody>
    @foreach($khs as $i => $k)
    <tr>
        <td style="text-align:center; border: 1px solid black">{{$i+1}}</td>
        <td style="text-align:center; border: 1px solid black">{{$k->MKDitawarkan->MK->nama_matkul}}</td>
        <td style="text-align:center; border: 1px solid black">{{$k->MKDitawarkan->MK->sks}}</td>
        <td style="text-align:center; border: 1px solid black">{{$k->nilai}}</td> 
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>