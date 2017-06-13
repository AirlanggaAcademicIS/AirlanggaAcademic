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
        <b>CPL-PRODI :</b> 
        <br>
        @foreach($cpem as $cpm)
           {{$cpm->cpem->kode_cpem}} - {{$cpm->cpem->deskripsi_cpem}}
        @endforeach
        <br>
        <b>CP-MK :</b> 
        <br>
        @foreach($cp_matkul as $cp_m)
            {{$cp_m->deskripsi_cpmk}}
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
        <td style="width:4%">9 </td>
        <td style="width:30%;">Mata Kuliah Syarat</td> 
        <td>
            @foreach($mk_prasyarat as $mk_p)
                - {{$mk_p->matkul->nama_matkul}}
                <br>
            @endforeach
        </td>    
    </tr>                        


</table>