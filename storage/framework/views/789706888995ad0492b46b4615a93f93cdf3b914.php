<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Penelitian Mahasiswa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>

Penelitian Mahasiswa
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
  <a href="<?php echo e(url('/mahasiswa/penelitian/create')); ?>" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Form Penelitian</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">Judul Penelitian</th>      
      <th style="text-align:center">Jenis</th>
      <th style="text-align:center">Anggota</th>
      <th style="text-align:center">Tahun Penelitian</th>
      <th style="text-align:center">Status</th>
      <th style="text-align:center"></th>
    </tr>
    </thead>
  <tbody>
   <?php $__empty_1 = true; $__currentLoopData = $penelitian_mhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $bio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
    <tr>
      <td width="5%" style="text-align:center"><?php echo e($i+1); ?></td>
      <td width="20%" style="text-align:center"><?php echo e($bio->judul); ?></td>
      <td width="15%" style="text-align:center"><?php echo e($bio->kategori_penelitian); ?></td>
      <td width="20%" style="text-align:center"><?php echo e($bio->peneliti); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($bio->tahun); ?></td>

      <?php if(($bio->is_verified)==0): ?>
      <td width="20%" style="text-align:center"><span class="label label-warning">Process</span></td>
      <?php elseif(($bio->is_verified)==1): ?>
      <td width="20%" style="text-align:center"><span class="label label-success">Approved</span></td>
      <?php else: ?>
      <td width="20%" style="text-align:center"><span class="label label-danger">Rejected</span></td>
      <?php endif; ?>

       <?php if(($bio->is_verified)==0): ?>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus penelitian ini?');" href="<?php echo e(url('/mahasiswa/penelitian/'.$bio->kode_penelitian.'/delete/')); ?>" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="<?php echo e(url('/mahasiswa/penelitian/'.$bio->kode_penelitian.'/edit/')); ?>" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
      </td>
      <?php else: ?>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus penelitian ini?');" href="<?php echo e(url('/mahasiswa/penelitian/'.$bio->kode_penelitian.'/delete/')); ?>" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
      </td>    
      <?php endif; ?>

      
        
    </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
          <td colspan="6"><center>Belum ada penelitian</center></td>
        </tr>
    <?php endif; ?>
  </tbody>
</table>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>