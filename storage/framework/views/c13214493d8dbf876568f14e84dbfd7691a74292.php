<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Verifikasi Prestasi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Verifikasi Prestasi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Kodingan HTML ditaruh di sini -->
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Form Pengisian Prestasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Kegiatan</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Juara 1 Pidato Bahasa Arab" disabled="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tahun Kegiatan</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="2016" disabled="">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Jenis Kegiatan</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Lomba" disabled="">
                </div>
                 <div class="form-group">
                <label>Kelompok Kegiatan</label>
                <select class="form-control select2" style="width: 100%;" disabled="">
                  <option selected="selected">Kegiatan Wajib</option>
                  <option>blaablaaablaa 2</option>
                  <option>blaablaaablaa 3</option>
                  <option>blaablaaablaa 4</option>
                  <option>blaablaaablaa 5</option>
                  <option>blaablaaablaa 6</option>
                  <option>blaablaaablaa 7</option>
                </select>
              </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Penyelenggara</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Universitas Indonesia" disabled="">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Tingkat</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nasional" disabled="">
                </div>
 
                <div class="form-group">
                  <label for="exampleInputFile">File</label>
                  <p> Sertifikat.jpg</p>
                </div>
                <div class="form-group">
                <label>Status Verifikasi</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">-----</option>
                  <option>Diterima</option>
                  <option>Tidak Diterima</option>
                </select>
              </div>
              <div class="form-group">
                  <label>Alasan</label>
                  <textarea type="text" class="form-control" rows="1" placeholder="Alasan"></textarea>
                </div>
              </div>
              <!-- /.box-body -->
		<div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="button" class="btn btn-default" default ><a href="<?php echo e(url('/karyawan/ver-pres/')); ?>">Save</a></button> 
              </div>
            </div>
      </div>
      <!-- /.row -->
    </div></section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>