<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Buat Akun
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Form Buat Akun Mahasiswa
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <form type="submit" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputNama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" placeholder="Nama" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputNim" class="col-sm-2 control-label">Nim</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNim" placeholder="Nim" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputFakultas" class="col-sm-2 control-label">Fakultas</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputFakultas" placeholder="Fakultas" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputProdi" class="col-sm-2 control-label">Program Studi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputProdi" placeholder="Program Studi" required>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <button onclick="<?php echo e(url('monsi/form-dataskripsi')); ?>" id="buatAkun" type="submit" class="btn btn-primary">Buat Akun</button>
              </div>
            </form>
          </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>