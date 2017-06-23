@extends('adminlte::layouts.app')
@section('code-header')

@endsection

@section('htmlheader_title')
Jadwal Sidang Skripsi
@endsection

@section('contentheader_title')
Jadwal Sidang Skripsi
@endsection

@section('main-content')

<!-- <div class="row"> -->

<!-- <div class="wrapper">
<button type="button" class="btn btn-primary">Tambah</button>
</div> -->

<div class="alert alert-success" style="display: none;" id="info-simpan-jadwal-skripsi">
  <strong>Success!</strong> Simpan Data Berhasil.
</div>

<div class="panel panel-default">
  <!-- <div class="panel-heading">Panel Heading</div> -->
  <div class="panel-body">
      
      <!-- tabel -->
      <div class="col-md-12">

      <div class="box" id="wrapper-tombol-jadwal-sidang-skripsi">

      <!-- <button type="button" class="btn btn-success"  id="tombol-tambah-jadwal-sidang-skripsi" data-toggle="modal" data-target="#modal-tambah-jadwal-sidang-skripsi">Tambah Jadwal Sidang</button> -->

      <button type="button" class="btn btn-warning" id="tombol-edit-jadwal-sidang-skripsi">Tambah Jadwal Sidang Skripsi</button>

      

      <!-- <button type="button" class="btn btn-danger" id="tombol-hapus-jadwal-sidang-skripsi">Hapus Jadwal Sidang</button> -->

      </div>

      

<table data-toggle="table" id="tabel-jadwal-sidang-skripsi"  data-search="true" data-locale="en-US" data-toolbar="#wrapper-tombol-jadwal-sidang-skripsi" >

<thead>
      <tr>
        <th data-field="state" data-radio="true"></th>
        <th data-field="id_skripsi" data-visible="false">Id Skripsi</th>
        <th data-field="nama_mhs">Nama</th>
        <th data-field="nim">NIM</th>
        <th data-field="kbk">KBK</th>
        <th data-field="judul-skripsi">Judul skripsi</th>
        <!-- <th>Status skripsi</th> -->
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

   
@for ($i = 0; $i < count($jadwal_sidang_skripsi); $i++)
                            <tr>
                                <!-- Task Name -->
                                <td></td>
                                <td>
                                  {{$jadwal_sidang_skripsi[$i]['id_skripsi']}}
                                </td>
                                
                                <td>
                                    {{ $jadwal_sidang_skripsi[$i]['nama_mhs']}}
                                </td>
                                <td>
                                    {{ $jadwal_sidang_skripsi[$i]['nim']}}
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_skripsi[$i]['jenis_kbk']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_skripsi[$i]['Judul']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_skripsi[$i]['tgl_sidangpro']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_skripsi[$i]['waktu_sidangpro']}}</div>
                                </td>
                                <td>
                                    <div>{{ $jadwal_sidang_skripsi[$i]['ruang']}}</div>
                                </td>
                               
                                <td>
                                    <div>{{ $jadwal_sidang_skripsi[$i]['nama_dosen_pembimbing1']}}</div>
                                </td>
                               
                                <td>
                                    <div>{{ $jadwal_sidang_skripsi[$i]['nama_dosen_pembimbing2']}}</div>
                                </td>
                                
                                <td>
                                    <div>{{ $jadwal_sidang_skripsi[$i]['nama_dosen_penguji']}}</div>
                                </td>
                                <!-- <td class="table-text">
                                    <div>{{ $jadwal_sidang_skripsi[$i]['nim']}}</div>
                                </td> -->
                                </tr>
@endfor

   
 

   
      
    </tbody>
    
</table>

</div>

  </div>
</div>

<!-- Modal -->

<div id="modal-edit-jadwal-sidang-skripsi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Jadwal Sidang skripsi</h4>
      </div>
      <div class="modal-body">

      <div class="modal-body pre-scrollable">
      <!-- baris 1 -->
     <!--  <div class="row">

      <div class="col-md-6"> -->

      <input type="hidden" id="edit-id-skripsi2"></input>

     <!--   <div class="form-group">
      <label for="edit-daftar-tambah-nim-jadwal-sidang-skripsi">NIM</label>
      <select class="form-control" id="edit-daftar-tambah-nim-jadwal-sidang-skripsi" name="edit-daftar-tambah-nim-jadwal-sidang-skripsi">
          
        <option disabled selected value> -- select an option -- </option>

         @foreach($daftar_mhs as $item)
        <option value="{{$item->nim}}">{{$item->nim}}</option>
        @endforeach

      </select>
      </div>

      </div>

      <div class="col-md-6">

      <div class="form-group">
      <label for="edit-daftar-tambah-nama-jadwal-sidang-skripsi">Nama</label>
      
      <input type="text" class="form-control" id="edit-daftar-tambah-nama-jadwal-sidang-skripsi" name="edit-daftar-tambah-nama-jadwal-sidang-skripsi"></input>
      </div>

      </div>

      </div> -->

      <!-- baris 2 -->
