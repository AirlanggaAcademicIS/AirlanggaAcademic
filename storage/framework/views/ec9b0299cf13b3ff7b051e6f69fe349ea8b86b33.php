<?php $__env->startSection('htmlheader_title'); ?>
	<?php echo e(trans('adminlte_lang::message.home')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="box box-warning">
				            <div class="box-header with-border">
				              <h3 class="box-title">View Detail Peminjaman</h3>
				            </div>
				            <!-- /.box-header -->
				            <div class="box-body">
				              <form role="form">
				                <!-- text input -->
				                <div class="form-group">
				                  <label>Nomor Induk Peminjam</label>
				                  <input type="text" class="form-control" value="<?php echo e($peminjaman->nim_nip_peminjam); ?>">
				                </div>

				                <div class="form-group">
				                  <label>Petugas</label>
				                  <input type="text" class="form-control" value="<?php echo e($peminjaman->nip_petugas); ?>">
				                </div>

				                <div class="form-group">
				                  <label>Asset Yang dipinjam</label>
				                  <input type="text" class="form-control" value="<?php echo e($peminjaman->asset_yang_dipinjam); ?>">
				                </div>

				                <div class="form-group">
					                <label>Checkout Date:</label>
					                <div class="input-group date">
					                  <div class="input-group-addon">
					                    <i class="fa fa-calendar"></i>
					                  </div>
					                  <input type="text" class="form-control pull-right" value="<?php echo App\Helpers\GeneralHelper::indonesianDateFormat($peminjaman->checkout_date); ?>">
					                </div>
					             </div>

				                <div class="form-group">
					                <label>Expected Checkin Date:</label>
					                <div class="input-group date">
					                  <div class="input-group-addon">
					                    <i class="fa fa-calendar"></i>
					                  </div>
					                  <input type="text" class="form-control pull-right" value="<?php echo App\Helpers\GeneralHelper::indonesianDateFormat($peminjaman->expected_checkin_date); ?>">
					                </div>
					             </div>

					             <div class="form-group">
					                <label>Checkin Date:</label>
					                <div class="input-group date">
					                  <div class="input-group-addon">
					                    <i class="fa fa-calendar"></i>
					                  </div>
					                  <input type="text" class="form-control pull-right" value="<?php echo App\Helpers\GeneralHelper::indonesianDateFormat($peminjaman->checkin_date); ?>">
					                </div>
					             </div>

					             <div class="form-group">
				                  <label>Waktu Pinjam</label>
				                  <input type="text" class="form-control" value="<?php echo e(date("h:i", strtotime($peminjaman->waktu_pinjam))); ?>">
				                </div>


				                <div class="form-group">
		                  			<a href="<?php echo e(url('/inventaris/index-peminjaman')); ?>" type="button" class="btn btn-primary pull-right">Finish</a>
		                		</div>

				              </form>
				            </div>
				            <!-- /.box-body -->
				          </div>       
			</div>
		</div>
</div>		          
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>