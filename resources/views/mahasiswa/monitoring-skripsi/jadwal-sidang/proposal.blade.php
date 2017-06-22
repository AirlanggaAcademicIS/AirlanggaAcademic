@extends('adminlte::layouts.app')
@section('code-header')

@endsection

@section('htmlheader_title')
Jadwal Sidang Proposal
@endsection

@section('contentheader_title')
Jadwal Sidang Proposal
@endsection

@section('main-content')

<!-- <div class="row"> -->

<!-- <div class="wrapper">
<button type="button" class="btn btn-primary">Tambah</button>
</div> -->

<div class="alert alert-success" style="display: none;" id="info-simpan-jadwal-proposal">
  <strong>Success!</strong> Simpan Data Berhasil.
</div>

<div class="panel panel-default">
  <!-- <div class="panel-heading">Panel Heading</div> -->
  <div class="panel-body">
      
      <!-- tabel -->
      <div class="col-md-12">

      <div class="box" id="wrapper-tombol-jadwal-sidang-proposal">

      <button type="button" class="btn btn-success"  id="tombol-tambah-jadwal-sidang-proposal" data-toggle="modal" data-target="#modal-tambah-jadwal-sidang-proposal" style="display: none;">Tambah Jadwal Sidang</button>

      <button type="button" class="btn btn-warning" id="tombol-edit-jadwal-sidang-proposal">Edit Jadwal Sidang</button>

      

      <button type="button" class="btn btn-danger" id="tombol-hapus-jadwal-sidang-proposal">Hapus Jadwal Sidang</button>

      </div>

      

<table data-toggle="table" id="tabel-jadwal-sidang-proposal"  data-search="true" data-locale="en-US" data-toolbar="#wrapper-tombol-jadwal-sidang-proposal" >

<thead>
      <tr>
        <th data-field="state" data-radio="true"></th>
        <th data-field="id_skripsi" data-visible="false">Id Skripsi</th>
        <th data-field="nim">NIM</th>
        <th data-field="nama_mhs">Nama</th>
        <th data-field="kbk">KBK</th>
        <th data-field="judul-proposal">Judul Proposal</th>
        <!-- <th>Status Proposal</th> -->
        <th data-field="tgl-sidang">Tanggal Sidang</th>
        <th data-field="waktu-sidang">Waktu Sidang</th>
        <th data-field="tempat-sidang">Tempat Sidang</th>
        <th data-field="dosbing1">Dosen Pembimbing 1</th>
        <th data-field="dosbing2">Dosen Pembimbing 2</th>
        <th data-field="dosji">Dosen Penguji</th>
        <!-- <th></th> -->
        
      </tr>
    </thead>
    <tbody>

   
@for ($i = 0; $i < count($jadwal_sidang_proposal); $i++)
                            <tr>
                                <!-- Task Name -->
                                <td></td>
                                <td>
                                  {{$jadwal_sidang_proposal[$i]['id_skripsi']}}
                                </td>
                                <td>
                                    {{ $jadwal_sidang_proposal[$i]['nim']}}
                                </td>
                                 <td>
                                    {{ $jadwal_sidang_proposal[$i]['nama_mhs']}}
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_proposal[$i]['jenis_kbk']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_proposal[$i]['Judul']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_proposal[$i]['tgl_sidangpro']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_proposal[$i]['waktu_sidangpro']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_proposal[$i]['ruang']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_proposal[$i]['dosen_pembimbing1']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_proposal[$i]['dosen_pembimbing2']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_proposal[$i]['dosen_penguji']}}</div>
                                </td>
                                <!-- <td class="table-text">
                                    <div>{{ $jadwal_sidang_proposal[$i]['nim']}}</div>
                                </td> -->
                                </tr>
@endfor

   
 

   
      
    </tbody>
    
</table>

</div>

  </div>
</div>


<!-- Modal -->

