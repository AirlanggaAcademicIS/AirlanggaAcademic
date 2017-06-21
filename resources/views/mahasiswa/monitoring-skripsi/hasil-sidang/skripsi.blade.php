@extends('adminlte::layouts.app')
@section('code-header')

@endsection

@section('htmlheader_title')
Hasil Sidang Skripsi
@endsection

@section('contentheader_title')
Hasil Sidang Skripsi
@endsection

@section('main-content')



<div class="panel panel-default">
  



  <div class="panel-body">

<div class="box" id="tombol-manage-hasil-skripsi" style="display: none;">

<button type="button" class="btn btn-warning" id="tombol-tambah-nilai-hasil-sidang-skripsi">Upload Nilai</button>

<!-- <button type="button" class="btn btn-danger">Hapus</button> -->

</div>

	<table data-toggle="table" id="tabel-hasil-skripsi" data-locale="en-US" data-search="true" data-toolbar="#tombol-manage-hasil-skripsi"> 
    <thead>
      <tr>

        <th data-radio="true" data-field="state"></th>
        <th data-field="id_skripsi" data-visible="false"></th>
        <th data-field="nim">NIM</th>
        <th data-field="nama">Nama</th>
        <th data-field="kbk">KBK</th>
        <th data-field="judul_skripsi">Judul Skripsi</th>
        <th data-field="dosbing1">Dosen Pembimbing 1</th>
        <th data-field="dosbing2">Dosen Pembimbing 2</th>
        <th data-field="dosji">Dosen Penguji</th>
        <th data-field="status_skripsi">Status Skripsi</th>
        <th data-field="nilai">Nilai</th>
      </tr>
    </thead>
    <tbody>
     
   

      @for ($i = 0; $i < count($hasil_sidang_skripsi); $i++)
                            <tr>
                                <!-- Task Name -->
                                <td></td>
                                <td>
                                  {{$hasil_sidang_skripsi[$i]['id_skripsi']}}
                                </td>
                                <td>
                                    {{ $hasil_sidang_skripsi[$i]['nim']}}
                                </td>
                                <td>
                                    {{ $hasil_sidang_skripsi[$i]['nama_mhs']}}
                                </td>
                                <td>
                                    <div>{{ $hasil_sidang_skripsi[$i]['jenis_kbk']}}</div>
                                </td>
                                <td>
                                    <div>{{ $hasil_sidang_skripsi[$i]['Judul']}}</div>
                                </td>
                               
                                <td>
                                    <div>{{ $hasil_sidang_skripsi[$i]['nama_dosen_pembimbing1']}}</div>
                                </td>
                                <td>
                                    <div>{{ $hasil_sidang_skripsi[$i]['nama_dosen_pembimbing2']}}</div>
                                </td>
                                <td>
                                    <div>{{ $hasil_sidang_skripsi[$i]['nama_dosen_penguji']}}</div>
                                </td>
                                <td>
                                    <div>{{ $hasil_sidang_skripsi[$i]['status_skripsi']}}</div>
                                </td>
                               <td>
                                    <div>{{ $hasil_sidang_skripsi[$i]['nilai_skripsi']}}</div>
                                </td>
                                </tr>
@endfor
  
      
    </tbody>
  </table>

</div>
</div>

<!-- Modal -->
<div id="modal-upload-hasil-sidang-skripsi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Hasil Sidang Skripsi</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" id="hasil_sidang_skripsi_id"></input>
        <div class="form-group">
        <label for="tambah-nilai-sidang-skripsi">Nilai Sidang Skripsi</label>
        <input type="number" class="form-control" id="tambah-nilai-sidang-skripsi"></input>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="tombol-sumbit-tambah-nilai-sidang-skripsi">Upload</button>
      </div>
    </div>

  </div>
</div>

  <script type="text/javascript">
      $(document).ready(function(){
            $('#tombol-tambah-nilai-hasil-sidang-skripsi').click(function(){
                    //alert('tet');
                    var id_skripsi = $('#tabel-hasil-skripsi').bootstrapTable('getSelections')[0].id_skripsi;

                    id_skripsi = id_skripsi.trim();

                    $('#hasil_sidang_skripsi_id').val(id_skripsi);

                    $('#modal-upload-hasil-sidang-skripsi').modal('show');

                    //alert(id_skripsi);
            });

            $('#tombol-sumbit-tambah-nilai-sidang-skripsi').click(function(){

                var id_skripsi = $('#hasil_sidang_skripsi_id').val();
                
                var nilai_sidang_skripsi = $('#tambah-nilai-sidang-skripsi').val();

                $.ajax({
                     url: 'upload-nilai-sidang-skripsi',
                    type: "post",
                    data: {"_token": "{{ csrf_token() }}",
                        "id_skripsi":id_skripsi,

                        "nilai_sidang_skripsi":nilai_sidang_skripsi
                    },
                    success: function(response){
                        if(response.status_upload==1){
                            // $('#modal-tambah-jadwal-sidang-proposal').modal('hide'); 
                            // $('#info-simpan-jadwal-proposal').show();
                            alert('Berhasil upload nilai');
                            location.reload();
                        }
                        else{
                            //$('#info-simpan-jadwal-proposal').hide();
                            alert('Gagal upload nilai');
                        }
                    }
                });
            }); 
      });
  </script>
 
@endsection



