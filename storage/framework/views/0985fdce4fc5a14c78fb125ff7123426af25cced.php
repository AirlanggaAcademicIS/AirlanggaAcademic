<?php $__env->startSection('htmlheader_title'); ?>
Tambah Surat Tugas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Tambah Surat Tugas
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
			<form id="tambahSktugas" method="post" action="<?php echo e(url('/dosen/sktugas/create')); ?>" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="id_surat" class="col-sm-2 control-label">Id Surat</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_surat" name="id_surat" placeholder="Masukkan Id Surat" required>
					</div>
				</div>

				<div class="form-group">
					<label for="no_surat" class="col-sm-2 control-label">No Surat</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="no_surat" name="no_surat" placeholder="Masukkan No Surat" required>
					</div>
				</div>


				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="tanggal_surat" class="col-sm-2 control-label">Tanggal Surat</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="tanggal_surat" placeholder="Masukkan Tanggal Surat" required>
					</div>
				</div>

				

				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="tanggal_upload" class="col-sm-2 control-label">Tanggal Upload</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker-1" name="tanggal_upload" placeholder="Masukkan Tanggal Upload" required>
					</div>
				</div>


				<div class="form-group">
					<label for="keterangan_surat" class="col-sm-2 control-label">Keterangan Surat</label>
					<div class="col-md-8">
						<textarea id="keterangan_surat" name="keterangan_surat" placeholder=" Masukkan Keterangan Surat" required cols="82" rows="5">
						</textarea>
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	$( function() {
	    var date = $('#datepicker').datepicker({ dateFormat: 'yy/mm/dd' }).val();

	  } );
</script>
<script>
	$( function() {
	    var date = $('#datepicker-1').datepicker({ dateFormat: 'yy/mm/dd' }).val();

	  } );
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>