<!-- 
         <div class="row">

      <div class="col-md-6">

       <div class="form-group">
      <label for="edit-daftar-tambah-kbk-jadwal-sidang-skripsi">KBK</label>
      <select class="form-control" id="edit-daftar-tambah-kbk-jadwal-sidang-skripsi" name="edit-daftar-tambah-kbk-jadwal-sidang-skripsi">
          <option disabled selected value> -- select an option -- </option>

           @foreach($daftar_kbk as $item)
        <option value="{{$item->id_kbk}}">{{$item->jenis_kbk}}</option>
        @endforeach

      </select>
      </div>

      </div>

      <div class="col-md-6">

      <div class="form-group">
      <label for="edit-daftar-tambah-judul-jadwal-sidang-skripsi">Judul skripsi</label>
      
      <input type="text" class="form-control" id="edit-daftar-tambah-judul-jadwal-sidang-skripsi" name="edit-daftar-tambah-judul-jadwal-sidang-skripsi"></input>
      </div>

      </div>

      </div> -->

      <!--  -->

     <div class="row">

      <div class="col-md-6">

       <div class="form-group">
      <label for="edit-daftar-tambah-tanggal-jadwal-sidang-skripsi">Tanggal Sidang</label>
      <input type="text" class="form-control" id="edit-daftar-tambah-tanggal-jadwal-sidang-skripsi"></input>
      </div>

      </div>

      <div class="col-md-6">

      <div class="form-group bootstrap-timepicker timepicker">
      <label for="edit-daftar-tambah-waktu-jadwal-sidang-skripsi">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="edit-daftar-tambah-waktu-jadwal-sidang-skripsi" name="edit-daftar-tambah-waktu-jadwal-sidang-skripsi"></input>
      </div>

      </div>

      </div>

      <!--  -->

      <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="edit-daftar-tambah-tempat-jadwal-sidang-skripsi">Tempat Sidang</label>
      <select  class="form-control" id="edit-daftar-tambah-tempat-jadwal-sidang-skripsi">
            <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_tempat as $item)
        <option value="{{$item->id_ruang}}">{{$item->nama_ruang}}</option>
        @endforeach

      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-skripsi">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-skripsi" name="daftar-tambah-waktu-jadwal-sidang-skripsi"></input>
      </div>

      </div> -->

      </div>

      <!--  -->

      <!--  <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="edit-daftar-tambah-dosbing1-jadwal-sidang-skripsi">Dosen Pembimbing 1</label>
      <select  class="form-control" id="edit-daftar-tambah-dosbing1-jadwal-sidang-skripsi">
          
          <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_dosen as $item)
        <option value="{{$item->nip}}">{{$item->nip}}</option>
        @endforeach
      </select>
      </div>

      </div> -->

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-skripsi">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-skripsi" name="daftar-tambah-waktu-jadwal-sidang-skripsi"></input>
      </div>

      </div> -->

      <!-- </div> -->

      <!--  -->

    <!--   <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="edit-daftar-tambah-dosbing2-jadwal-sidang-skripsi">Dosen Pembimbing 2</label>
      <select  class="form-control" id="edit-daftar-tambah-dosbing2-jadwal-sidang-skripsi">
          
          <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_dosen as $item)
        <option value="{{$item->nip}}">{{$item->nip}}</option>
        @endforeach
      </select>
      </div>

      </div> -->

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-skripsi">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-skripsi" name="daftar-tambah-waktu-jadwal-sidang-skripsi"></input>
      </div>

      </div> -->

      <!-- </div> -->

      <!--  -->

