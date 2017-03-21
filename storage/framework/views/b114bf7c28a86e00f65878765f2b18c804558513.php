<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Fitur 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Fitur
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Mahasiswa</h3>

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
                  <th>No</th>
                  <th>Nama</th>
                  <th>NIM</th>
                  <th>Aksi</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Rr. Nadhila Ramadhini A.</td>
                  <td>081411631007</td>
                  <td><div class="btn-group">
                      <a href="<?php echo e(url('monsi/form-dataskripsi')); ?>" ><button type="button" class="btn-xs btn-success" data-toggle="modal" data-target=".bs-example-modal-lg">Upload</button></a>
                      <a href="<?php echo e(url('monsi/form-editskripsi')); ?>" ><button type="button" class="btn-xs btn-primary">Edit</button></a>
                      <a href="<?php echo e(url('monsi/form-viewskripsi')); ?>" ><button type="button" class="btn-xs btn-warning">View</button></a>
                  
                    </div></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Zafitra  Ramadani</td>
                  <td>081411631016</td>
                  <td><div class="btn-group">
                      <a href="<?php echo e(url('monsi/form-dataskripsi')); ?>" ><button type="button" class="btn-xs btn-success">Upload</button></a>
                      <a href="<?php echo e(url('monsi/form-editskripsi')); ?>" ><button type="button" class="btn-xs btn-primary">Edit</button></a>
                      <a href="<?php echo e(url('monsi/form-viewskripsi')); ?>" ><button type="button" class="btn-xs btn-warning">View</button></a>
                    </div></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Shof Rijal Ahlan Robbani</td>
                  <td>081411633038</td>
                  <td><div class="btn-group">
                      <a href="<?php echo e(url('monsi/form-dataskripsi')); ?>" ><button type="button" class="btn-xs btn-success">Upload</button></a>
                      <a href="<?php echo e(url('monsi/form-editskripsi')); ?>" ><button type="button" class="btn-xs btn-primary">Edit</button></a>
                      <a href="<?php echo e(url('monsi/form-viewskripsi')); ?>" ><button type="button" class="btn-xs btn-warning">View</button></a>
                    </div></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Kenny Everest Karnama</td>
                  <td>081411631044</td>
                  <td><div class="btn-group">
                      <a href="<?php echo e(url('monsi/form-dataskripsi')); ?>" ><button type="button" class="btn-xs btn-success">Upload</button></a>
                      <a href="<?php echo e(url('monsi/form-editskripsi')); ?>" ><button type="button" class="btn-xs btn-primary">Edit</button></a>
                      <a href="<?php echo e(url('monsi/form-viewskripsi')); ?>" ><button type="button" class="btn-xs btn-warning">View</button></a>
                    </div></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Dzikri Robbi Usamah</td>
                  <td>081411633004</td>
                  <td><div class="btn-group">
                      <a href="<?php echo e(url('monsi/form-dataskripsi')); ?>" ><button type="button" class="btn-xs btn-success">Upload</button></a>
                      <a href="<?php echo e(url('monsi/form-editskripsi')); ?>" ><button type="button" class="btn-xs btn-primary">Edit</button></a>
                      <a href="<?php echo e(url('monsi/form-viewskripsi')); ?>" ><button type="button" class="btn-xs btn-warning">View</button></a>
                    </div></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Regina Devi Loanita L.</td>
                  <td>081411633005</td>
                  <td><div class="btn-group">
                      <a href="<?php echo e(url('monsi/form-dataskripsi')); ?>" ><button type="button" class="btn-xs btn-success">Upload</button></a>
                      <a href="<?php echo e(url('monsi/form-editskripsi')); ?>" ><button type="button" class="btn-xs btn-primary">Edit</button></a>
                      <a href="<?php echo e(url('monsi/form-viewskripsi')); ?>" ><button type="button" class="btn-xs btn-warning">View</button></a>
                    </div></td>
                </tr>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>