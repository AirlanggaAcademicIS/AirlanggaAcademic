<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Biodata Mahasiswa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Kodingan HTML ditaruh di sini -->

    <section class="content-header">
      <h1>
        Biodata Mahasiswa
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
          <h3 class="box-title">Biodata Bambang</h3>

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
                    <th>Bambang</th>
                  </div>
                </div>
                </div>

                <br>

        <div class="row">
          <div class="form-group">
                  <label for="NIM" class="col-sm-2 control-label">NIM : </label>
                  <div class="col-sm-10">
                    <th>081411633013</th>
                  </div>
                </div>
                </div>

                <br>

        <div class="row">
          <div class="form-group">
                  <label for="Fakultas" class="col-sm-2 control-label">Fakultas : </label>
                  <div class="col-sm-10">
                    <th>Sains dan Teknologi</th>
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
          <div class="form-group">
                  <label for="Prodi" class="col-sm-2 control-label">Program Studi : </label>
                  <div class="col-sm-10">
                    <th>S1 Sistem Informasi</th>
                  </div>
                </div>
                </div>

                <br>


                <div class="row">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="jeniskelamin" >Jenis Kelamin :</label>
                    <div class="col-sm-10">
                              <th>Laki Laki</th>
                    </div>
                 </div>
                </div>

                 <br>

                <div class="row">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="Agama" >Agama :</label>
                    <div class="col-sm-10">
                             <th>Atheis</th>
                    </div>
                 </div>
                </div>

                 <br>

                <div class="row">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="kebangsaan" >Kebangsaan :</label>
                    <div class="col-sm-10">
                              <th>Internasional</th>
                    </div>
                 </div>
                </div>

                 <br>

                 <div class="row">
          <div class="form-group">
                  <label for="tempatlahir" class="col-sm-2 control-label">Tempat Tanggal Lahir : </label>
                  <div class="col-sm-10">
                   <th>Unknown, --/--/--</th>
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
          <div class="form-group">
                  <label for="emailprodi" class="col-sm-2 control-label">Alamat Email Prodi : </label>
                  <div class="col-sm-10">
                    <th>Bambang@fst.unair.ac.id</th>
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
          <div class="form-group">
                  <label for="emailmhs" class="col-sm-2 control-label">Alamat Email lain : </label>
                  <div class="col-sm-10">
                    <th>Bambang@gamil.com</th>
                  </div>
                </div>
                </div>

                <br>

                <div class="row">
          <div class="form-group">
                  <label for="blogprodi" class="col-sm-2 control-label">Alamat Blog Prodi : </label>
                  <div class="col-sm-10">
                    <th>Bambang@blogspot.com</th>
                  </div>
                </div>
                </div>

                <br>

                
                <div class="row">
          <div class="form-group">
                  <label for="cita-cita" class="col-sm-2 control-label">Cita-Cita : </label>
                  <div class="col-sm-10">
                    <th>White and Black Hacker</th>
                  </div>
                </div>
                </div>
              </div>

    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      

                </div>
  </div>
  <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-primary" id="kirim">Input
               </button></form>
            </div>
  </div></section>
</section>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>