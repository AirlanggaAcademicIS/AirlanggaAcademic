<?php $__env->startSection('htmlheader_title'); ?>
Edit Prestasi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Edit Prestasi
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
			<form id="tambahPrestasi" method="post" action="<?php echo e(url('/mahasiswa/prestasi/'.$prestasi->id.'/edit')); ?>" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="prestasi" class="col-sm-2 control-label">Prestasi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="prestasi" name="prestasi" placeholder="Masukkan Nama Prestasi" value="<?php echo e($prestasi->prestasi); ?>" required>
					</div>
				</div>

				<!-- Menampilkan input text biasa -->
				<div class="form-group">
					<label for="tahun_kegiatan" class="col-sm-2 control-label">Tahun Kegiatan</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="tahun_kegiatan" name="tahun_kegiatan" placeholder="Masukkan Tahun Kegiatan Prestasi" value="<?php echo e($prestasi->tahun_kegiatan); ?>" required>
					</div>
				</div>

				<!-- Menampilkan dropdown -->
				<div class="form-group">
					<label for="kelompok_kegiatan" class="col-sm-2 control-label">Kelompok Kegiatan</label>
					<div class="col-md-8">
						<select name="kelompok_kegiatan" value= "<?php echo e($prestasi->kelompok_kegiatan); ?>" required>
							<?php if(($prestasi->kelompok_kegiatan)=='Kegiatan Wajib Universitas'): ?>
							<option value="Kegiatan Wajib Universitas" selected="selected">Kegiatan Wajib Universitas</option>
							<option value="Kegiatan Bidang Organisasi dan Kepemimpinan">Kegiatan Bidang Organisasi dan Kepemimpinan</option>
							<option value="Kegiatan Bidang Minat dan Bakat">Kegiatan Bidang Minat dan Bakat</option>
							<option value="Kegiatan Bidang Kepedulian Sosial">Kegiatan Bidang Kepedulian Sosial</option>
							<?php elseif(($prestasi->kelompok_kegiatan)=='Kegiatan Bidang Organisasi dan Kepemimpinan'): ?>
							<option value="Kegiatan Wajib Universitas">Kegiatan Wajib Universitas</option>
							<option value="Kegiatan Bidang Organisasi dan Kepemimpinan" selected="selected">Kegiatan Bidang Organisasi dan Kepemimpinan</option>
							<option value="Kegiatan Bidang Minat dan Bakat">Kegiatan Bidang Minat dan Bakat</option>
							<option value="Kegiatan Bidang Kepedulian Sosial">Kegiatan Bidang Kepedulian Sosial</option>
							<?php elseif(($prestasi->kelompok_kegiatan)=='Kegiatan Bidang Minat dan Bakat'): ?>
							<option value="Kegiatan Wajib Universitas">Kegiatan Wajib Universitas</option>
							<option value="Kegiatan Bidang Organisasi dan Kepemimpinan">Kegiatan Bidang Organisasi dan Kepemimpinan</option>
							<option value="Kegiatan Bidang Minat dan Bakat" selected="selected">Kegiatan Bidang Minat dan Bakat</option>
							<option value="Kegiatan Bidang Kepedulian Sosial">Kegiatan Bidang Kepedulian Sosial</option>
							<?php elseif(($prestasi->kelompok_kegiatan)=='Kegiatan Bidang Kepedulian Sosial'): ?>
							<option value="Kegiatan Wajib Universitas">Kegiatan Wajib Universitas</option>
							<option value="Kegiatan Bidang Organisasi dan Kepemimpinan">Kegiatan Bidang Organisasi dan Kepemimpinan</option>
							<option value="Kegiatan Bidang Minat dan Bakat">Kegiatan Bidang Minat dan Bakat</option>
							<option value="Kegiatan Bidang Kepedulian Sosial" selected="selected">Kegiatan Bidang Kepedulian Sosial</option>
							<?php endif; ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="jenis_kegiatan" class="col-sm-2 control-label">Jenis Kegiatan</label>
					<div class="col-md-8">
						<select name="jenis_kegiatan" value= "<?php echo e($prestasi->jenis_kegiatan); ?>" required>
							<?php if(($prestasi->jenis_kegiatan)=='PPKMB'): ?>
							<option value="PPKMB" selected="selected">PPKMB</option>
							<option value="KKN">KKN</option>
							<option value="PKL">PKL</option>
							<option value="Pengurus Organisasi">Pengurus Organisasi</option>
							<option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
							<option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
							<option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
							<option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
							<option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
							<option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
							<option value="Penanganan Bencana">Penanganan Bencana</option>
							<?php elseif(($prestasi->jenis_kegiatan)=='KKN'): ?>
							<option value="PPKMB">PPKMB</option>
							<option value="KKN" selected="selected">KKN</option>
							<option value="PKL">PKL</option>
							<option value="Pengurus Organisasi">Pengurus Organisasi</option>
							<option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
							<option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
							<option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
							<option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
							<option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
							<option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
							<option value="Penanganan Bencana">Penanganan Bencana</option>
							<?php elseif(($prestasi->jenis_kegiatan)=='PKL'): ?>
							<option value="PPKMB">PPKMB</option>
							<option value="KKN">KKN</option>
							<option value="PKL" selected="selected">PKL</option>
							<option value="Pengurus Organisasi">Pengurus Organisasi</option>
							<option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
							<option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
							<option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
							<option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
							<option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
							<option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
							<option value="Penanganan Bencana">Penanganan Bencana</option>
							<?php elseif(($prestasi->jenis_kegiatan)=='Pengurus Organisasi'): ?>
							<option value="PPKMB">PPKMB</option>
							<option value="KKN">KKN</option>
							<option value="PKL">PKL</option>
							<option value="Pengurus Organisasi" selected="selected">Pengurus Organisasi</option>
							<option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
							<option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
							<option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
							<option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
							<option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
							<option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
							<option value="Penanganan Bencana">Penanganan Bencana</option>
							<?php elseif(($prestasi->jenis_kegiatan)=='Panitia Kegiatan Kemahasiswaan'): ?>
							<option value="PPKMB">PPKMB</option>
							<option value="KKN">KKN</option>
							<option value="PKL">PKL</option>
							<option value="Pengurus Organisasi">Pengurus Organisasi</option>
							<option value="Panitia Kegiatan Kemahasiswaan" selected="selected">Panitia Kegiatan Kemahasiswaan</option>
							<option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
							<option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
							<option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
							<option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
							<option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
							<option value="Penanganan Bencana">Penanganan Bencana</option>
							<?php elseif(($prestasi->jenis_kegiatan)=='Latihan Kepemimpinan'): ?>
							<option value="PPKMB">PPKMB</option>
							<option value="KKN">KKN</option>
							<option value="PKL">PKL</option>
							<option value="Pengurus Organisasi">Pengurus Organisasi</option>
							<option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
							<option value="Latihan Kepemimpinan" selected="selected">Latihan Kepemimpinan</option>
							<option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
							<option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
							<option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
							<option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
							<option value="Penanganan Bencana">Penanganan Bencana</option>
							<?php elseif(($prestasi->jenis_kegiatan)=='Berpartisipasi Dalam Pemira'): ?>
							<option value="PPKMB">PPKMB</option>
							<option value="KKN">KKN</option>
							<option value="PKL">PKL</option>
							<option value="Pengurus Organisasi">Pengurus Organisasi</option>
							<option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
							<option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
							<option value="Berpartisipasi Dalam Pemira" selected="selected">Berpartisipasi Dalam Pemira</option>
							<option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
							<option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
							<option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
							<option value="Penanganan Bencana">Penanganan Bencana</option>
							<?php elseif(($prestasi->jenis_kegiatan)=='Mengikuti kegiatan Minat dan Bakat'): ?>
							<option value="PPKMB">PPKMB</option>
							<option value="KKN">KKN</option>
							<option value="PKL">PKL</option>
							<option value="Pengurus Organisasi">Pengurus Organisasi</option>
							<option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
							<option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
							<option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
							<option value="Mengikuti kegiatan Minat dan Bakat" selected="selected">Mengikuti kegiatan Minat dan Bakat</option>
							<option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
							<option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
							<option value="Penanganan Bencana">Penanganan Bencana</option>
							<?php elseif(($prestasi->jenis_kegiatan)=='Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat'): ?>
							<option value="PPKMB">PPKMB</option>
							<option value="KKN">KKN</option>
							<option value="PKL">PKL</option>
							<option value="Pengurus Organisasi">Pengurus Organisasi</option>
							<option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
							<option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
							<option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
							<option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
							<option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat" selected="selected">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
							<option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
							<option value="Penanganan Bencana">Penanganan Bencana</option>
							<?php elseif(($prestasi->jenis_kegiatan)=='Mengikuti Pelaksanaan Bakti Sosial'): ?>
							<option value="PPKMB">PPKMB</option>
							<option value="KKN">KKN</option>
							<option value="PKL">PKL</option>
							<option value="Pengurus Organisasi">Pengurus Organisasi</option>
							<option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
							<option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
							<option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
							<option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
							<option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
							<option value="Mengikuti Pelaksanaan Bakti Sosial" selected="selected">Mengikuti Pelaksanaan Bakti Sosial</option>
							<option value="Penanganan Bencana">Penanganan Bencana</option>
							<?php elseif(($prestasi->jenis_kegiatan)=='Penanganan Bencana'): ?>
							<option value="PPKMB">PPKMB</option>
							<option value="KKN">KKN</option>
							<option value="PKL">PKL</option>
							<option value="Pengurus Organisasi">Pengurus Organisasi</option>
							<option value="Panitia Kegiatan Kemahasiswaan">Panitia Kegiatan Kemahasiswaan</option>
							<option value="Latihan Kepemimpinan">Latihan Kepemimpinan</option>
							<option value="Berpartisipasi Dalam Pemira">Berpartisipasi Dalam Pemira</option>
							<option value="Mengikuti kegiatan Minat dan Bakat">Mengikuti kegiatan Minat dan Bakat</option>
							<option value="Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat">Memperoleh Prestasi Dalam Kegiatan Minat dan Bakat</option>
							<option value="Mengikuti Pelaksanaan Bakti Sosial">Mengikuti Pelaksanaan Bakti Sosial</option>
							<option value="Penanganan Bencana" selected="selected">Penanganan Bencana</option>
							<?php endif; ?>
						</select>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="penyelenggara" class="col-sm-2 control-label">Penyelenggara</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="penyelenggara" name="penyelenggara" placeholder="Masukkan Penyelenggara Kegiatan" value="<?php echo e($prestasi->penyelenggara); ?>" required>
					</div>
				</div>

				<!-- Menampilkan dropdown -->
				<div class="form-group">
					<label for="tingkat" class="col-sm-2 control-label">Tingkat</label>
					<div class="col-md-8">
						<select name="tingkat" value= "<?php echo e($prestasi->tingkat); ?>" required>
							<?php if(($prestasi->tingkat)=='Universitas'): ?>
							<option value="Universitas" selected="selected">Universitas</option>
							<option value="Fakultas">Fakultas</option>
							<option value="Departemen/Prodi">Departemen/Prodi</option>
							<option value="Nasional">Nasional</option>
							<option value="Internasional">Internasional</option>
							<?php elseif(($prestasi->tingkat)=='Fakultas'): ?>
							<option value="Universitas">Universitas</option>
							<option value="Fakultas" selected="selected">Fakultas</option>
							<option value="Departemen/Prodi">Departemen/Prodi</option>
							<option value="Nasional">Nasional</option>
							<option value="Internasional">Internasional</option>
							<?php elseif(($prestasi->tingkat)=='Departemen/Prodi'): ?>
							<option value="Universitas">Universitas</option>
							<option value="Fakultas">Fakultas</option>
							<option value="Departemen/Prodi" selected="selected">Departemen/Prodi</option>
							<option value="Nasional">Nasional</option>
							<option value="Internasional">Internasional</option>
							<?php elseif(($prestasi->tingkat)=='Nasional'): ?>
							<option value="Universitas">Universitas</option>
							<option value="Fakultas">Fakultas</option>
							<option value="Departemen/Prodi">Departemen/Prodi</option>
							<option value="Nasional" selected="selected">Nasional</option>
							<option value="Internasional">Internasional</option>
							<?php elseif(($prestasi->tingkat)=='Internasional'): ?>
							<option value="Universitas">Universitas</option>
							<option value="Fakultas">Fakultas</option>
							<option value="Departemen/Prodi">Departemen/Prodi</option>
							<option value="Nasional">Nasional</option>
							<option value="Internasional" selected="selected">Internasional</option>
							<?php endif; ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="file_prestasi" class="col-sm-2 control-label">File Prestasi</label>
					<div class="col-md-8">
						<input type="text" class="form-control input-lg" id="file_prestasi" name="file_prestasi" placeholder="Masukkan Nama Link Prestasi" value="<?php echo e($prestasi->file_prestasi); ?>" required>
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