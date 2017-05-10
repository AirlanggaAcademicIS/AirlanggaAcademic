<?php $__env->startSection('htmlheader_title'); ?>
<<<<<<< HEAD:storage/framework/views/08558c4f3d217434ebf1fa831400302c2938984c.php
Tambah Capaian Pembelajaran
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Tambah Capaian Pembelajaran
=======
Tambah Rincian Dana
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Tambah Rincian Dana
>>>>>>> 811ff23a5082ee82c748905620869fcc9fb7e65f:storage/framework/views/d0921355e0f3d8202c0f8ae379f921ea1bd0f363.php
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
<<<<<<< HEAD:storage/framework/views/08558c4f3d217434ebf1fa831400302c2938984c.php
			<form id="tambahCapaianPembelajaran" method="post" action="<?php echo e(url('/Kurikulum/capaian-pembelajaran/create')); ?>" enctype="multipart/form-data"  class="form-horizontal">
=======
			<form id="tambahRincianDana" method="post" action="<?php echo e(url('/pengelolaan-kegiatan/rincian_dana/create')); ?>" enctype="multipart/form-data"  class="form-horizontal">
>>>>>>> 811ff23a5082ee82c748905620869fcc9fb7e65f:storage/framework/views/d0921355e0f3d8202c0f8ae379f921ea1bd0f363.php
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="kode_rincian" class="col-sm-2 control-label">Kode Rincian</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="kode_rincian" name="kode_rincian" placeholder="Masukkan Kode Rincian" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama_barang" class="col-sm-2 control-label">Nama Barang</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_barang" name="nama_barang" placeholder="Masukkan Nama Barang" required>
					</div>
				</div>

			<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="quantity" class="col-sm-2 control-label">Quantity</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="quantity" name="quantity" placeholder=" Masukkan Quantity" required>
						
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

  } );
  </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>