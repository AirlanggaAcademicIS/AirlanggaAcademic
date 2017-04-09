<?php $__env->startSection('htmlheader_title'); ?>
  Dosen Pembimbing
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Dosen Pembimbing
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

<?php if(Session::has('status_edit')): ?>

	<?php if(strcmp(session('status_edit'),"1")==0): ?>
	<div class="alert alert-success">
  	Data Berhasil Diedit
	</div>
	<?php endif; ?>

	<?php if(strcmp(session('status_insert'),"0")==0): ?>
	<div class="alert alert-danger">
  	Data gagal diedit
	</div>
	<?php endif; ?>

<?php endif; ?>

<?php if(Session::has('status_delete')): ?>

	<?php if(strcmp(session('status_delete'),"1")==0): ?>
	<div class="alert alert-success">
  	Data Berhasil Dihapus
	</div>
	<?php endif; ?>

	<?php if(strcmp(session('status_delete'),"0")==0): ?>
	<div class="alert alert-danger">
  	Data gagal dihapus
	</div>
	<?php endif; ?>

<?php endif; ?>

<div class="panel panel-success">
      <div class="panel-heading">Tambah Dosen Pembimbing</div>
      
      <div class="panel-body">
      
      <form action="/monsi/tambah-dosbing" method="POST">

       <?php echo e(csrf_field()); ?>


       <div class="form-group">
       
       <label for="judul-skripsi">Judul Skripsi</label>
       
       <select class="form-control" id="judul-skripsi" name="judul_skripsi">
       	
       <option value="1">Handwriting Recognition</option>
       <option value="2">Particle Swarm Optimization</option>
       <option value="3">Voice Recognition</option>
       </select>
       </div>

       <div class="form-group">
       <label for="nip-dosen">NIP</label>
      	<select class="form-control" id="nip-dosen" name="nip_dosen">
      		
      		<option value="214">Kenny</option>
      		<option value="215">Robbi</option>
      		<option value="216">Zafitra</option>

      	</select>
       </div>

       <div class="form-group">
       <label for="status-pembimbing">Status</label>
       <select id="status-pembimbing" name="status_pembimbing" class="form-control">
       	
       	<option value="1">Dosen Pertama</option>
       	<option value="2">Dosen Kedua</option>

       </select>
       </div>

       <button type="submit" class="btn btn-success">Tambah</button>
      	
      </form>	
      
      </div>
    
    </div>

    <?php if(count($list) >0): ?>

    <div class="panel panel-info">
      <div class="panel-heading">List Dosen Pembimbing</div>
      <div class="panel-body">

      <table class="table table-hover">
      	<thead>
      		<tr>
      			<th>NIP</th>
      			<th>Kode Skripsi</th>
      			<th>Status Dosen Pembimbing</th>
      		</tr>

      		<tbody>
      			 <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      			 <tr>
      			 	<td class="table-text">
      			 		<div><?php echo e($item->nip); ?></div>
      			 	</td>

      			 	<td  class="table-text">
      			 		<div>
      			 			<?php echo e($item->id_skripsi); ?>

      			 		</div>
      			 	</td>

      			 	<td class="table-text">
      			 		<div>
      			 			<?php echo e($item->status); ?>

      			 		</div>
      			 	</td>

      			 	<td>

      			 		<form action="/monsi/hapus-dosbing/<?php echo e($item->id); ?>" >

      			 		<?php echo e(csrf_field()); ?>

            			

            			<button class="btn btn-danger">Delete</button>
      			 			
      			 		</form>
      			 		
      			 	</td>

      			 	<td>
      			 		<form action="/monsi/edit-dosbing/<?php echo e($item->id); ?>" >

      			 		<?php echo e(csrf_field()); ?>

            			

            			<button class="btn btn-primary">Edit</button>
      			 			
      			 		</form>
      			 	</td>
      			 </tr>

      			 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      		</tbody>
      	</thead>
      </table>

      </div>
    </div>

    <?php endif; ?>

</div>

</div>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>