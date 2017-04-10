<?php $__env->startSection('htmlheader_title'); ?>
Edit Jadwal
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Edit Jadwal
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-header'); ?>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<style>
	.form-group label{
		text-align: left !important;
	}
</style>

	<?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php if(Session::has('alert-' . $msg)): ?>
<div class="alert alert-<?php echo e($msg); ?>">
	<p class="" style="border-radius: 0"><?php echo e(Session::get('alert-' . $msg)); ?></p>
</div>
	<?php echo Session::forget('alert-' . $msg); ?>

	<?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<div class="row">
	<div class="col-md-12">
		<div class="">

			<?php if(count($errors) > 0): ?>
			<div class="alert alert-danger">
				<ul>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($error); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
			<?php endif; ?>
			<br>
			<form id="tambahJadwal" method="post" action="<?php echo e(url('/krs-khs/JadwalKuliah/'.$jadwal->id.'/edit')); ?>" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

				<!-- Menampilkan input text biasa -->
				

				<div class="form-group">
					<label for="id_mk_ditawarkan" class="col-sm-2 control-label">mk ditawarkan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_mk_ditawarkan" name="id_mk_ditawarkan" value="<?php echo e($jadwal->id_mk_ditawarkan); ?>" placeholder="Masukkan Nama Mk" required>
					</div>
				</div>

				<div class="form-group">
					<label for="id_jam" class="col-sm-2 control-label">jam</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_jam" name="id_jam" value="<?php echo e($jadwal->id_jam); ?>" placeholder="Masukkan Jam" required>
					</div>
				</div>

				<div class="form-group">
					<label for="id_hari" class="col-sm-2 control-label">hari</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_hari" name="id_hari" value="<?php echo e($jadwal->id_hari); ?>" placeholder="Masukkan Hari" required>
					</div>
				</div>

				<div class="form-group">
					<label for="id_ruang" class="col-sm-2 control-label">ruang</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_ruang" name="id_ruang" value="<?php echo e($jadwal->id_ruang); ?>" placeholder="Masukkan Ruang" required>
					</div>
				</div>

				<div class="form-group text-center">
					<div class="col-md-8 col-md-offset-2">
					<button type="submit" class="btn btn-primary btn-lg">
							Confirm
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>