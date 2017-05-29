<div class="col-md-12" style="text-align: center;">
    <h3>Kartu Hasil Studi {{$khs->MK}}</h3>    
</div>

<table style="width:100%; border: 1px solid black;">
    <thead> 
      <tr>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td style="vertical-align: center; text-align: left; border: 1px solid black">Jenis Mata Kuliah</td>
            <td style="vertical-align: center; text-align: left; border: 1px solid black">
                
            </td>
        </tr>  
        <tr>
            <td style="vertical-align: center; text-align: left; border: 1px solid black">Kode Mata Kuliah</td>
            <td style="vertical-align: center; text-align: left; border: 1px solid black">{{$matkul->kode_matkul}}</td>                                        
        </tr>
        <tr>
            <td style="vertical-align: center; text-align: left; border: 1px solid black">Nama Mata Kuliah</td>                    
            <td style="vertical-align: center; text-align: left; border: 1px solid black">{{$matkul->nama_matkul}}</td>                                        
        </tr>                
        <tr>
            <td style="vertical-align: center; text-align: left; border: 1px solid black">Bobot SKS</td>                    
            <td style="vertical-align: center; text-align: left; border: 1px solid black">{{$matkul->sks}}</td>                                        
        </tr>                                
        <tr>
            <td style="vertical-align: center; text-align: left; border: 1px solid black">Deskripsi Mata Kuliah</td>                    
            <td style="vertical-align: center; text-align: left; border: 1px solid black">{{$matkul->deskripsi_matkul}}</td>                                        
        </tr>                            
        <tr>
            <td style="vertical-align: center; text-align: left; border: 1px solid black">Capaian Mata Kuliah</td>                    
            <td style="vertical-align: center; text-align: left; border: 1px solid black">{{$matkul->capaian_matkul}}</td>                                        
        </tr>                                            
        <tr>
            <td style="vertical-align: center; text-align: left; border: 1px solid black">Penilaian Mata Kuliah</td>                    
            <td style="vertical-align: center; text-align: left; border: 1px solid black">{{$matkul->penilaian_matkul}}</td>                                        
        </tr>                                                            
        <tr>
            <td style="vertical-align: center; text-align: left; border: 1px solid black">Pokok Pembahasan</td>                    
            <td style="vertical-align: center; text-align: left; border: 1px solid black">{{$matkul->pokok_pembahasan}}</td>                                        
        </tr>                                                                            
        <tr>
            <td style="vertical-align: center; text-align: left; border: 1px solid black">Pustaka Mata Kuliah</td>                    
            <td style="vertical-align: center; text-align: left; border: 1px solid black">
            <p>Pustaka Utama :
            {{$matkul->pustaka_utama}}
            </p>
            <p>Pustaka Pendukung :
            {{$matkul->pustaka_pendukung}} 
            </p>                   
            </td>                                        
        </tr> 
        <tr>
            <td style="vertical-align: center; text-align: left; border: 1px solid black">Syarat SKS</td>                    
            <td style="vertical-align: center; text-align: left; border: 1px solid black">{{$matkul->syarat_sks}}</td>                                        
        </tr>                                                  
    </tbody>
</table>

