<?php $__env->startSection('code-header'); ?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<link rel="stylesheet" href="<?php echo e(asset('/css/dropzone.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
Laporan Pelaksanaan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->
Laporan Pelaksanaan
<?php $__env->stopSection(); ?>



<?php $__env->startSection('main-content'); ?>
<!-- Kodingan HTML ditaruh di sini -->

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
      <form id="tambahLaporanPelaksanaan" method="post" action="<?php echo e(url('/pengelolaan-kegiatan/laporan_pelaksanaan/create')); ?>" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

 <!-- Main content -->


 <div class="box-body">
      <div class="form-group">
          <label for="nama_kegiatan" class="col-sm-2 control-label">Nama Kegiatan</label>
          <div class="col-md-7">
            <input type="text" class="form-control input-lg" id="nama_kegiatan" name="nama_kegiatan" placeholder="Masukkan Nama Kegiatan" required>
          </div>
        </div>

      <!-- Menampilkan tanggal dengan datepicker -->
        <div class="form-group">
          <label for="tanggal_pelaksanaan" class="col-sm-2 control-label">Tanggal Pelaksanaan</label>
          <div class="col-md-7">
            <input type="text" class="form-control input-lg" id="datepicker" name="tanggal_pelaksanaan" placeholder="Masukkan Tanggal" required>
          </div>
        </div>

       <!-- textarea -->
        <div class="form-group">
          <label for="tempat_pelaksanaan" class="col-sm-2 control-label">Tempat Pelaksanaan</label>
          <div class="col-md-8">
            <textarea id="tempat_pelaksanaan" name="tempat_pelaksanaan" placeholder=" Masukkan Tempat Pelaksanaan" required cols="82" rows="5">
            </textarea>
          </div>
        </div>
        
        <!-- number -->
        <div class="form-group">
          <label for="pelaksanaan_dana" class="col-sm-2 control-label">Dana Pelaksanaan</label>
          <div class="col-md-8">
            <input type="number" id="pelaksanaan_dana" name="pelaksanaan_dana" placeholder=" Masukkan Dana Pelaksanaan Kegiatan"  required>
          </div>
        </div>

       
               
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>


 
                
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
$( function() {
    var date = $('#datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();

  } );
  </script>




<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>