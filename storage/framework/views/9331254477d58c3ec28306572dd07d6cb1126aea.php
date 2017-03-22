<?php $__env->startSection('htmlheader_title'); ?>
	<?php echo e(trans('adminlte_lang::message.home')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

			<div class="box box-success">
		            <div class="box-header with-border">
		              <h3 class="box-title">View Detail Maintenance</h3>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		              <form role="form">
		                <!-- text input -->
		                <div class="form-group">
		                  <label>Nama Asset</label>
		                  <input type="text" class="form-control" placeholder="masukkan nama asset yang di maintenance">
		                </div>
		                <div class="form-group">
		                  <label>Nama Pemaintenance</label>
		                  <input type="text" class="form-control" placeholder="masukkan nama teknisi">
		                </div>
		                <!-- textarea -->
		                <div class="form-group">
		                  <label>Problem</label>
		                  <textarea class="form-control" rows="3" ></textarea>
		                </div>
		                <div class="form-group">
		                  <label>Solution</label>
		                  <textarea class="form-control" rows="3" ></textarea>
		                </div>
		                <div class="form-group">
		                  <button type="submit" class="btn btn-primary pull-right">Submit</button>
		                </div>
        		</div>
    </div>
</div>          
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>