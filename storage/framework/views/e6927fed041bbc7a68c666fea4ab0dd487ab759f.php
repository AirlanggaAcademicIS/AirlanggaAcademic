<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
Nama konten 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->
Edit Informasi Skripsi dan Bimbingan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<div class="box box-info">
<form class="form-horizontal">
  <br>
  <div class="box-body">
    <div class="form-group">
      <label for="nama" class="col-sm-2">Nama Mahasiswa:</label>

      <div class="col-sm-10">
        <input type="nama" class="form-control" id="nama" disabled placeholder="Regina Devi Loanita Lapian">
      </div>
    </div>
    <div class="form-group">
      <label for="nim" class="col-sm-2">NIM:</label>

      <div class="col-sm-10">
        <input type="nim" class="form-control" id="nim" disabled placeholder="081411633005">
      </div>
    </div>
    <div class="form-group">
      <label for="kbk" class="col-sm-2">KBK:</label>
      <div class="col-sm-10">
        <select class="form-control">
          <option>Data Mining</option>
          <option>Information System Engineering</option>
          <option>Decision Support System</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="topik" class="col-sm-2">Topik:</label>

      <div class="col-sm-10">
        <input type="topik" class="form-control" id="topik" value="Penelitian Dosen">
      </div>
    </div>
    <div class="form-group">
      <label for="judul" class="col-sm-2">Judul:</label>

      <div class="col-sm-10">
        <input type="judul" class="form-control" id="judul" value="Analisis Sistem Keamanan Jaringan Hot-Spot">
      </div>
    </div>
    <div class="form-group">
      <label for="dospem1" class="col-sm-2">Dosen Pembimbing 1:</label>
      <div class="col-sm-10">
        <select class="form-control">
          <option>Dosen 1</option>
          <option>Dosen 2</option>
          <option>Dosen 3</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="dospem2" class="col-sm-2">Dosen Pembimbing 2:</label>
      <div class="col-sm-10">
        <select class="form-control">
          <option>Dosen 1</option>
          <option>Dosen 2</option>
          <option>Dosen 3</option>
        </select>
      </div>
    </div>

    

  </div>
  <!-- /.box-body -->
  <div class="box-footer">
      <center><a href="<?php echo e(url('monsi/tabel-mhs')); ?>"><button type="button" class="btn btn-default">Kembali</button></a>
      <button type="button" class="btn btn-primary" style="margin-left: 40px;" data-toggle="modal" data-target="#myModal2">Simpan</button>
      <button type="button" class="btn btn-danger" style="margin-left: 40px;" data-toggle="modal" data-target="#myModal">Hapus</button></center>
  </div>
  <!-- /.box-footer -->
 
</form>
</div>


 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center;">Hapus Informasi Skripsi</h4>
        </div>
        <div class="modal-body">
          <h5 style="text-align: center;">Yakin hapus informasi?</h5>
           <center><button type="button" class="btn btn-danger" data-dismiss="modal">Yes</button><button type="button" class="btn btn-primary" style="margin-left: 20px;" data-dismiss="modal">Tidak</button></center>
        </div>
      </div>
      
    </div>
  </div>

<!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Notifikasi</h4>
        </div>
        <div class="modal-body">
          <p>Update Berhasil.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
              </div>
              </div>
              </div>


            


<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>