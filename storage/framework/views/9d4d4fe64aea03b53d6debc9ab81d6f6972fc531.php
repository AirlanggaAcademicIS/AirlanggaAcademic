<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
	<?php echo $__env->make('kurikulum.cpprogram.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>