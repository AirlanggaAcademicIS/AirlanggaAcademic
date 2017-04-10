<?php $__env->startSection('htmlheader_title'); ?>
Edit Detail Nilai
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Edit Detail Nilai
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-header'); ?>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<link rel="stylesheet" href="<?php echo e(asset('/css/dropzone.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<style>
	.form-group label{
		text-align: left !important;
	}
</style>
	<!-- Ini buat menampilkan notifikasi -->
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
			<form id="editDetailNilai" method="post" action="<?php echo e(url('/krs-khs/khs/'.$detail_nilai->id_detail_nilai.'/edit')); ?>" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="id_mk_ditawarkan" class="col-sm-2 control-label">ID MK Ditawarkan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_mk_ditawarkan" name="id_mk_ditawarkan" placeholder="Masukkan ID MK Ditawarkan" value="<?php echo e($detail_nilai->id_mk_ditawarkan); ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="NIM" class="col-sm-2 control-label">NIM</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="NIM" name="NIM" placeholder="Masukkan NIM Mahasiswa" value="<?php echo e($detail_nilai->NIM); ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="id_jenis_penilaian" class="col-sm-2 control-label">Jenis Penilaian</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_jenis_penilaian" name="id_jenis_penilaian" placeholder="Masukkan ID Jenis Penilaian" value="<?php echo e($detail_nilai->id_jenis_penilaian); ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="detail_nilai" class="col-sm-2 control-label">Nilai</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="Nilai" name="Nilai" placeholder="Masukkan Detail Nilai" value="<?php echo e($detail_nilai->Detail_nilai); ?>" required>
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