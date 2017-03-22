<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Biodata Mahasiswa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->
Biodata Mahasiswa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Kodingan HTML ditaruh di sini -->

    <section class="content-header">
      <h1>
        Input Biodata
        <small>Form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

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
              <button type="submit" class="pull-right btn btn-primary" id="kirim">Input
               </button>
</div>
               </form>
            </div>
  </div></section>
</section>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>