<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Jurnal
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Jurnal
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
  <a href="<?php echo e(url('/dosen/jurnal/create')); ?>" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah jurnal</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Judul Jurnal</th>      
      <th style="text-align:center">Halaman</th>
      <th style="text-align:center">Bidang Jurnal</th>
      <th style="text-align:center">Tanggal Jurnal</th>
      <th style="text-align:center">Status Jurnal</th>
      <th style="text-align:center">Volume</th>
      <th style="text-align:center">Penulis Ke</th>
    </tr>
    </thead>
  <tbody>
   <?php $__empty_1 = true; $__currentLoopData = $jurnal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $jurnal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
    <tr>
      <td><?php echo e($i+1); ?></td>
      <td width="20%" style="text-align:center"><?php echo e($jurnal->nama_jurnal); ?></td>
      <td width="15%" style="text-align:center"><?php echo e($jurnal->halaman_jurnal); ?></td>
      <td width="20%" style="text-align:center"><?php echo e($jurnal->bidang_jurnal); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($jurnal->tanggal_jurnal); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($jurnal->status_jurnal); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($jurnal->volume_jurnal); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($jurnal->penulis_ke); ?></td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus jurnal ini?');" href="<?php echo e(url('/dosen/jurnal/'.$jurnal->id_jurnal.'/delete/')); ?>" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="<?php echo e(url('/dosen/jurnal/'.$jurnal->id_jurnal.'/edit/')); ?>" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
          <td colspan="6"><center>Belum ada jurnal</center></td>
        </tr>
    <?php endif; ?>
  </tbody>
</table>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>