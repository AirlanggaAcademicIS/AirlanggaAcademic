<?php $__env->startSection('htmlheader_title'); ?>
Tambah Surat Keluar
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Tambah Surat Keluar
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
			<form id="tambahSuratKeluar" method="post" action="<?php echo e(url('/surat_keluar_mhs/create')); ?>" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="nip_petugas" class="col-sm-2 control-label">NIP Petugas</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nip_petugas" name="nip_petugas" placeholder="Masukkan NIP" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama_lembaga" class="col-sm-2 control-label">Nama Lembaga</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_lembaga" name="nama_lembaga" placeholder="Masukkan Nama Lembaga" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nama</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama" name="nama" placeholder="Masukkan Nama" required>
					</div>
				</div>


			<!-- Menampilkan textarea -->
				<div class="form-group">
					<label for="alamat" class="col-sm-2 control-label">Alamat</label>
					<div class="col-md-8">
						<textarea id="alamat" name="alamat" placeholder=" Masukkan Alamat" required cols="82" rows="5">
						</textarea>
					</div>
				</div>

				<!-- Menampilkan dropdown -->
				<!--
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Provinsi</label>
					<div class="col-md-8">
						<select name="provinsi" required>
							<option value="Jawa Timur">Jawa Timur</option>
							<option value="Jawa Tengah">Jawa Tengah</option>
							<option value="Jawa Barat">Jawa Barat</option>
						</select>
					</div>
				</div> -->

				<!-- Menampilkan tanggal dengan datepicker -->
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Tanggal Upload</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="datepicker" name="tgl_upload" placeholder="Masukkan Tanggal Upload" required>
					</div>
				</div>

				<div class="form-group">
					<label for="NIM/NIP" class="col-sm-2 control-label">NIM/NIP</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="NIM/NIP" name="NIM/NIP" placeholder="Masukkan NIM/NIP" required>
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