<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
RincianDana
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
RincianDana
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- include summernote css/js-->
<div class="flash-message" style="margin-left: -16px;margin-right: -16px; margin-top: 13px;">
  <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if(Session::has('alert-' . $msg)): ?>
<div class="alert alert-<?php echo e($msg); ?>">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p class="" style="border-radius: 0"><?php echo e(Session::get('alert-' . $msg)); ?></p>
</div>
  <?php echo Session::forget('alert-' . $msg); ?>

  <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div style="margin-bottom: 10px">
  <!-- Href ini biar diklik masuk ke form tambah -->
  <a href="<?php echo e(url('/pengelolaan-kegiatan/rincian-dana/create')); ?>" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Rincian Dana</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Kode Rincian</th>      
      <th style="text-align:center">Nama Barang</th>
      <th style="text-align:center">Quantity</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   <?php $__empty_1 = true; $__currentLoopData = $rincian_dana; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $bio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
    <tr>
      <td><?php echo e($i+1); ?></td>
<<<<<<< HEAD:storage/framework/views/22d799f4298fec71864c63f83af0a350ce8b4216.php
      <td width="20%" style="text-align:center"><?php echo e($bio->nim); ?></td>
      <td width="15%" style="text-align:center"><?php echo e($bio->nama); ?></td>
      <td width="20%" style="text-align:center"><?php echo e($bio->alamat); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($bio->provinsi); ?></td>
      <td width="10%" style="text-align:center"> <?php echo App\Helpers\GeneralHelper::indonesianDateFormat($bio->tanggal_masuk); ?></td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus biodata ini?');" href="<?php echo e(url('/mahasiswa/biodata/'.$bio->id.'/delete/')); ?>" class="btn btn-danger btn-xs">
=======
      <td width="20%" style="text-align:center"><?php echo e($bio->kode_rincian); ?></td>
      <td width="15%" style="text-align:center"><?php echo e($bio->nama_barang); ?></td>
      <td width="20%" style="text-align:center"><?php echo e($bio->quantity); ?></td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus rincian ini?');" href="<?php echo e(url('/pengelolaan-kegiatan/rincian-dana/'.$bio->id.'/delete/')); ?>" class="btn btn-danger btn-xs">
>>>>>>> 811ff23a5082ee82c748905620869fcc9fb7e65f:storage/framework/views/44b7ffacc79a7af77b5ce04e36640f3532f447d5.php
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="<?php echo e(url('/pengelolaan-kegiatan/rincian-dana/'.$bio->id.'/edit/')); ?>" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
          <td colspan="6"><center>Belum ada rincian dana</center></td>
        </tr>
    <?php endif; ?>
  </tbody>
</table>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>