<?php $__env->startSection('htmlheader_title'); ?>
Edit Biodata
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Edit Biodata
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
			<form id="tambahBiodata" method="post" action="<?php echo e(url('/inventaris/'.$peminjaman->id.'/post-edit-peminjaman')); ?>" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">


				<div class="form-group">
					<label for="nim" class="col-sm-2 control-label">ID Asset</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="id_asset" name="id_asset" placeholder="Masukkan ID Asset" value="<?php echo e($peminjaman->id_asset); ?>" required>
					</div>
				</div>

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Peminjam</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nim_nip_peminjam" name="nim_nip_peminjam" placeholder="Masukkan Nama" value="<?php echo e($peminjaman->nim_nip_peminjam); ?>" required>
					</div>
				</div>

				<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Asset yang dipinjam</label>
					<div class="col-md-8">
						<textarea id="asset_yang_dipinjam" name="asset_yang_dipinjam" placeholder=" Masukkan Alamat" required cols="82" rows="5"><?php echo e($peminjaman->asset_yang_dipinjam); ?>

						</textarea>
					</div>
				</div>


				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Checkin Date</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="checkin_date" placeholder="Masukkan Tanggal" required>
					</div>
				</div>

				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Checkout Date</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="checkout_date" placeholder="Masukkan Tanggal" required>
					</div>
				</div>


				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Expected Checkin Date</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="expected_checkin_date" placeholder="Masukkan Tanggal" required>
					</div>
				</div>

				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Waktu Pinjam</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="waktu_pinjam" placeholder="Masukkan Tanggal" required>
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>