<div id="modal-edit-jadwal-sidang-proposal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Jadwal Sidang Proposal</h4>
      </div>
      <div class="modal-body">

      <div class="modal-body pre-scrollable">
      <!-- baris 1 -->
      <div class="row">

      <div class="col-md-6">

      <input type="hidden" id="edit-id-skripsi"></input>

       <div class="form-group">
      <label for="edit-daftar-tambah-nim-jadwal-sidang-proposal">NIM</label>
      <select class="form-control" id="edit-daftar-tambah-nim-jadwal-sidang-proposal" name="edit-daftar-tambah-nim-jadwal-sidang-proposal">
          
        <option disabled selected value> -- select an option -- </option>

         @foreach($daftar_mhs as $item)
        <option value="{{$item->nim}}">{{$item->nim}}</option>
        @endforeach

      </select>
      </div>

      </div>

      <div class="col-md-6">

      <div class="form-group">
      <label for="edit-daftar-tambah-nama-jadwal-sidang-proposal">Nama</label>
      
      <input type="text" class="form-control" id="edit-daftar-tambah-nama-jadwal-sidang-proposal" name="edit-daftar-tambah-nama-jadwal-sidang-proposal"></input>
      </div>

      </div>

      </div>

      <!-- baris 2 -->

         <div class="row">

      <div class="col-md-6">

       <div class="form-group">
      <label for="edit-daftar-tambah-kbk-jadwal-sidang-proposal">KBK</label>
      <select class="form-control" id="edit-daftar-tambah-kbk-jadwal-sidang-proposal" name="edit-daftar-tambah-kbk-jadwal-sidang-proposal">
          <option disabled selected value> -- select an option -- </option>

           @foreach($daftar_kbk as $item)
        <option value="{{$item->id_kbk}}">{{$item->jenis_kbk}}</option>
        @endforeach

      </select>
      </div>

      </div>

      <div class="col-md-6">

      <div class="form-group">
      <label for="edit-daftar-tambah-judul-jadwal-sidang-proposal">Judul Proposal</label>
      
      <input type="text" class="form-control" id="edit-daftar-tambah-judul-jadwal-sidang-proposal" name="edit-daftar-tambah-judul-jadwal-sidang-proposal"></input>
      </div>

      </div>

      </div>

      <!--  -->

     <div class="row">

      <div class="col-md-6">

       <div class="form-group">
      <label for="edit-daftar-tambah-tanggal-jadwal-sidang-proposal">Tanggal Sidang</label>
      <input type="text" class="form-control" id="edit-daftar-tambah-tanggal-jadwal-sidang-proposal"></input>
      </div>

      </div>

      <div class="col-md-6">

      <div class="form-group bootstrap-timepicker timepicker">
      <label for="edit-daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="edit-daftar-tambah-waktu-jadwal-sidang-proposal" name="edit-daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div>

      </div>

      <!--  -->

      <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="edit-daftar-tambah-tempat-jadwal-sidang-proposal">Tempat Sidang</label>
      <select  class="form-control" id="edit-daftar-tambah-tempat-jadwal-sidang-proposal">
            <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_tempat as $item)
        <option value="{{$item->id_ruang}}">{{$item->nama_ruang}}</option>
        @endforeach

      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-proposal" name="daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div> -->

      </div>

      <!--  -->

       <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="edit-daftar-tambah-dosbing1-jadwal-sidang-proposal">Dosen Pembimbing 1</label>
      <select  class="form-control" id="edit-daftar-tambah-dosbing1-jadwal-sidang-proposal">
          
          <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_dosen as $item)
        <option value="{{$item->nip}}">{{$item->nip}}</option>
        @endforeach
      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-proposal" name="daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div> -->

      </div>

      <!--  -->

      <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="edit-daftar-tambah-dosbing2-jadwal-sidang-proposal">Dosen Pembimbing 2</label>
      <select  class="form-control" id="edit-daftar-tambah-dosbing2-jadwal-sidang-proposal">
          
          <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_dosen as $item)
        <option value="{{$item->nip}}">{{$item->nip}}</option>
        @endforeach
      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-proposal" name="daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div> -->

      </div>

      <!--  -->

      <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="edit-daftar-tambah-dosbing-penguji-jadwal-sidang-proposal">Dosen Penguji</label>
      <select  class="form-control" id="edit-daftar-tambah-dosbing-penguji-jadwal-sidang-proposal">
          <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_dosen as $item)
        <option value="{{$item->nip}}">{{$item->nip}}</option>
        @endforeach
      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-proposal" name="daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div> -->

      </div>

      <!--  -->
       <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="edit-daftar-tambah-nip-jadwal-sidang-proposal">NIP Petugas</label>
      <select  class="form-control" id="edit-daftar-tambah-nip-jadwal-sidang-proposal">
          
            <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_petugas_tu as $item)
        <option value="{{$item->nip_petugas}}">{{$item->nama_petugas}}</option>
        @endforeach
      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-proposal" name="daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div> -->

      </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="tombol-submit-edit-tambah-jadwal-sidang-proposal">Update</button>
      </div>
    </div>

  </div>
  
</div>
</div>



