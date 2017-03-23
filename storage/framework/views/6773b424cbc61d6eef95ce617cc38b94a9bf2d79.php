<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>

Undangan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->
Undangan Rapat
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Kodingan HTML ditaruh di sini -->
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Undangan Rapat</h3>

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
                  <th>Nama Rapat</th>
                  <th>Tanggal</th>
                  <th>Tempat</th>
                  <th>Keterangan</th>
                </tr>
                <tr>
                  <td>001</td>
                  <td>Rapat Pleno</td>
                  <td>11-7-2014</td>
                  <td>Ruang 101</td>
                  <!--<td><span class="label label-success">Approved</span></td>-->
                  <!-- Trigger the modal with a button -->
                  <td><button type="button" class="btn btn-link btn-lg" data-toggle="modal" data-target="#myModal">Detail</button></td>

                </tr>
                <tr>
                  <td>002</td>
                  <td>Rapat Kelulusan</td>
                  <td>11-7-2014</td>
                  <td>Ruang 101</td>
                  <!--<td><span class="label label-warning">Pending</span></td>-->
                  <!-- Trigger the modal with a button -->
                  <td><button type="button" class="btn btn-link btn-lg" data-toggle="modal" data-target="#myModal">Detail</button></td>

                </tr>
                <tr>
                  <td>003</td>
                  <td>Rapat Kemahasiswaan</td>
                  <td>11-7-2014</td>
                  <td>Ruang 101</td>
                  <!--<td><span class="label label-primary">Approved</span></td>-->
                  <!-- Trigger the modal with a button -->
                  <td><button type="button" class="btn btn-link btn-lg" data-toggle="modal" data-target="#myModal">Detail</button></td>

                </tr>
                <tr>
                  <td>004</td>
                  <td>Rapat Senang-senang</td>
                  <td>11-7-2014</td>
                  <td>Ruang 101</td>
                  <!--<td><span class="label label-danger">Denied</span></td>-->
                  <!-- Trigger the modal with a button -->
                  <td><button type="button" class="btn btn-link btn-lg" data-toggle="modal" data-target="#myModal">Detail</button></td>

                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Konfirmasi Undangan Rapat</h4>
      </div>
      <div class="modal-body">
        <p>Nama Rapat : Rapat Kemahasiswaan</p><br>
        <p>Tanggal : 30 Maret 2017</p><br>
        <p>Tempat : Ruang 101</p><br>
        <p>Subject : Agenda rapat untuk membahas kegiatan kemahasiswaan</p><br>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Hadir</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Tidak Hadir</button>
        <div class="btn-group">
          
        </div>
      </div>
    </div>

  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>