<?php $__env->startSection('htmlheader_title'); ?>
  Dosen Penguji
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Dosen Penguji
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>

<div class="container">

<div class="row">

<div class="col-md-8">


<div class="panel panel-success">
      <div class="panel-heading">Edit Dosen Penguji</div>
      
      <div class="panel-body">
      
      <form action="/monitoring-skripsi/manipulate-dosen-penguji" method="POST">

       <?php echo e(csrf_field()); ?>


       <div class="form-group">

       <input type="hidden" value="<?php echo e($dosen_penguji->id); ?>" name="id"></input>
       
       <label for="judul-skripsi">Judul Skripsi</label>
       <input type="number" class="form-control" id="judul-skripsi" name="judul_skripsi" value="<?php echo e($dosen_penguji->id_skripsi); ?>">
       <!-- input field disini -->
       
       </div>

       <div class="form-group">
       <label for="nip-dosen">NIP</label>
       <input type="text" class="form-control" id="nip-dosen" name="nip_dosen" value="<?php echo e($dosen_penguji->nip); ?>">

       
      	<!-- input field disini -->
       </div>

       <div class="form-group">
       <label for="status-penguji">Status</label>
       <input type="number" class="form-control" id="status-penguji" name="status_penguji" value="<?php echo e($dosen_penguji->status); ?>">
        
        <!-- input field disini -->
       </div>

       <button type="submit" class="btn btn-primary">Edit</button>
      	
      </form>	
      
      </div>
    
    </div>

   




</div>

</div>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>