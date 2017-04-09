<?php $__env->startSection('htmlheader_title'); ?>
 Edit Dosen Pembimbing
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Edit Dosen Pembimbing
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>

<div class="container">

<div class="row">

<div class="col-md-8">
<?php if(Session::has('status_insert')): ?>

	<?php if(strcmp(session('status_insert'),"1")==0): ?>
	<div class="alert alert-success">
  	Data Berhasil Disimpan
	</div>
	<?php endif; ?>

	<?php if(strcmp(session('status_insert'),"0")==0): ?>
	<div class="alert alert-danger">
  	Data gagal disimpan
	</div>
	<?php endif; ?>

<?php endif; ?>

<div class="panel panel-primary">
      <div class="panel-heading">Edit Dosen Pembimbing</div>
      
      <div class="panel-body">

      
      
      <form action="/monitoring-skripsi/manipulate-dosbing" method="POST">

       <?php echo e(csrf_field()); ?>


       <?php $__currentLoopData = $dosbing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


      <input type="hidden" value="<?php echo e($item->id); ?>" name="id"></input>

       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       

       <div class="form-group">
       
       <label for="judul-skripsi">Judul Skripsi</label>
       
       <select class="form-control" id="judul-skripsi" name="judul_skripsi">
                  
                  <?php $__currentLoopData = $skripsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                        <?php $__currentLoopData = $dosbing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($index+1); ?>"<?php echo e(( $index+1 == $item2->id_skripsi) ? ' selected' : ''); ?>><?php echo e($skripsi[$index]); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


     
     
       </select>
       </div>

       <div class="form-group">
       <label for="nip-dosen">NIP</label>
      	<select class="form-control" id="nip-dosen" name="nip_dosen">


      		<?php $__currentLoopData = $nama_dosbing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        

                  
                        <?php $__currentLoopData = $dosbing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($nip_dosbing[$index]); ?>"<?php echo e(( $nip_dosbing[$index] == $item2->nip) ? ' selected' : ''); ?>><?php echo e($item); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        $indeks++;

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 
      		<!-- <option value="214" selected="selected">Kenny</option>
                 


                  
      		<option value="215" >Robbi</option>
                  
                  
      		<option value="216" >Zafitra</option> -->
                  

      	</select>
       </div>

       <div class="form-group">
       <label for="status-pembimbing">Status</label>
       <select id="status-pembimbing" name="status_pembimbing" class="form-control">
       	
            
             <?php $__currentLoopData = $status_dosbing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                        <?php $__currentLoopData = $dosbing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option value="<?php echo e($index+1); ?>"<?php echo e(( $index+1 == $item2->status) ? ' selected' : ''); ?>><?php echo e($item); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

       	<!-- <option value="1">Dosen Pertama</option>
           

            
       	<option value="2">Dosen Kedua</option> -->
            

       </select>
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