<!--       <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="edit-daftar-tambah-dosbing-penguji-jadwal-sidang-skripsi">Dosen Penguji</label>
      <select  class="form-control" id="edit-daftar-tambah-dosbing-penguji-jadwal-sidang-skripsi">
          <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_dosen as $item)
        <option value="{{$item->nip}}">{{$item->nip}}</option>
        @endforeach
      </select>
      </div>

      </div> -->

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-skripsi">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-skripsi" name="daftar-tambah-waktu-jadwal-sidang-skripsi"></input>
      </div>

      </div> -->

      <!-- </div> -->

      <!--  -->
   <!--     <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="edit-daftar-tambah-nip-jadwal-sidang-skripsi">NIP Petugas</label>
      <select  class="form-control" id="edit-daftar-tambah-nip-jadwal-sidang-skripsi">
          
            <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_petugas_tu as $item)
        <option value="{{$item->nip_petugas}}">{{$item->nama_petugas}}</option>
        @endforeach
      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-skripsi">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-skripsi" name="daftar-tambah-waktu-jadwal-sidang-skripsi"></input>
      </div>

      </div> -->

      <!-- </div>  -->
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="tombol-submit-edit-tambah-jadwal-sidang-skripsi">Update</button>
      </div>
    </div>

  </div>
  
</div>
</div>



