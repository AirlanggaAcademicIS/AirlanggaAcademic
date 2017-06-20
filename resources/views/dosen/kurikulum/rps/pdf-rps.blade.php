<table style="width:100%; border: 0px;">
    <tr>
        <td style="width:30%; border: 0px;"><img style="width:50%;" align="right" alt="logo-unair" src="http://4.bp.blogspot.com/-76MDmdoORaA/U1lWncmRO_I/AAAAAAAAAvc/ixvvomJWHyI/s1600/Logo+UNAIR+%2528Universitas+Negeri+Airlangga%2529+%2528Frendday+Lawutara%2529.png"></td>
        <td style="width:10%; border: 0px;"></td></td>
        <td style="border: 0px;">
            <h1 style="text-align:left">UNIVERSITAS AIRLANGGA</h1>
            <h4>Fakultas Sains dan Teknologi</h4>
        </td>
    </tr>
</table>
<style type="text/css">
table {
    border-collapse: collapse;
    text-align: justify;
}

table, th, td {
    border: 1px solid black;
    text-align: justify;
}

</style>

<div class="col-md-12" style="text-align: center;">
    <h3>Rencana Pembelajaran Semester Mata Kuliah Universitas Airlangga</h3>    
</div>

<br>
<table style="width:100%">
    <tr>
        <td style="width:4%">1 </td>
        <td style="width:30%;">Nama Mata Kuliah</td> 
        <td>{{$matkul_silabus->nama_matkul}}</td>
    </tr>
    <tr>
        <td style="width:4%">2 </td>
        <td style="width:30%;">Kode Mata Kuliah</td> 
        <td>{{$matkul_silabus->kode_matkul}}</td>    
    </tr>
    <tr>
        <td style="width:4%">3 </td>
        <td style="width:30%;">Bobot (SKS)</td> 
        <td>{{$matkul_silabus->sks}} SKS</td>    
    </tr>    
    <tr>
        <td style="width:4%">4 </td>
        <td style="width:30%;">Rumpun Mata Kuliah</td> 
        <td>{{$matkul_silabus->jenisMk->jenis_mk}}</td>    
    </tr>        
    <tr>
        <td style="width:4%">5 </td>
        <td style="width:30%;">Capaian Pembelajaran (CP)</td> 
        <td>
        <b>CPL-PRODI : (kode - deskripsi)</b> 
        <br>
        @foreach($cpem as $cpm)
           {{$cpm->cpem->kode_cpem}} - {{$cpm->cpem->deskripsi_cpem}}
           <br>
        @endforeach
        <br>
        <b>CP-MK : (kode - deskripsi)</b> 
        <br>
        @foreach($cp_matkul as $cp_m)
            {{$cp_m->kode_cpmk}} - {{$cp_m->deskripsi_cpmk}}
            <br>
        @endforeach
        </td>    
    </tr>
    <tr>
        <td style="width:4%">6 </td>
        <td style="width:30%;">Deskripsi Singkat MK</td> 
        <td>{{$matkul_silabus->deskripsi_matkul}}</td>    
    </tr>    
    <tr>
        <td style="width:4%">7 </td>
        <td style="width:30%;">Pokok Pembahasan</td> 
        <td>{{$matkul_silabus->pokok_pembahasan}}</td>    
    </tr>        
    <tr>
        <td style="width:4%">7 </td>
        <td style="width:30%;">Pustaka</td> 
        <td>
            <b>Pustaka Utama :</b>
            <br>
            {{$matkul_silabus->pustaka_utama}}
            <br>
            <b>Pustaka Pendukung :</b>
            <br>           
            {{$matkul_silabus->pustaka_pendukung}}             
        </td>    
    </tr>            
    <tr>
        <td style="width:4%">8 </td>
        <td style="width:30%;">Media Pembelajaran</td> 
        <td>        
            @foreach($data_media as $dm)
                - {{$dm->media_pembelajaran}}
                <br>                
            @endforeach
         </td>    
    </tr>                
    <tr>
        <td style="width:4%">9 </td>
        <td style="width:30%;">Team Teaching</td> 
        <td>
            @foreach($mk_dosen as $mk_d)
               - {{$mk_d->dosen->nama_dosen}}
                <br>               
            @endforeach
        </td>    
    </tr>                    
    <tr>
        <td style="width:4%">10 </td>
        <td style="width:30%;">Mata Kuliah Syarat</td> 
        <td>    
            @foreach($mk_prasyarat as $mk_p)
                - {{$mk_p->matkul->nama_matkul}}
                <br>
            @endforeach
        </td>    
    </tr>                        
