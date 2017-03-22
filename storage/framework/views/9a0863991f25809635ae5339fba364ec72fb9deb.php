<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
Nama konten 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->
Nama konten
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>NO</th>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Judul</th>
                  <th>Action<th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Dzikri Robbi Usammah</td>
                  <td>081411633004</td>
                  <td>Sistem Pengambil keputusan penjualan Saham</td>
                 
               <td><a href="<?php echo e(url('monsi/download_file')); ?>"><button type="view" class="btn btn-primary">View</button></td>
                
              
				  
                </tr>
                <tr>
                  <td>2</td>
                  <td>Dhanang Wibisono</td>
                  <td>081411631002</td>
                  <td>Sistem Pengambil Keputusan Pemilihan Gitar</td>
                  
                <td><a href="<?php echo e(url('monsi/download_file')); ?>"><button type="view" class="btn btn-primary">View</button><td>
              
                </tr>
                <tr>
                  <td>3</td>
                  <td>Prasetyo Adi Mukti</td>
                  <td>081411633008</td>
                  <td>Sistem Pengambil Keputusan Pemilihan Desain Interior</td>
                  <td><a href="<?php echo e(url('monsi/download_file')); ?>"><button type="view" class="btn btn-primary">View</button></td>

              
                
              </table>
            </div>
            <?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>