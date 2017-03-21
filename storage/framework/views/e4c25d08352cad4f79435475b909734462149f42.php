<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
Nama konten 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->
Nama konten
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
              <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" placeholder="Dzikri Robbi Usamah">
                  </div>
                </div>
                <div class="form-group">
                  <label for="nim" class="col-sm-2 control-label">NIM</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nim" placeholder="081411633004">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="dosen pembimbing" class="col-sm-2 control-label">Dosen Pembimbing 1</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="dosen" placeholder="Barry Nuqoba">
                  </div>
                </div>
                <div class="form-group">
                  <label for="dosen pembimbing" class="col-sm-2 control-label" >Dosen Pembimbing 2</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="dosen" placeholder="Army Justitia">
                </div>
                </div>
                <div class="form-group">
                  <label for="judul proposal" class="col-sm-2 control-label">Judul Proposal</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="judul proposal" placeholder="Sistem Pengambil keputusan penjualan Saham">
                </div>
                </div>
                </div>
                </form>
                </div>
<div class="row">
<div class="col-md-6">
  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Upload File Proposal</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-4 control-label">Input Proposal</label>
                  <div class="col-sm-8">
                  <input type="file" id="exampleInputFile">
                  </div>
                  </div>
                <div class="box-footer">
                <center><button type="submit" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">Submit</button></center>
              </div>
                
              </div>
              </form>
              </div>
              </div>
  <div class="col-md-6">
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Upload File Skripsi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-4 control-label">Input Skripsi</label>
                  <div class="col-sm-8">
                  <input type="file" id="exampleInputFile">

         
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <center><button type="submit" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">Submit</button></center>
              </div>
            </form>
          </div>
  </div>
  </div>
              <!-- /.box-body -->

             
 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Notifikasi</h4>
        </div>
        <div class="modal-body">
          <p>Upload berhasil.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
              </div>
              </div>
              </div>
           
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>