<!-- Modal -->
<div id="modal-tambah-jadwal-sidang-proposal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Jadwal Sidang Proposal</h4>
      </div>
      <div class="modal-body pre-scrollable">
      <!-- baris 1 -->
      <div class="row">

      <div class="col-md-6">

       <div class="form-group">
      <label for="daftar-tambah-nim-jadwal-sidang-proposal">NIM</label>
      <select class="form-control" id="daftar-tambah-nim-jadwal-sidang-proposal" name="daftar-tambah-nim-jadwal-sidang-proposal">
          
        <option disabled selected value> -- select an option -- </option>

         @foreach($daftar_mhs as $item)
        <option value="{{$item->nim}}">{{$item->nim}}</option>
        @endforeach

      </select>
      </div>

      </div>

      <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-nama-jadwal-sidang-proposal">Nama</label>
      
      <input type="text" class="form-control" id="daftar-tambah-nama-jadwal-sidang-proposal" name="daftar-tambah-nama-jadwal-sidang-proposal"></input>
      </div>

      </div>

      </div>

      <!-- baris 2 -->

         <div class="row">

      <div class="col-md-6">

       <div class="form-group">
      <label for="daftar-tambah-kbk-jadwal-sidang-proposal">KBK</label>
      <select class="form-control" id="daftar-tambah-kbk-jadwal-sidang-proposal" name="daftar-tambah-kbk-jadwal-sidang-proposal">
          <option disabled selected value> -- select an option -- </option>

           @foreach($daftar_kbk as $item)
        <option value="{{$item->id_kbk}}">{{$item->jenis_kbk}}</option>
        @endforeach

      </select>
      </div>

      </div>

      <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-judul-jadwal-sidang-proposal">Judul Proposal</label>
      
      <input type="text" class="form-control" id="daftar-tambah-judul-jadwal-sidang-proposal" name="daftar-tambah-judul-jadwal-sidang-proposal"></input>
      </div>

      </div>

      </div>

      <!--  -->

     <div class="row">

      <div class="col-md-6">

       <div class="form-group">
      <label for="daftar-tambah-tanggal-jadwal-sidang-proposal">Tanggal Sidang</label>
      <input type="text" class="form-control" id="daftar-tambah-tanggal-jadwal-sidang-proposal"></input>
      </div>

      </div>

      <div class="col-md-6">

      <div class="form-group bootstrap-timepicker timepicker">
      <label for="daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-proposal" name="daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div>

      </div>

      <!--  -->

      <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="daftar-tambah-tempat-jadwal-sidang-proposal">Tempat Sidang</label>
      <select  class="form-control" id="daftar-tambah-tempat-jadwal-sidang-proposal">
            <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_tempat as $item)
        <option value="{{$item->id_ruang}}">{{$item->nama_ruang}}</option>
        @endforeach

      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-proposal" name="daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div> -->

      </div>

      <!--  -->

       <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="daftar-tambah-dosbing1-jadwal-sidang-proposal">Dosen Pembimbing 1</label>
      <select  class="form-control" id="daftar-tambah-dosbing1-jadwal-sidang-proposal">
          
          <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_dosen as $item)
        <option value="{{$item->nip}}">{{$item->nip}}</option>
        @endforeach
      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-proposal" name="daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div> -->

      </div>

      <!--  -->

      <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="daftar-tambah-dosbing2-jadwal-sidang-proposal">Dosen Pembimbing 2</label>
      <select  class="form-control" id="daftar-tambah-dosbing2-jadwal-sidang-proposal">
          
          <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_dosen as $item)
        <option value="{{$item->nip}}">{{$item->nip}}</option>
        @endforeach
      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-proposal" name="daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div> -->

      </div>

      <!--  -->

      <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="daftar-tambah-dosbing-penguji-jadwal-sidang-proposal">Dosen Penguji</label>
      <select  class="form-control" id="daftar-tambah-dosbing-penguji-jadwal-sidang-proposal">
          <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_dosen as $item)
        <option value="{{$item->nip}}">{{$item->nip}}</option>
        @endforeach
      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-proposal" name="daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div> -->

      </div>

      <!--  -->
       <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="daftar-tambah-nip-jadwal-sidang-proposal">NIP Petugas</label>
      <select  class="form-control" id="daftar-tambah-nip-jadwal-sidang-proposal">
          
            <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_petugas_tu as $item)
        <option value="{{$item->nip_petugas}}">{{$item->nama_petugas}}</option>
        @endforeach
      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-proposal">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-proposal" name="daftar-tambah-waktu-jadwal-sidang-proposal"></input>
      </div>

      </div> -->

      </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="tombol-submit-tambah-jadwal-sidang-proposal">Simpan</button>



        <script type="text/javascript">


        $(document).ready(function() {

        // $('#edit-daftar-tambah-nim-jadwal-sidang-proposal').change(function(){
        //     alert('tet');
        // });  

        $('#daftar-tambah-nim-jadwal-sidang-proposal').change(function(){
              $.ajax({
                     url: 'get-mahasiswa-data',
                    type: "post",
                    data: {"_token": "{{ csrf_token() }}",
                        "nim":$('#daftar-tambah-nim-jadwal-sidang-proposal').val()
                    },
                    success: function(response){
                      //console.log(response);
                      var mhs = response.mahasiswa;
                      $('#daftar-tambah-nama-jadwal-sidang-proposal').val(mhs[0].nama_mhs);
                    }
                }); 
        });

          $('#tombol-hapus-jadwal-sidang-proposal').click(function(){
             var id_skripsi = $('#tabel-jadwal-sidang-proposal').bootstrapTable('getSelections')[0].id_skripsi;

             id_skripsi = id_skripsi.trim();

              $.ajax({
                     url: 'destroy-jadwal-sidang-proposal',
                    type: "post",
                    data: {"_token": "{{ csrf_token() }}",
                        "id_skripsi":id_skripsi
                    },
                    success: function(response){
                        if(response.status_delete==1){
                            // $('#modal-tambah-jadwal-sidang-proposal').modal('hide'); 
                            // $('#info-simpan-jadwal-proposal').show();
                            alert('Berhasil hapus data');
                            location.reload();
                        }
                        else{
                            //$('#info-simpan-jadwal-proposal').hide();
                            alert('Gagal simpan data');
                        }
                    }
                }); 


          });

          $('#tombol-submit-edit-tambah-jadwal-sidang-proposal').click(function(){

                var id_skripsi = $('#edit-id-skripsi').val();

                var nim = $('#edit-daftar-tambah-nim-jadwal-sidang-proposal').val();
                
                var kbk = $('#edit-daftar-tambah-kbk-jadwal-sidang-proposal').val();

                var judul_proposal = $("#edit-daftar-tambah-judul-jadwal-sidang-proposal").val();

                var tgl = $('#edit-daftar-tambah-tanggal-jadwal-sidang-proposal').val();

                var waktu = $('#edit-daftar-tambah-waktu-jadwal-sidang-proposal').val();

                var tempat = $('#edit-daftar-tambah-tempat-jadwal-sidang-proposal').val();

                var dosbing1 = $('#edit-daftar-tambah-dosbing1-jadwal-sidang-proposal').val();

                var dosbing2 = $('#edit-daftar-tambah-dosbing2-jadwal-sidang-proposal').val();

                var penguji = $('#edit-daftar-tambah-dosbing-penguji-jadwal-sidang-proposal').val();

                var petugas = $('#edit-daftar-tambah-nip-jadwal-sidang-proposal').val();

 
                $.ajax({
                     url: 'update-jadwal-sidang-proposal',
                    type: "post",
                    data: {"_token": "{{ csrf_token() }}",
                        "id_skripsi":id_skripsi,
                        "nim":nim,
                        "kbk":kbk,
                        'judul_proposal':judul_proposal,
                        'tgl':tgl,
                        'waktu':waktu,
                        'tempat':tempat,
                        'dosbing1':dosbing1,
                        'dosbing2':dosbing2,
                        'penguji':penguji,
                        'petugas':petugas
                    },
                    success: function(response){
                        if(response.status_edit==1){
                            // $('#modal-tambah-jadwal-sidang-proposal').modal('hide'); 
                            // $('#info-simpan-jadwal-proposal').show();
                            alert('Berhasil update data');
                            location.reload();
                        }
                        else{
                            //$('#info-simpan-jadwal-proposal').hide();
                            alert('Gagal simpan data');
                        }
                    }
                });  
           });

          $('#tombol-edit-jadwal-sidang-proposal').click(function(){
              var id_skripsi = $('#tabel-jadwal-sidang-proposal').bootstrapTable('getSelections')[0].id_skripsi;

             id_skripsi = id_skripsi.trim();

                $.ajax({
                     url: 'edit-jadwal-sidang-proposal',
                    type: "post",
                    data: {"_token": "{{ csrf_token() }}",
                        "id_skripsi":id_skripsi
                    },
                    success: function(response){

                      var skripsi = response.skripsi[0];
                      var dosbing = response.dosbing;
                      var dosing = response.dosing;

                      console.log(skripsi);

                      $('#edit-daftar-tambah-nim-jadwal-sidang-proposal').val(skripsi.NIM_id);
                      $('#edit-daftar-tambah-kbk-jadwal-sidang-proposal').val(skripsi.kbk_id);
                      $('#edit-daftar-tambah-judul-jadwal-sidang-proposal').val(skripsi.Judul);
                      $('#edit-daftar-tambah-tanggal-jadwal-sidang-proposal').val(skripsi.tgl_sidangpro);
                      $('#edit-daftar-tambah-waktu-jadwal-sidang-proposal').val(skripsi.waktu_sidangpro);
                      $('#edit-daftar-tambah-tempat-jadwal-sidang-proposal').val(skripsi.tempat_sidangpro);
                      $('#edit-daftar-tambah-nip-jadwal-sidang-proposal').val(skripsi.nip_petugas_id);
                      $('#edit-daftar-tambah-dosbing1-jadwal-sidang-proposal').val(dosbing[0].nip_id);
                      $('#edit-daftar-tambah-dosbing2-jadwal-sidang-proposal').val(dosbing[1].nip_id);
                      
                      if (typeof dosing[0] !== 'undefined') {
    // the variable is defined
    $('#edit-daftar-tambah-dosbing-penguji-jadwal-sidang-proposal').val(dosing[0].nip_id);

                      }
                      
                                            
                      $('#edit-daftar-tambah-nama-jadwal-sidang-proposal').val(skripsi.nama_mhs);
                      $('#edit-daftar-tambah-waktu-jadwal-sidang-proposal').val(skripsi.tgl_sidangpro);
                      $('#edit-daftar-tambah-waktu-jadwal-sidang-proposal').val(skripsi.waktu_sidangpro);
                      $('#edit-id-skripsi').val(skripsi.id_skripsi);


             $('#edit-daftar-tambah-waktu-jadwal-sidang-proposal').timepicker({
                minuteStep: 1,
                secondStep: 5,
                showInputs: false,
                
                modalBackdrop: true,
                showSeconds: true,
                showMeridian: false
            });

                      $('#modal-edit-jadwal-sidang-proposal').modal('show'); 
                     
                    }
                });  

          });

            $('#tombol-submit-tambah-jadwal-sidang-proposal').click(function(){

                var nim = $('#daftar-tambah-nim-jadwal-sidang-proposal').val();
                
                var kbk = $('#daftar-tambah-kbk-jadwal-sidang-proposal').val();

                var judul_proposal = $("#daftar-tambah-judul-jadwal-sidang-proposal").val();

                var tgl = $('#daftar-tambah-tanggal-jadwal-sidang-proposal').val();

                var waktu = $('#daftar-tambah-waktu-jadwal-sidang-proposal').val();

                var tempat = $('#daftar-tambah-tempat-jadwal-sidang-proposal').val();

                var dosbing1 = $('#daftar-tambah-dosbing1-jadwal-sidang-proposal').val();

                var dosbing2 = $('#daftar-tambah-dosbing2-jadwal-sidang-proposal').val();

                var penguji = $('#daftar-tambah-dosbing-penguji-jadwal-sidang-proposal').val();

                var petugas = $('#daftar-tambah-nip-jadwal-sidang-proposal').val();
 
                $.ajax({
                     url: 'create-jadwal-sidang-proposal',
                    type: "post",
                    data: {"_token": "{{ csrf_token() }}",
                        "nim":nim,
                        "kbk":kbk,
                        'judul_proposal':judul_proposal,
                        'tgl':tgl,
                        'waktu':waktu,
                        'tempat':tempat,
                        'dosbing1':dosbing1,
                        'dosbing2':dosbing2,
                        'penguji':penguji,
                        'petugas':petugas
                    },
                    success: function(response){
                        if(response.status_insert==1){
                            // $('#modal-tambah-jadwal-sidang-proposal').modal('hide'); 
                            // $('#info-simpan-jadwal-proposal').show();
                            alert('Berhasil simpan data');
                            location.reload();
                        }
                        else{
                            //$('#info-simpan-jadwal-proposal').hide();
                            alert('Gagal simpan data');
                        }
                    }
                });      
            });

             $('#daftar-tambah-waktu-jadwal-sidang-proposal').timepicker({
                minuteStep: 1,
                secondStep: 5,
                showInputs: false,
                
                modalBackdrop: true,
                showSeconds: true,
                showMeridian: false
            });
             
        }); 
            
        </script>
      </div>
    </div>

  </div>
</div>

@endsection


