<?php $__env->startSection('htmlheader_title'); ?>
Edit capaian pembelajaran
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Edit capaian pembelajaran
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
      
      <form id="tambahCapaianPembelajaran" method="post" action="<?php echo e(url('/kurikulum/capaian-pembelajaran/'.$cp_pembelajaran->id_cp.'/edit')); ?>" enctype="multipart/form-data"  class="form-horizontal">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="id_prodi" class="col-sm-2 control-label">Id Prodi</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="id_prodi" name="id_prodi" placeholder="Masukkan id_prodi" value="<?php echo e($cp_pembelajaran->id_prodi); ?>" required>
          </div>
        </div>

        <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="id_kategori_cp" class="col-sm-2 control-label">ID Kategori Capaian Pembelajaran</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="id_kategori_cp" name="id_kategori_cp" placeholder="Masukkan kategori capaian pembelajaran" value="<?php echo e($cp_pembelajaran->id_kategori_cp); ?>" required>
          </div>
        </div>

        <!-- Menampilkan textarea -->
        <div class="form-group">
          <label for="kode_cp" class="col-sm-2 control-label">Kode Capaian Pembelajaran</label>
          <div class="col-md-8">
            <textarea id="kode_cp" name="kode_cp" placeholder=" Masukkan Kode Capaian Pembelajaran" required cols="82" rows="5" value="<?php echo e($cp_pembelajaran->kode_cp); ?>" required>
            </textarea>
          </div>
        </div>

                <!-- Menampilkan input text biasa -->
        <div class="form-group">
          <label for="deskripsi_cp" class="col-sm-2 control-label">Deskripsi Capaian Pembelajaran</label>
          <div class="col-md-8">
            <input type="text" class="form-control input-lg" id="deskripsi_cp" name="deskripsi_cp" placeholder="Masukkan kategori capaian pembelajaran" value="<?php echo e($cp_pembelajaran->deskripsi_cp); ?>" required>
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