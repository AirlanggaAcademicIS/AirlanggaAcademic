@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Nama konten 
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Nama konten
@endsection

@section('main-content')
<<<<<<< HEAD
<div class="col-md-3">

              <div id="external-events">
              	<div class="external-event ui-draggable ui-draggable-handle" style="background-color: rgb(0, 31, 63); border-color: rgb(0, 31, 63); color: rgb(255, 255, 255); position: relative;">wrgws</div>
              	<div class="external-event ui-draggable ui-draggable-handle" style="background-color: rgb(114, 175, 210); border-color: rgb(114, 175, 210); color: rgb(255, 255, 255); position: relative;">dg</div>
                <div class="external-event bg-green ui-draggable ui-draggable-handle" style="position: relative; z-index: auto; width: 230px; right: auto; height: 30px; bottom: auto; left: 0px; top: 0px;">Lunch</div>
                <div class="external-event bg-yellow ui-draggable ui-draggable-handle" style="position: relative;">Go home</div>
                <div class="external-event bg-aqua ui-draggable ui-draggable-handle" style="position: relative; z-index: auto; width: 230px; right: auto; height: 30px; bottom: auto; left: 0px; top: 0px;">Do homework</div>
                <div class="external-event bg-light-blue ui-draggable ui-draggable-handle" style="position: relative;">Work on UI design</div>
                <div class="external-event bg-red ui-draggable ui-draggable-handle" style="position: relative; z-index: auto; width: 230px; right: auto; height: 30px; bottom: auto; left: 0px; top: 0px;">Sleep tight</div>
              </div>

              <div class="input-group">
                <div class="input-group-btn">
                  <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
                </div>
                <!-- /btn-group -->
              </div>
 
        </div>

<script>
  $(function () {
  	$("#add-new-event").click(function (e) {
      e.preventDefault();
     
      //Create events
      var event = $("<div />");
      event.addClass("external-event");
      event.html(val);
      $('#external-events').prepend(event);
    });
  });
</script>

=======
<<<<<<< HEAD
<div class="content-wrapper" style="min-height: 916px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            </tr>
                </thead>
                <tbody>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <tr role="row" class="odd">
                  <td class="">Gecko</td>
                  <td class="sorting_1">Seamonkey 1.1</td>
                  <td class="">Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="">Webkit</td>
                  <td class="sorting_1">Safari 3.0</td>
                  <td class="">OSX.4+</td>
                  <td>522.1</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="">Webkit</td>
                  <td class="sorting_1">Safari 2.0</td>
                  <td class="">OSX.4+</td>
                  <td>419.3</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="">Webkit</td>
                  <td class="sorting_1">Safari 1.3</td>
                  <td class="">OSX.3</td>
                  <td>312.8</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="">Webkit</td>
                  <td class="sorting_1">Safari 1.2</td>
                  <td class="">OSX.3</td>
                  <td>125.5</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="">Webkit</td>
                  <td class="sorting_1">S60</td>
                  <td class="">S60</td>
                  <td>413</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="">Misc</td>
                  <td class="sorting_1">PSP browser</td>
                  <td class="">PSP</td>
                  <td>-</td>
                  <td>C</td>
                </tr><tr role="row" class="even">
                  <td class="">Presto</td>
                  <td class="sorting_1">Opera for Wii</td>
                  <td class="">Wii</td>
                  <td>-</td>
                  <td>A</td>
                </tr><tr role="row" class="odd">
                  <td class="">Presto</td>
                  <td class="sorting_1">Opera 9.5</td>
                  <td class="">Win 88+ / OSX.3+</td>
                  <td>-</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="">Presto</td>
                  <td class="sorting_1">Opera 9.2</td>
                  <td class="">Win 88+ / OSX.3+</td>
                  <td>-</td>
                  <td>A</td>
                </tr></tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                </tfoot>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 121px;">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 152px;">Browser</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 133px;">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 101px;">Engine version</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 71px;">CSS grade</th></tr>
                </thead>
                <tbody>
                </tr><tr role="row" class="odd">
                  <td class="sorting_1">Gecko</td>
                  <td>Netscape Navigator 9</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">Gecko</td>
                  <td>Mozilla 1.0</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1</td>
                  <td>A</td>
                </tr></tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                </tfoot>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
