<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
Edit Penelitian
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->
Edit Penelitian
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Kodingan HTML ditaruh di sini -->
<!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Penelitian Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Judul Penelitian</label>
                  <textarea type="text" class="form-control" rows="2" placeholder="Judul Penelitian">Pembangkit Listrik Tenaga Dalam</textarea>
                </div>
                <div class="form-group">
                  <label>Jenis Penelitian</label>
                  <select class="form-control">
                    <option>PKM</option>
                    <option>Karya Ilmiah</option>
                    <option>Penelitian Dosen</option>
                    <!-- <option>option 4</option>
                    <option>option 5</option> -->
                  </select>
                </div>
                <div class="form-group">
                  <label>Anggota</label>
                  <textarea type="text" class="form-control" rows="3" placeholder="Anggota Penelitian">1. M. Yusuf Indra
2. Nuzulla Fery Lian
3. Fandi Bram</textarea>
                </div>
                <div class="form-group">
                  <label>Tahun</label>
                  <textarea type="text" class="form-control" rows="1" placeholder="Tahun Penelitian">2016</textarea>
                </div>
                <div class="form-group">
                  <label>Halaman Naskah</label>
                  <textarea type="text" class="form-control" rows="1" placeholder="Jumlah Halaman">35</textarea>
                </div>
                <div class="form-group">
                  <label>Sumber Dana</label>
                  <textarea type="text" class="form-control" rows="1" placeholder="Sumber Dana">DIKTI</textarea>
                </div>
                <div class="form-group">
                  <label>Besar Dana</label>
                  <textarea type="text" class="form-control" rows="1" placeholder="Besar Dana">50,000,000</textarea>
                </div>
                <div class="form-group">
                  <label>SK</label>
                  <textarea type="text" class="form-control" rows="1" placeholder="SK">---</textarea>
                </div>
                <div class="form-group">
                  <label>Publikasi</label>
                  <textarea type="text" class="form-control" rows="1" placeholder="Publikasi">----</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Upload gambar</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">*Ukuran gambar < 1 mb</p>
                </div>
                <!-- <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="<?php echo e(url('/mahasiswa/penelitian/')); ?>"><button type="button" class="btn btn-primary">Save</button></a>
              </div>
            </form>
          </div>
          <!-- /.box -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>