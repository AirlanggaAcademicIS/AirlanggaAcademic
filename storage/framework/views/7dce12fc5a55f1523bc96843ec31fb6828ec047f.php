<?php $__env->startSection('htmlheader_title'); ?>
  <?php echo e(trans('adminlte_lang::message.home')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>

      
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>
<script type="text/javascript">
$(document).ready(function(){
    $('#myTable1').DataTable();
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>