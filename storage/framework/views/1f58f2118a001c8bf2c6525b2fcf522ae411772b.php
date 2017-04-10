<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Biodata
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Biodata
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- include summernote css/js-->

<div class="col-md-6">

          <!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Kategori Capaian Mata Kuliah</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" action="<?php echo e(url('/kurikulum/kodecpmatkul/create')); ?>" enctype="multipart/form-data"  class="">
              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <!-- text input -->
                <div class="form-group">
                  <label>Nama Kategori</label>
                  <input type="text" class="form-control" id="nam_cp" name="nama_cp" placeholder="" required=>
                </div>
                <button type="submit" class="btn btn-primary" style="float:right;">Tambah</button>
              </form>
            </div>
          </div>
</div>

        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Daftar Kategori Mata Kuliah</h3>
            </div>    
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
              <table id="myTable" class="table table-striped table-bordered" cellspacing="0">
                <tbody>
                <thead>
                <tr>
                  <th style="text-align:center">No.</th>
                  <th style="text-align:center">Nama Kategori Capaian Mata Kuliah</th>      
                  <th style="text-align:center"></th>
                </tr>
                </thead>
                <tbody>
                 <?php $__empty_1 = true; $__currentLoopData = $kode_cpmatkul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $kod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
                  <tr>
                    <td><?php echo e($i+1); ?></td>
                    <td width="60%" style="text-align:center"><?php echo e($kod->nama_cp); ?></td>
                    <td width="35%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus biodata ini?');" href="<?php echo e(url('/kurikulum/kodecpmatkul/kode/'.$kod->id.'/delete/')); ?>" class="btn btn-danger btn-xs">
                    <i class="fa fa-trash-o"></i> Hapus</a>

                      <a href="<?php echo e(url('/kurikulum/kodecpmatkul/kode/'.$kod->id.'/edit/')); ?>" class="btn btn-success btn-xs">
                      <i class="fa fa-pencil-square-o"></i> Edit</a>
                      </td>
                  </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      <tr>
                        <td colspan="6"><center>Belum ada Kode</center></td>
                      </tr>
                  <?php endif; ?>
                </tbody>


              </tbody>
              </table>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>