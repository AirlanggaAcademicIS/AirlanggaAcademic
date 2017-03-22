<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
Input Kegiatan 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->
Input Kegiatan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Kodingan HTML ditaruh di sini -->
<section class="content">

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Step 1</span>
              <span class="info-box-number">Input Rencana Kegiatan</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Step 2</span>
              <span class="info-box-number">Upload Proposal</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Step 3</span>
              <span class="info-box-number">Menunggu Konfirmasi</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Step 4</span>
              <span class="info-box-number">Realisasi Kegiatan</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- =========================================================== -->

      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Input Kegiatan</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Kategori Kegiatan</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Empty</option>
                  <option>Dosen</option>
                  <option>Mahasiswa</option>
                </select>
              </div>

        <div class="form-group">
                  <label>Nama Kegiatan</label>
                  <input type="text" class="form-control" placeholder="Nama Kegiatan">
                </div>

              <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label>Tanggal Kegiatan</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                <!-- /.input group -->
              </div>

             <div class="form-group">
                <label>Kategori Dana</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Empty</option>
                  <option>Mandiri</option>
                  <option>Prodi</option>
                  <option>Fakultas</option>
                </select>
              </div>

              <div class="form-group">
                  <label>Jumlah Dana</label>
                  <input type="text" class="form-control" placeholder="Jumlah Dana">
                </div>

              <div class="form-group">
                  <label for="exampleInputFile">Upload Poster</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block"></p>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Upload Proposal</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block"></p>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Centang Jika Sudah Terisi Semua
                  </label>
                </div>

                 <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
              </div>
              </div>

             






            


             






    

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>