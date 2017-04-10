<?php $__env->startSection('htmlheader_title'); ?>
Tambah Biodata Mahasiswa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Tambah Biodata Mahasiswa
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
			<form id="tambahBiodataMahasiswa" method="post" action="<?php echo e(url('/mahasiswa/biodata-mahasiswa/create')); ?>" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

				<!-- Menampilkan input text biasa -->

				<div class="form-group">
					<label for="nim" class="col-sm-2 control-label">NIM</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nim" name="nim" placeholder="Masukkan NIM" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama_mhs" class="col-sm-2 control-label">Nama Mahasiswa</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_mhs" name="nama_mhs" placeholder="Masukkan Nama" required>
					</div>
				</div>

				<div class="form-group">
					<label for="email_mhs" class="col-sm-2 control-label">Email</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="email_mhs" name="email_mhs" placeholder="Masukkan Email" required>
					</div>
				</div>

				<div class="form-group">
					<label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
					<div class="col-md-8">
						<select name="jenis_kelamin" required>
							<option value="Laki-Laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="negara_asal" class="col-sm-2 control-label">Negara Asal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="negara_asal" name="negara_asal" placeholder="Masukkan Negara Asal" required>
					</div>
				</div>

				<div class="form-group">
					<label for="provinsi_asal" class="col-sm-2 control-label">Provinsi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="provinsi_asal" name="provinsi_asal" placeholder="Masukkan Provinsi" required>
					</div>
				</div>

				<div class="form-group">
					<label for="kota_asal" class="col-sm-2 control-label">Kota Asal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="kota_asal" name="kota_asal" placeholder="Masukkan Kota Asala" required>
					</div>
				</div>

				<div class="form-group">
					<label for="kota_tinggal" class="col-sm-2 control-label">Kota Tinggal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="kota_tinggal" name="kota_tinggal" placeholder="Masukkan Kota Tinggal" required>
					</div>
				</div>

				<div class="form-group">
					<label for="alamat_tinggal" class="col-sm-2 control-label">Alamat Tinggal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="alamat_tinggal" name="alamat_tinggal" placeholder="Masukkan Alamat Tinggal" required>
					</div>
				</div>

				<div class="form-group">
					<label for="ttl" class="col-sm-2 control-label">TTL</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="ttl" name="ttl" placeholder="Masukkan TTL" required>
					</div>
				</div>

				<div class="form-group">
					<label for="angkatan" class="col-sm-2 control-label">Angkatan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="angkatan" name="angkatan" placeholder="Masukkan Angkatan" required>
					</div>
				</div>

				<div class="form-group">
					<label for="agama" class="col-sm-2 control-label">Agama</label>
					<div class="col-md-8">
						<select name="agama" required>
							<option value="Islam">Islam</option>
							<option value="Kristen">Kristen</option>
							<option value="Katholik">Katholik</option>
							<option value="Hindu">Hindu</option>
							<option value="Budha">Budha</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="kebangsaan" class="col-sm-2 control-label">Kebangsaan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="kebangsaan" name="kebangsaan" placeholder="Masukkan Kebangsaan" required>
					</div>
				</div>

				<div class="form-group">
					<label for="sma_asal" class="col-sm-2 control-label">SMA Asal</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="sma_asal" name="sma_asal" placeholder="Masukkan SMA Asal" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama_ayah" class="col-sm-2 control-label">Nama Ayah</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama Ayah" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nama_ibu" class="col-sm-2 control-label">Nama Ibu</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu" required>
					</div>
				</div>

				<div class="form-group">
					<label for="deskripsi_diri" class="col-sm-2 control-label">Deskripsi Diri</label>
					<div class="col-md-8">
						<textarea id="deskripsi_diri" name="deskripsi_diri" placeholder=" Masukkan Deskripsi Diri" required cols="82" rows="5">
						</textarea>
					</div>
				</div>

				<div class="form-group">
					<label for="motto" class="col-sm-2 control-label">Motto</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="motto" name="motto" placeholder="Masukkan Motto" required>
					</div>
				</div>

				<div class="form-group">
					<label for="foto_mhs" class="col-sm-2 control-label">Link Foto Mahassiwa</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="foto_mhs" name="foto_mhs" placeholder="Masukkan Link Foto" required>
					</div>
				</div>

				<div class="form-group">
					<label for="kartu_identitas" class="col-sm-2 control-label">Link Kartu Identitas</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="kartu_identitas" name="kartu_identitas" placeholder="Masukkan Link Kartu Identitas" required>
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