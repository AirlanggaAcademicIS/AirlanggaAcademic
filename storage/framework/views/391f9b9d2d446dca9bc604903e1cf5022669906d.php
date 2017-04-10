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
      <div class="panel-heading">Tambah Dosen Penguji</div>
      
      <div class="panel-body">
      
      <form action="/monitoring-skripsi/tambah-dosen-penguji" method="POST">

       <?php echo e(csrf_field()); ?>


       <div class="form-group">
       
       <label for="judul-skripsi">Judul Skripsi</label>
       <input type="number" class="form-control" id="judul-skripsi" name="judul_skripsi">
       <!-- input field disini -->
       
       </div>

       <div class="form-group">
       <label for="nip-dosen">NIP</label>
       <input type="text" class="form-control" id="nip-dosen" name="nip_dosen">
      	<!-- input field disini -->
       </div>

       <div class="form-group">
       <label for="status-penguji">Status</label>
       <input type="number" class="form-control" id="status-penguji" name="status_penguji" >
        
        <!-- input field disini -->
       </div>

       <button type="submit" class="btn btn-success">Tambah</button>
      	
      </form>	
      
      </div>
    
    </div>

   

    <div class="panel panel-info">
      <div class="panel-heading">List Dosen Penguji</div>
      <div class="panel-body">

      <table class="table table-hover">
      	<thead>
      		<tr>
      			<th>NIP</th>
      			<th>Kode Skripsi</th>
      			<th>Status Dosen Pembimbing</th>
      		</tr>

      		<tbody>
          
           <?php $__currentLoopData = $dosen_penguji; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div><?php echo e($item->nip); ?></div>
                                </td>

                                <td class="table-text">
                                <div><?php echo e($item->id_skripsi); ?></div>
                                    <!-- TODO: Delete Button -->
                                </td>

                                <td class="table-text">
                                  <div><?php echo e($item->status); ?></div>
                                </td>

                                <td>
                       
                              
                <form action="/monitoring-skripsi/hapus-dosen-penguji/<?php echo e($item->id); ?>" >

                <?php echo e(csrf_field()); ?>

                  

                  <button class="btn btn-danger">Delete</button>
                  
                </form>
                      </td>


                        <td>
                <form action="/monitoring-skripsi/edit-dosen-penguji/<?php echo e($item->id); ?>" >

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


</div>

</div>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>