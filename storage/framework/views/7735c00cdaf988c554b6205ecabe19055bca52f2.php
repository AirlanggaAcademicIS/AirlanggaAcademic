<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Capaian Program Studi 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Capaian Program Studi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
	<?php echo $__env->make('kurikulum.kode.content-cplprodi', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>