</table>
<br>
<h4>Detail Sub CP-MK</h4>
<table style="width: 100%">
    <thead>
        <tr>
          <th style="text-align:center">Minggu Ke-</th>
          <th style="text-align:center">Sub CP-MK (Sebagai kemampuan akhir yang diharapkan)</th>
          <th style="text-align:center">Indikator</th>
          <th style="text-align:center">Kriteria dan Bentuk Penilaian</th>
          <th style="text-align:center">Metode Pembelajaran</th>          
          <th style="text-align:center">Materi Pembelajaran</th>                    
          <th style="text-align:center">Bobot Penilaian</th>                              
        </tr>
    </thead>
    <tbody>
        @php
            $count = 0;
        @endphp
        @foreach($sub_cpmk as $i => $sc)
            @if($i == $getUts->minggu_id)
            <tr>
                <td>{{$getUts->minggu_id}}</td>
                <td>Evaluasi Tengah Semester, melakukan evaluasi dan perbaikan</td>
            </tr>
            @elseif($i == $getUas->minggu_id)
            <tr>
                <td>{{$getUas->minggu_id}}</td>            
                <td>Evaluasi Akhir Semester, melakukan penilaian akhir dan kelulusan mahasiswa</td>
            </tr>
            @else
            <tr>
                <td style="text-align:center;">{{$sc->minggu_id}}</td>
                <td style="text-align:justify; width: 20%">{{$sc->kemampuan_akhir}}</td>
                <td style="text-align:justify;">{{$sc->indikator}}</td>            
                <td style="text-align:justify;">
                Kriteria : 
                <br>
                {{$sc->kriteria}}
                <br>
                Bentuk Non Test :
                <br>
                {{$sc->kriteria_non_test}}
                </td>
                <td style="text-align:justify;">
                @foreach($metode_pembelajaran as $m_k)
                    -{{$m_k->sistem_pembelajaran}}
                    <br>
                @endforeach
                </td>                        
                <td style="text-align:justify;">{{$sc->materi_pembelajaran}}</td>
                <td style="text-align:justify;">{{$sc->bobot_penilaian}}</td>
                @php
                    $count++;
                @endphp                
            </tr>
            @endif
        @endforeach
        @if($count < $getUts->minggu_id && $count<$getUas->minggu_id)
            <tr>
                <td style="text-align: center;">{{$getUts->minggu_id}}</td>
                <td style="text-align: center;" colspan="6" > <b>Evaluasi Tengah Semester, melakukan evaluasi dan perbaikan</b> </td>
            </tr>        
            <tr>
                <td style="text-align: center;">{{$getUas->minggu_id}}</td>
                <td colspan="6" style="text-align: center;"> <b>Evaluasi Akhir Semester, melakukan penilaian akhir dan kelulusan mahasiswa</b></td>
            </tr>        
        @elseif($count > $getUts->minggu_id && $count < $getUas->minggu_id)
            <tr>
                <td style="text-align: center;">{{$getUas->minggu_id}}</td>
                <td colspan="6" style="text-align: center;"> <b>Evaluasi Akhir Semester, melakukan penilaian akhir dan kelulusan mahasiswa</b></td>
            </tr>                
        @endif            
    </tbody>
  <tbody>
</table>