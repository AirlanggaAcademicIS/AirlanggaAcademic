<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
Nama konten 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->
Konfirmasi Ruangan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Kodingan HTML ditaruh di sini -->

<!-- Tabel Peminjaman Ruang -->
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Peminjam</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                	
                	<th>No</th>
                	<th>Hari</th>
                	<th>Tanggal</th>
                	<th>NAMA</th>
                	<th>NIM/NIP</th>
                	<th>Ruang</th>
                  <th>Jenis Kegiatan</th>
                  	<th>Perihal</th>
                  	<th>Jam Awal</th>
                  	<th>Jam Akhir</th>
                  	<th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                	<td>1</td>                	
                	<td>Senin</td>
                	<td>03/05/2017</td>
                  	<td>Prasetyo Adi M</td>
                  	<td>
                    081411633008
                  	</td>
                  	<td>301</td>
                  	<td>PHL</td>
                    <td>Kalkulus</td>
                  	<td> 1 </td>
                  	<td> 2 </td>
                  	<td><button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#myModal1">Accept</button>
                        <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#myModal2">Decline</button>
                    </td>
                </tr>

                <tbody>
                <tr>                	
                	<td>2</td>
                	<td>Rabu</td>
                	<td>10/05/2017</td>
                  	<td>Faisal Rahman H</td>
                  	<td>
                    081411633009
                  	</td>
                  	<td>101</td>
                  	<td>PHL</td>
                    <td>Basis data</td>
                  	<td> 7 </td>
                  	<td> 8 </td>
                  	<td><button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#myModal1">Accept</button>
                        <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#myModal2">Decline</button>
                    </td>
                </tr>

                <tbody>
                <tr>
                  <td>3</td>                  
                  <td>Kamis</td>
                  <td>11/05/2017</td>
                    <td>Choirul Heidi T</td>
                    <td>
                    081411631032
                    </td>
                    <td>301</td>
                    <td>PHL</td>
                    <td>Filsafat Ilmu</td>
                    <td> 9 </td>
                    <td> 10 </td>
                    <td><button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#myModal1">Accept</button>
                        <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#myModal2">Decline</button>
                    </td>
                </tr>

      <!-- modal content -->
          <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal popup accept-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pemberitahuan</h4>
        </div>
        <div class="modal-body">
          <p>Permohonan sudah disetujui</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
</div>
</div>

      <!-- modal content -->
      <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <!-- Modal popup decline-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pemberitahuan</h4>
        </div>
        <div class="modal-body">
          <p>Permohonan ditolak</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
            </table>
        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>