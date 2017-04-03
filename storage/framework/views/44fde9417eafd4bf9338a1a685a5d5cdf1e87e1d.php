<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Fitur 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Detail Nilai
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">          
            <div class="box-header">
            <h3 class="box-title">Rekayasa Perangkat Lunak</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div>
                  Dengan detail nilai sebagai berikut :
                </div>            
                <div>Nilai project     : 87</div>
                <div>Nilai UTS         : 65</div>
                <div>Nilai UAS         : 60</div>
                <div>Nilai softskill   : 88</div>
                </div>
              <div class="box-body">
                <li>SKS     : 3</li>
                <li>Nilai   : A</li>
              </div>        
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <a class="btn btn-md btn-info" href ="<?php echo e(url('krs-khs/khs')); ?>">Back</a>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>