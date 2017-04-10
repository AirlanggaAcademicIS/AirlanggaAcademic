<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Asset
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Asset
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
  <a href="<?php echo e(url('/inventaris/asset/create')); ?>" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Asset</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">ID Asset</th>      
      <th style="text-align:center">NIP Petugas</th>
      <th style="text-align:center">Serial Barcode</th>
      <th style="text-align:center">Nama Asset</th>
      <th style="text-align:center">Lokasi</th>
      <th style="text-align:center">Expired Date</th>
      <th style="text-align:center">Nama Supplier</th>
      <th style="text-align:center">Harga Satuan</th>
      <th style="text-align:center">Jumlah Barang</th>
      <th style="text-align:center">Total Harga</th>
      <th style="text-align:center">Action</th>
      </tr>
    </thead>
  <tbody>
   <?php $__empty_1 = true; $__currentLoopData = $asset; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $ass): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
    <tr>
      <td><?php echo e($i+1); ?></td>
      <td width="20%" style="text-align:center"><?php echo e($ass->id_asset); ?></td>
      <td width="15%" style="text-align:center"><?php echo e($ass->nip_petugas); ?></td>
      <td width="20%" style="text-align:center"><?php echo e($ass->serial_barcode); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($ass->nama_asset); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($ass->lokasi); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($ass->expired_date); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($ass->nama_supplier); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($ass->harga_satuan); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($ass->jumlah_barang); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($ass->total_harga); ?></td>
      <td width="20%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus asset ini?');" href="<?php echo e(url('/inventaris/asset/'.$ass->id_asset.'/delete/')); ?>" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="<?php echo e(url('/inventaris/asset/'.$ass->id_asset.'/edit/')); ?>" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
          <td colspan="6"><center>Belum ada asset</center></td>
        </tr>
    <?php endif; ?>
  </tbody>
</table>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>