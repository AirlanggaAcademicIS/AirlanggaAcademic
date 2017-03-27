<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
Nama konten 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Notulensi Rapat
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<div class="margin">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-flat">Bulan</button>
                  <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Januari</a></li>
                    <li><a href="#">Februari</a></li>
                    <li><a href="#">Maret</a></li>
                    <li><a href="#">April</a></li>
                    <li><a href="#">Mei</a></li>
                    <li><a href="#">Juni</a></li>
                    <li><a href="#">Juli</a></li>
                    <li><a href="#">Agustus</a></li>
                    <li><a href="#">September</a></li>
                    <li><a href="#">Oktober</a></li>
                    <li><a href="#">November</a></li>
                    <li><a href="#">Desember</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-flat">Tahun</button>
                  <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">2015</a></li>
                    <li><a href="#">2016</a></li>
                    <li><a href="#">2017</a></li>
                  </ul>
                </div>
              </div>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Rapat</th>
        <th>Agenda Rapat</th>
        <th>Waktu</th>
        <th>Tempat</th>
        <th>Status Konfirmasi</th>
        <th> </td>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Kurikulum</td>
        <td>Pembahasan Kurikulum Baru</td>
        <td>Senin 20 Maret 2017 08:00</td>
        <td>102</td>
        <td><span class="label label-success">Pending</span></td>
        <td></a><button type="button" class="btn btn-info btn-xs pull" data-toggle="modal" data-target="#myModal1">Konfirmasi</button>
        <div id="myModal1" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Konfirmasi</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <p>Nama Rapat :</p>
          <p>Agenda Rapat :</p>
          <p>Waktu :</p>
          <p>Tempat :</p>
          <p>Hasil Rapat :</p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Ya</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
        </div>
      </div>
    </div>
  </div>
   </div>
        <td></a><button type="button" class="btn btn-info btn-xs pull" data-toggle="modal" data-target="#myModal">Lihat</button>
        <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Lihat Hasil</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <p>Nama Rapat :</p>
          <p>Agenda Rapat :</p>
          <p>Waktu :</p>
          <p>Tempat :</p>
          <p>Hasil Rapat :</p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Oke</button>
        </div>
      </div>
    </div>
  </div>
   </div>
      </tr>
      <tr>
        <td>2</td>
        <td>Akreditasi</td>
        <td>Pembahasan Akreditasi Prodi</td>
        <td>Jumat 17 Maret 2017 15:00</td>
        <td>323</td>
        <td><span class="label label-success">Approved</span></td>
        <td></a><button type="button" class="btn btn-info btn-xs pull.disabled">Konfirmasi</button>
        <td></a><button type="button" class="btn btn-info btn-xs pull" data-toggle="modal" data-target="#myModal">Lihat</button>
        <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hasil Rapat</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <p>Nama Rapat :</p>
          <p>Agenda Rapat :</p>
          <p>Waktu :</p>
          <p>Tempat :</p>
          <p>Hasil Rapat :</p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Oke</button>
        </div>
      </div>
    </div>
  </div>
   </div>
      </tr>
  </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>