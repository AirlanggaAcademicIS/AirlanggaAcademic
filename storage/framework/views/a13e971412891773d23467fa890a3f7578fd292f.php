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
  <a href="<?php echo e(url('/monsi/skripsi/create')); ?>" type="button" class="btn btn-info btn-md" >
    <i class="fa fa-plus-square"></i> Tambah Skripsi</a>
</div>
<div style="overflow: auto">
<table id="myTable" class="table table-striped table-bordered" cellspacing="0">
  <thead>
    <tr>
      <th style="text-align:center">No.</th>
      <th style="text-align:center">NIM</th>      
      <th style="text-align:center">KBK</th>
      <th style="text-align:center">Judul</th>
      <th style="text-align:center">Upload Berkas Proposal</th>
      <th style="text-align:center">Tanggal Pengumpulan Proposal</th>
      <th style="text-align:center">Tanggal Sidang Proposal</th>
      <th style="text-align:center">Waktu Sidang Proposal</th>
      <th style="text-align:center">Tempat Sidang Proposal</th>
      <th style="text-align:center">Status Sidang Proposal</th>
      <th style="text-align:center">Nilai Sidang Proposal</th>
      <th style="text-align:center">Upload Berkas Skripsi</th>
      <th style="text-align:center">Tanggal Pengumpulan Skripsi</th>
      <th style="text-align:center">Tanggal Sidang Skripsi</th>
      <th style="text-align:center">Waktu Sidang Skripsi</th>
      <th style="text-align:center">Tempat Sidang Skripsi</th>
      <th style="text-align:center">Status Sidang Skripsi</th>
      <th style="text-align:center">Nilai Sidang Skripsi</th>
      <th style="text-align:center">Verifikasi Konsultasi</th>
      <th style="text-align:center">NIP Petugas</th>
      <th style="text-align:center">Action</th>
    </tr>
    </thead>
  <tbody>
   <?php $__empty_1 = true; $__currentLoopData = $skripsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $skrip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
    <tr>
      <td><?php echo e($i+1); ?></td>
      <td width="5%" style="text-align:center"><?php echo e($skrip->NIM); ?></td>
      <td width="5%" style="text-align:center"><?php echo e($skrip->id_kbk); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($skrip->Judul); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($skrip->upload_berkas_proposal); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($skrip->tanggal_pengumpulan_proposal); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($skrip->tgl_sidangpro); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($skrip->waktu_sidangpro); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($skrip->tempat_sidangpro); ?></td>
      <td width="5%" style="text-align:center"><?php echo e($skrip->id_statusprop); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($skrip->nilai_sidangpro); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($skrip->upload_berkas_skripsi); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($skrip->tanggal_pengumpulan_skripsi); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($skrip->tgl_sidangskrip); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($skrip->waktu_sidangskrip); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($skrip->tempat_sidangskrip); ?></td>
      <td width="5%" style="text-align:center"><?php echo e($skrip->id_statusskrip); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($skrip->nilai_sidangskrip); ?></td>
      <td width="5%" style="text-align:center"><?php echo e($skrip->is_verified); ?></td>
      <td width="10%" style="text-align:center"><?php echo e($skrip->nip_petugas); ?></td>
      <td width="10%" style="text-align:center" ><a onclick="return confirm('Anda yakin untuk menghapus data skripsi ini?');" href="<?php echo e(url('/monsi/skripsi/'.$skrip->id_skripsi.'/delete/')); ?>" class="btn btn-danger btn-xs">
        <i class="fa fa-trash-o"></i> Hapus</a>
        <a href="<?php echo e(url('/monsi/skripsi/'.$skrip->id_skripsi.'/edit/')); ?>" class="btn btn-warning btn-xs">
        <i class="fa fa-pencil-square-o"></i> Edit</a>
        </td>
    </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
          <td colspan="6"><center>Belum ada data skripsi</center></td>
        </tr>
    <?php endif; ?>
  </tbody>
</table>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>