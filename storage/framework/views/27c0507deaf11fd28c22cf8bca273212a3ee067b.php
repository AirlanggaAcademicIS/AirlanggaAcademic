<html>
<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
Nama konten
<title></title>
<head></head> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Laporan kinerja dosen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Kodingan HTML ditaruh di sini -->

<body>
<label>Pilih tahun ajar :</label>
                <select class="form-control select2" style="width: 15%;">
                  <option selected="selected">2014/2015 Ganjil</option>
                  <option>2015/2016 Ganjil</option>
                  <option>2016/2017 Ganjil</option>
                </select><br>
                <a href="<?php echo e(url('/dosen/laporan/isilaporan')); ?>" class="btn btn-success btn-flat">OK</a>
</body>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>