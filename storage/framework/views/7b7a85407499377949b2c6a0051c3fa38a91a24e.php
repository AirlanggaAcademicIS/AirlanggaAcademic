<?php $__env->startSection('htmlheader_title'); ?>
Tambah Kategori Media Pembelajaran
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Tambah Kategori Media Pembelajaran
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
			<form id="tambahKategoriMedia" method="post" action="<?php echo e(url('/kurikulum/kategori-media-pembelajaran/create')); ?>" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="kategori_media_pembelajaran" class="col-sm-2 control-label" >Kategori Media Pembelajaran</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="kategori_media_pembelajaran" name="kategori_media_pembelajaran" style="font-size:12px;" placeholder="Masukkan Kategori Media" required >
					</div>
				</div>

				<div class="form-group">
					<label for="media_pembelajaran" class="col-sm-2 control-label">Media Pembelajaran</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="media_pembelajaran" name="media_pembelajaran" style="font-size:12px;" placeholder="Masukkan Media Pembelajaran" required>
					</div>
				</div>
				<div class="form-group col-md-10">
				<div class="form-group col-md-1" style="float:right;">
					<button type="submit" class="btn btn-primary btn-md">
							Tambah
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>