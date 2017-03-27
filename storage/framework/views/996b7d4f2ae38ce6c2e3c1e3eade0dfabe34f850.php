<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
Nama konten 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->
Edit Hasil Rapat
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
       <form class="form-horizontal">
  <div class="form-group">
    <label for="namaRapat" class="col-sm-2 control-label">Nama Rapat</label>
    <div class="col-sm-9">
      <input class="form-control" id="namaRapat" placeholder="Rapat Kurikulum" type="text" disabled>
    </div>
  </div>
  <div class="form-group">
    <label for="waktuRapat" class="col-sm-2 control-label">Waktu Rapat</label>
    <div class="col-sm-9">
      <input class="form-control" id="waktuRapat" placeholder="20-03-2017 09.00"  type="text" disabled>
    </div>
  </div>
    <div class="form-group">
      <label for="tempatRapat" class="col-sm-2 control-label">Tempat Rapat</label>
      <div class="col-sm-9">
       <input class="form-control" id="waktuRapat" placeholder="Ruang 101" type="text" disabled>
      </div>
      </div>
       <div class="form-group">
  <label for="agenda"class="col-sm-2 control-label">Agenda Rapat:</label>
  <div class="col-sm-9">
  <textarea class="form-control" rows="3" id="agenda" enable></textarea>
</div>
    </div>
     <div class="form-group">
  <label for="hasil"class="col-sm-2 control-label">Hasil Rapat:</label>
  <div class="col-sm-9">
  <textarea class="form-control" rows="5" id="hasil" enable></textarea>
</div>
    </div>
   
             <a href="notulen.notulen.ViewDaftarHasil"><button type="subm" class="pull-right btn btn-primary" id="edit">Edit
               </button>
               </tr>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>