<!-- Modal -->
<div id="modal-tambah-jadwal-sidang-skripsi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Jadwal Sidang skripsi</h4>
      </div>
      <div class="modal-body pre-scrollable">
      <!-- baris 1 -->
      <div class="row">

      <div class="col-md-6">

       <div class="form-group">
      <label for="daftar-tambah-nim-jadwal-sidang-skripsi">NIM</label>
      <select class="form-control" id="daftar-tambah-nim-jadwal-sidang-skripsi" name="daftar-tambah-nim-jadwal-sidang-skripsi">
          
        <option disabled selected value> -- select an option -- </option>

         @foreach($daftar_mhs as $item)
        <option value="{{$item->nim}}">{{$item->nim}}</option>
        @endforeach

      </select>
      </div>

      </div>

      <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-nama-jadwal-sidang-skripsi">Nama</label>
      
      <input type="text" class="form-control" id="daftar-tambah-nama-jadwal-sidang-skripsi" name="daftar-tambah-nama-jadwal-sidang-skripsi"></input>
      </div>

      </div>

      </div>

      <!-- baris 2 -->

         <div class="row">

      <div class="col-md-6">

       <div class="form-group">
      <label for="daftar-tambah-kbk-jadwal-sidang-skripsi">KBK</label>
      <select class="form-control" id="daftar-tambah-kbk-jadwal-sidang-skripsi" name="daftar-tambah-kbk-jadwal-sidang-skripsi">
          <option disabled selected value> -- select an option -- </option>

           @foreach($daftar_kbk as $item)
        <option value="{{$item->id_kbk}}">{{$item->jenis_kbk}}</option>
        @endforeach

      </select>
      </div>

      </div>

      <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-judul-jadwal-sidang-skripsi">Judul skripsi</label>
      
      <input type="text" class="form-control" id="daftar-tambah-judul-jadwal-sidang-skripsi" name="daftar-tambah-judul-jadwal-sidang-skripsi"></input>
      </div>

      </div>

      </div>

      <!--  -->

     <div class="row">

      <div class="col-md-6">

       <div class="form-group">
      <label for="daftar-tambah-tanggal-jadwal-sidang-skripsi">Tanggal Sidang</label>
      <input type="text" class="form-control" id="daftar-tambah-tanggal-jadwal-sidang-skripsi"></input>
      </div>

      </div>

      <div class="col-md-6">

      <div class="form-group bootstrap-timepicker timepicker">
      <label for="daftar-tambah-waktu-jadwal-sidang-skripsi">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-skripsi" name="daftar-tambah-waktu-jadwal-sidang-skripsi"></input>
      </div>

      </div>

      </div>

      <!--  -->

      <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="daftar-tambah-tempat-jadwal-sidang-skripsi">Tempat Sidang</label>
      <select  class="form-control" id="daftar-tambah-tempat-jadwal-sidang-skripsi">
            <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_tempat as $item)
        <option value="{{$item->id_ruang}}">{{$item->nama_ruang}}</option>
        @endforeach

      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-skripsi">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-skripsi" name="daftar-tambah-waktu-jadwal-sidang-skripsi"></input>
      </div>

      </div> -->

      </div>

      <!--  -->

       <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="daftar-tambah-dosbing1-jadwal-sidang-skripsi">Dosen Pembimbing 1</label>
      <select  class="form-control" id="daftar-tambah-dosbing1-jadwal-sidang-skripsi">
          
          <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_dosen as $item)
        <option value="{{$item->nip}}">{{$item->nip}}</option>
        @endforeach
      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-skripsi">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-skripsi" name="daftar-tambah-waktu-jadwal-sidang-skripsi"></input>
      </div>

      </div> -->

      </div>

      <!--  -->

      <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="daftar-tambah-dosbing2-jadwal-sidang-skripsi">Dosen Pembimbing 2</label>
      <select  class="form-control" id="daftar-tambah-dosbing2-jadwal-sidang-skripsi">
          
          <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_dosen as $item)
        <option value="{{$item->nip}}">{{$item->nip}}</option>
        @endforeach
      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-skripsi">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-skripsi" name="daftar-tambah-waktu-jadwal-sidang-skripsi"></input>
      </div>

      </div> -->

      </div>

      <!--  -->

      <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="daftar-tambah-dosbing-penguji-jadwal-sidang-skripsi">Dosen Penguji</label>
      <select  class="form-control" id="daftar-tambah-dosbing-penguji-jadwal-sidang-skripsi">
          <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_dosen as $item)
        <option value="{{$item->nip}}">{{$item->nip}}</option>
        @endforeach
      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-skripsi">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-skripsi" name="daftar-tambah-waktu-jadwal-sidang-skripsi"></input>
      </div>

      </div> -->

      </div>

      <!--  -->
       <div class="row">

      <div class="col-md-12">

       <div class="form-group">
      <label for="daftar-tambah-nip-jadwal-sidang-skripsi">NIP Petugas</label>
      <select  class="form-control" id="daftar-tambah-nip-jadwal-sidang-skripsi">
          
            <option disabled selected value> -- select an option -- </option>

             @foreach($daftar_petugas_tu as $item)
        <option value="{{$item->nip_petugas}}">{{$item->nama_petugas}}</option>
        @endforeach
      </select>
      </div>

      </div>

     <!--  <div class="col-md-6">

      <div class="form-group">
      <label for="daftar-tambah-waktu-jadwal-sidang-skripsi">Waktu Sidang</label>
      
      <input type="text" class="form-control" id="daftar-tambah-waktu-jadwal-sidang-skripsi" name="daftar-tambah-waktu-jadwal-sidang-skripsi"></input>
      </div>

      </div> -->

      </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="tombol-submit-tambah-jadwal-sidang-skripsi">Simpan</button>



        <script type="text/javascript">


        $(document).ready(function() {

        // $('#edit-daftar-tambah-nim-jadwal-sidang-skripsi').change(function(){
        //     alert('tet');
        // });  

        $('#daftar-tambah-nim-jadwal-sidang-skripsi').change(function(){
              $.ajax({
                     url: 'get-mahasiswa-data',
                    type: "post",
                    data: {"_token": "{{ csrf_token() }}",
                        "nim":$('#daftar-tambah-nim-jadwal-sidang-skripsi').val()
                    },
                    success: function(response){
                      //console.log(response);
                      var mhs = response.mahasiswa;
                      $('#daftar-tambah-nama-jadwal-sidang-skripsi').val(mhs[0].nama_mhs);
                    }
                }); 
        });

          $('#tombol-hapus-jadwal-sidang-skripsi').click(function(){
             var id_skripsi = $('#tabel-jadwal-sidang-skripsi').bootstrapTable('getSelections')[0].id_skripsi;

             id_skripsi = id_skripsi.trim();

              $.ajax({
                     url: 'destroy-jadwal-sidang-skripsi',
                    type: "post",
                    data: {"_token": "{{ csrf_token() }}",
                        "id_skripsi":id_skripsi
                    },
                    success: function(response){
                        if(response.status_delete==1){
                            // $('#modal-tambah-jadwal-sidang-skripsi').modal('hide'); 
                            // $('#info-simpan-jadwal-skripsi').show();
                            alert('Berhasil hapus data');
                            location.reload();
                        }
                        else{
                            //$('#info-simpan-jadwal-skripsi').hide();
                            alert('Gagal simpan data');
                        }
                    }
                }); 


          });

          $('#tombol-submit-edit-tambah-jadwal-sidang-skripsi').click(function(){

                var id_skripsi = $('#edit-id-skripsi2').val();

                //  var nim = $('#edit-daftar-tambah-nim-jadwal-sidang-skripsi').val();
                
                // var kbk = $('#edit-daftar-tambah-kbk-jadwal-sidang-skripsi').val();

                // var judul_skripsi = $("#edit-daftar-tambah-judul-jadwal-sidang-skripsi").val();

                var tgl = $('#edit-daftar-tambah-tanggal-jadwal-sidang-skripsi').val();

                var waktu = $('#edit-daftar-tambah-waktu-jadwal-sidang-skripsi').val();

                var tempat = $('#edit-daftar-tambah-tempat-jadwal-sidang-skripsi').val();

                // var dosbing1 = $('#edit-daftar-tambah-dosbing1-jadwal-sidang-skripsi').val();

                // var dosbing2 = $('#edit-daftar-tambah-dosbing2-jadwal-sidang-skripsi').val();

                // var penguji = $('#edit-daftar-tambah-dosbing-penguji-jadwal-sidang-skripsi').val();

                var petugas = $('#edit-daftar-tambah-nip-jadwal-sidang-skripsi').val();

                // alert(nim+" "+kbk+" "+judul_skripsi+" "+tgl+" "+waktu+" "+tempat+" "+dosbing1+" "+dosbing2+" "+penguji+" "+petugas);
 
                $.ajax({
                     url: 'update-jadwal-sidang-skripsi',
                    type: "post",
                    data: {"_token": "{{ csrf_token() }}",
                        "id_skripsi":id_skripsi,
                        
                        'tgl':tgl,
                        'waktu':waktu,
                        'tempat':tempat,
                        
                    },
                    success: function(response){
                        if(response.status_edit==1){
                            // $('#modal-tambah-jadwal-sidang-skripsi').modal('hide'); 
                            // $('#info-simpan-jadwal-skripsi').show();
                            alert('Berhasil update data');
                            location.reload();
                        }
                        else{
                            //$('#info-simpan-jadwal-skripsi').hide();
                            alert('Gagal simpan data');
                        }
                    }
                });  
           });

          $('#tombol-edit-jadwal-sidang-skripsi').click(function(){
              var id_skripsi = $('#tabel-jadwal-sidang-skripsi').bootstrapTable('getSelections')[0].id_skripsi;



             id_skripsi = id_skripsi.trim();

              $('#edit-id-skripsi2').val(id_skripsi);

              $('#modal-edit-jadwal-sidang-skripsi').modal('show');

              //alert(id_skripsi);

              //alert(tgl_sidangskrip);

          });

            $('#tombol-submit-tambah-jadwal-sidang-skripsi').click(function(){

                var nim = $('#daftar-tambah-nim-jadwal-sidang-skripsi').val();
                
                var kbk = $('#daftar-tambah-kbk-jadwal-sidang-skripsi').val();

                var judul_skripsi = $("#daftar-tambah-judul-jadwal-sidang-skripsi").val();

                var tgl = $('#daftar-tambah-tanggal-jadwal-sidang-skripsi').val();

                var waktu = $('#daftar-tambah-waktu-jadwal-sidang-skripsi').val();

                var tempat = $('#daftar-tambah-tempat-jadwal-sidang-skripsi').val();

                var dosbing1 = $('#daftar-tambah-dosbing1-jadwal-sidang-skripsi').val();

                var dosbing2 = $('#daftar-tambah-dosbing2-jadwal-sidang-skripsi').val();

                var penguji = $('#daftar-tambah-dosbing-penguji-jadwal-sidang-skripsi').val();

                var petugas = $('#daftar-tambah-nip-jadwal-sidang-skripsi').val();
 
                $.ajax({
                     url: 'create-jadwal-sidang-skripsi',
                    type: "post",
                    data: {"_token": "{{ csrf_token() }}",
                        "nim":nim,
                        "kbk":kbk,
                        'judul_skripsi':judul_skripsi,
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
                            // $('#modal-tambah-jadwal-sidang-skripsi').modal('hide'); 
                            // $('#info-simpan-jadwal-skripsi').show();
                            alert('Berhasil simpan data');
                            location.reload();
                        }
                        else{
                            //$('#info-simpan-jadwal-skripsi').hide();
                            alert('Gagal simpan data');
                        }
                    }
                });      
            });

            



             $('#daftar-tambah-tanggal-jadwal-sidang-skripsi').datepicker({
                dateFormat: 'yy-mm-dd'
                });
             $('#edit-daftar-tambah-tanggal-jadwal-sidang-skripsi').datepicker({
                dateFormat: 'yy-mm-dd'
                });
             $('#daftar-tambah-waktu-jadwal-sidang-skripsi').timepicker({
                minuteStep: 1,
                secondStep: 5,
                showInputs: false,
                
                modalBackdrop: true,
                showSeconds: true,
                showMeridian: false
            });
             $('#edit-daftar-tambah-waktu-jadwal-sidang-skripsi').timepicker({
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



