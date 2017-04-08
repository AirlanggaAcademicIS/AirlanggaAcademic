<?php $__env->startSection('htmlheader_title'); ?>
  <?php echo e(trans('adminlte_lang::message.home')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
              <br>
              <br>
              <a href="<?php echo e(url('inventaris/input-peminjaman')); ?>" class="btn btn-primary btn-l">
              <i class="fa fa-plus"></i> add entry</a>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="myTable1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="text-align:center">No.</th>
                  <th style="text-align:center">ID PEMINJAMAN</th>
                  <th style="text-align:center">NOMOR INDUK PEMINJAM</th>
                  <th style="text-align:center">ASET YANG DIPINJAM</th>
                  <th style="text-align:center">CHECK IN DATE</th>
                  <th style="text-align:center">CHECK OUT DATE</th>
                  <th style="text-align:center">EXPECTED CHECK IN DATE</th>
                  <th style="text-align:center">WAKTU PINJAM</th>
                  <th style="text-align:center">ACTION</th>
                </tr>
                </thead>
                <tbody>
                <?php $number = 1; ?>
                <?php $__empty_1 = true; $__currentLoopData = $peminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                  <td style="text-align:center"><?php echo e($number); ?></td>
                  <td style="text-align:center"><?php echo e($p->id); ?></td>
                  <td style="text-align:center"><?php echo e($p->nim_nip_peminjam); ?></td>
                  <td style="text-align:center"><?php echo e($p->asset_yang_dipinjam); ?></td>
                  <td style="text-align:center"><?php echo App\Helpers\GeneralHelper::indonesianDateFormat($p->checkin_date); ?></td>
                  <td style="text-align:center"><?php echo App\Helpers\GeneralHelper::indonesianDateFormat($p->checkout_date); ?></td>
                  <td style="text-align:center"><?php echo App\Helpers\GeneralHelper::indonesianDateFormat($p->expected_checkin_date); ?></td>
                  <td style="text-align:center"><?php echo e(date("h:i", strtotime($p->waktu_pinjam))); ?></td>
                  <td style="text-align:center">
                    <a href="<?php echo e(url( 'inventaris/'.$p->id.'/view-peminjaman')); ?>" class="btn btn-primary btn-s">
                      <i class="fa fa-eye"></i> View Detail</a>
                    <a href="<?php echo e(url( 'inventaris/'.$p->id.'/edit-peminjaman')); ?>" class="btn btn-warning btn-s">
                      <i class="fa fa-pencil-square-o"></i> Edit</a>
                    <a href="<?php echo e(url( 'inventaris/'.$p->id.'/delete')); ?>" class="btn btn-danger btn-s">
                      <i class="fa fa-pencil-square-o"></i> Delete</a>  
                  </td>
                </tr>
                <?php $number++ ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                   <tr>
                     <td colspan="8"><center>Belum ada barang</center></td>
                   </tr>
                <?php endif; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th style="text-align:center">No.</th>
                  <th style="text-align:center">ID PEMINJAMAN</th>
                  <th style="text-align:center">NAMA PEMINJAM</th>
                  <th style="text-align:center">ASET YANG DIPINJAM</th>
                  <th style="text-align:center">CHECK IN DATE</th>
                  <th style="text-align:center">CHECK OUT DATE</th>
                  <th style="text-align:center">EXPECTED CHECK IN DATE</th>
                  <th style="text-align:center">WAKTU PINJAM</th>
                  <th style="text-align:center">ACTION</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#myTable1').DataTable();
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>