=======
<!-- Kodingan HTML ditaruh di sini -->
<<<<<<< HEAD
=======
<<<<<<< HEAD
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Biodata
        <small>Form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>
=======
>>>>>>> f6fccf35c9921d3e2b03b57a0426d305eee32806
>>>>>>> de4bfccffc14a8ee68cf1015ed13a93bcb7be818
>>>>>>> ea7138f61680371be6328adb72ddcdcad47c69a9
@endsection
>>>>>>> 8862d013f7507c91c23a9472cbb9c55f0da908c1

    <section class="content">


      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Biodata Diri</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

        <div class="row">
          <div class="form-group">
                  <label for="NamaMahasiswa" class="col-sm-2 control-label">Nama : </label>
                  <div class="col-sm-10">
                    <input type="NamaMahasiswa" class="form-control" id="NamaMahasiswa" placeholder="Nama Lengkap">
                  </div>
                </div>
                </div>

                <br>

        <div class="row">
          <div class="form-group">
                  <label for="NIM" class="col-sm-2 control-label">NIM : </label>
                  <div class="col-sm-10">
                    <input type="NIM" class="form-control" id="NIM" placeholder="08..........">
                  </div>
                </div>
                </div>

                <br>

        <div class="row">
          <div class="form-group">
                  <label for="Fakultas" class="col-sm-2 control-label">Fakultas : </label>
                  <div class="col-sm-10">
                    <input type="Fakultas" class="form-control" id="Fakultas" placeholder="">
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
          <div class="form-group">
                  <label for="Prodi" class="col-sm-2 control-label">Program Studi : </label>
                  <div class="col-sm-10">
                    <input type="Prodi" class="form-control" id="Prodi" placeholder="S1/D3 Sistem Informasi">
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
          <div class="form-group">
                  <label for="noHP" class="col-sm-2 control-label">Nomor Handphone : </label>
                  <div class="col-sm-10">
                    <input type="noHP" class="form-control" id="noHP" placeholder="+628..........">
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
          <div class="form-group">
                  <label for="noID" class="col-sm-2 control-label">No. Kartu Identitas : </label>
                  <div class="col-sm-10">
                    <input type="noID" class="form-control" id="noID" placeholder="KTP/SIM/PASSPOR">
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="jeniskelamin" >Jenis Kelamin :</label>
                    <div class="col-sm-10">
                              <select class="form-control" name="jeniskelamin" >
                              <option value="" selected>Pilih Jenis Kelamin</option>
                              <option value="" >Laki-Laki</option>
                              <option value="" >Perempuan</option>
                            </select>
               
                    </div>
                 </div>
                </div>

                 <br>

                <div class="row">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="Agama" >Agama :</label>
                    <div class="col-sm-10">
                              <select class="form-control" name="Agama" >
                              <option value="" selected>Pilih Agama</option>
                              <option value="" >Islam</option>
                              <option value="" >Kristen</option>
                              <option value="" >Katholik</option>
                              <option value="" >Hindu</option>
                              <option value="" >Budha</option>
                            </select>
               
                    </div>
                 </div>
                </div>

                 <br>

                <div class="row">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="kebangsaan" >Kebangsaan :</label>
                    <div class="col-sm-10">
                              <select class="form-control" name="kebangsaan" >
                              <option value="" selected>Pilih Kebangsaan</option>
                              <option value="" >Indonesia</option>
                              <option value="" >Malaysia</option>
                               <option value="" >Singapura</option>
                                <option value="" >Brunei</option>
                                 <option value="" >Papua Nugini</option>
                            </select>
               
                    </div>
                 </div>
                </div>

                 <br>

                <div class="row">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="tanggallahirmhs" >Tanggal Lahir :</label>
                    <div class="col-sm-3">
                              <select class="form-control" name="tanggallahir" >
                              <option value="" selected>Pilih Tanggal</option>
                              <option value="" >1</option>
                              <option value="" >2</option>
                              <option value="" >3</option>
                              <option value="" >4</option>
                              <option value="" >5</option>
                              <option value="" >6</option>
                              <option value="" >7</option>
                              <option value="" >8</option>
                              <option value="" >9</option>
                            </select>
               
                    </div>
                    <div class="col-sm-4">
                              <select class="form-control" name="bulanlahir" >
                              <option value="" selected>Pilih Bulan</option>
                              <option value="" >Januari</option>
                              <option value="" >Februari</option>
                              <option value="" >Maret</option>
                              <option value="" >April</option>
                              <option value="" >Mei</option>
                              <option value="" >Juni</option>
                              <option value="" >Juli</option>
                              <option value="" >Agustus</option>
                              <option value="" >September</option>
                            </select>
               
                    </div>
                    <div class="col-sm-3">
                              <select class="form-control" name="tahunlahir" >
                              <option value="" selected>Pilih Tahun</option>
                              <option value="" >1990</option>
                              <option value="" >1991</option>
                              <option value="" >1992</option>
                              <option value="" >1993</option>
                              <option value="" >1994</option>
                              <option value="" >1995</option>
                              <option value="" >1996</option>
                              <option value="" >1997</option>
                              <option value="" >1998</option>
                            </select>
               
                    </div>
                 </div>
                </div>

                 <br>

                 <div class="row">
          <div class="form-group">
                  <label for="tempatlahir" class="col-sm-2 control-label">Tempat Lahir : </label>
                  <div class="col-sm-10">
                    <input type="tempatlahir" class="form-control" id="tempatlahir" placeholder="Kota/Kabupaten, Provinsi, Negara">
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
          <div class="form-group">
                  <label for="alamatasli" class="col-sm-2 control-label">Alamat Asli : </label>
                  <div class="col-sm-10">
                    <input type="alamatasli" class="form-control" id="alamatasli" placeholder="Jalan, Kecamatan, Kota/Kabupaten, Provinsi, Negara">
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
          <div class="form-group">
                  <label for="alamattinggal" class="col-sm-2 control-label">Alamat Tinggal : </label>
                  <div class="col-sm-10">
                    <input type="alamattinggal" class="form-control" id="alamattinggal" placeholder="Jalan, Kecamatan, Kota/Kabupaten, Provinsi, Negara">
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
          <div class="form-group">
                  <label for="alamatSMA" class="col-sm-2 control-label">Sekolah Sebelumnya : </label>
                  <div class="col-sm-10">
                    <input type="alamatSMA" class="form-control" id="alamatSMA" placeholder="Nama Sekolah, Kota/Kabupaten, Provinsi, Negara">
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
          <div class="form-group">
                  <label for="emailprodi" class="col-sm-2 control-label">Alamat Email Prodi : </label>
                  <div class="col-sm-10">
                    <input type="emailprodi" class="form-control" id="emailprodi" placeholder="">
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
          <div class="form-group">
                  <label for="emailmhs" class="col-sm-2 control-label">Alamat Email lain : </label>
                  <div class="col-sm-10">
                    <input type="emailmhs" class="form-control" id="emailmhs" placeholder="">
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
          <div class="form-group">
                  <label for="blogprodi" class="col-sm-2 control-label">Alamat Blog Prodi : </label>
                  <div class="col-sm-10">
                    <input type="blogprodi" class="form-control" id="blogprodi" placeholder="">
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
          <div class="form-group">
                  <label for="blogmhs" class="col-sm-2 control-label">Alamat Blog lain : </label>
                  <div class="col-sm-10">
                    <input type="blogmhs" class="form-control" id="blogmhs" placeholder="">
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
          <div class="form-group">
                  <label for="cita-cita" class="col-sm-2 control-label">Cita-Cita : </label>
                  <div class="col-sm-10">
                    <input type="cita-cita" class="form-control" id="cita-cita" placeholder="">
                  </div>
                </div>
                </div>
              </div>

    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Biodata Ayah</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

        <div class="row">
          <div class="form-group">
                  <label for="NamaAyah" class="col-sm-2 control-label">Nama Ayah : </label>
                  <div class="col-sm-10">
                    <input type="NamaAyah" class="form-control" id="NamaAyah" placeholder="Nama Lengkap">
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pendidikanAyah" >Pendidikan Terakhir :</label>
                    <div class="col-sm-10">
                              <select class="form-control" name="pendidikanAyah" >
                              <option value="" selected>Pilih Jenjang Pendidikan</option>
                              <option value="" >S1</option>
                              <option value="" >S2</option>
                              <option value="" >S3</option>
                              <option value="" >D1</option>
                              <option value="" >D2</option>
                              <option value="" >D3</option>
                              <option value="" >SMA</option>
                              <option value="" >SMP</option>
                              <option value="" >SD</option>
                            </select>
               
                    </div>
                 </div>
                </div>

                 <br>

                <div class="row">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pekerjaanAyah" >Pekerjaan :</label>
                    <div class="col-sm-10">
                              <select class="form-control" name="pekerjaanAyah" >
                              <option value="" selected>Pilih Pekerjaan</option>
                              <option value="" >PNS</option>
                              <option value="" >Wirausaha</option>
                              <option value="" >Karyawan Swasta</option>
                              <option value="" >Dokter</option>
                              <option value="" >Lainnya</option>
                            </select>
               
                    </div>
                 </div>
                </div>

                 <br>

                 <div class="row">
          <div class="form-group">
                  <label for="alamatAyah" class="col-sm-2 control-label">Alamat : </label>
                  <div class="col-sm-10">
                    <input type="alamatAyah" class="form-control" id="alamatAyah" placeholder="Jalan, Kecamatan, Kota/Kabupaten, Provinsi, Negara">
                  </div>
                </div>
                </div>

                </div>


      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Biodata Ibu</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

        <div class="row">
          <div class="form-group">
                  <label for="NamaIbu" class="col-sm-2 control-label">Nama Ibu : </label>
                  <div class="col-sm-10">
                    <input type="NamaIbu" class="form-control" id="NamaIbu" placeholder="Nama Lengkap">
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pendidikanIbu" >Pendidikan Terakhir :</label>
                    <div class="col-sm-10">
                              <select class="form-control" name="pendidikanIbu" >
                              <option value="" selected>Pilih Jenjang Pendidikan</option>
                              <option value="" >S1</option>
                              <option value="" >S2</option>
                              <option value="" >S3</option>
                              <option value="" >D1</option>
                              <option value="" >D2</option>
                              <option value="" >D3</option>
                              <option value="" >SMA</option>
                              <option value="" >SMP</option>
                              <option value="" >SD</option>
                            </select>
               
                    </div>
                 </div>
                </div>

                 <br>

                <div class="row">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pekerjaanIbu" >Pekerjaan :</label>
                    <div class="col-sm-10">
                              <select class="form-control" name="pekerjaanIbu" >
                              <option value="" selected>Pilih Pekerjaan</option>
                              <option value="" >PNS</option>
                              <option value="" >Wirausaha</option>
                              <option value="" >Karyawan Swasta</option>
                              <option value="" >Dokter</option>
                              <option value="" >Lainnya</option>
                            </select>
               
                    </div>
                 </div>
                </div>

                 <br>

                 <div class="row">
          <div class="form-group">
                  <label for="alamatIbu" class="col-sm-2 control-label">Alamat : </label>
                  <div class="col-sm-10">
                    <input type="alamatIbu" class="form-control" id="alamatIbu" placeholder="Jalan, Kecamatan, Kota/Kabupaten, Provinsi, Negara">
                  </div>
                </div>
                </div>

                </div>
  </div>
  <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="kirim">Tambah
               </button></form>
            </div>
  </div></section>
</div>
</section>
</div>

@endsection

@section('code-footer')

@endsection