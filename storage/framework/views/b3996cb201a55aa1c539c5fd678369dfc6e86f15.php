<html>
<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
Nama konten
<title></title>
<head></head> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Laporan kinerja dosen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Kodingan HTML ditaruh di sini -->
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header-">
            </div>
<body>
Nama                  :<br>
No. Sertifikat        :<br>
Perguruan Tinggi      :<br>
Status                :<br>
Alamat PT             :<br>
Jurusan               :<br>
Program Studi         :<br>
Jab. Fungsional/Gol.  :<br>
Tempat - Tgl. Lahir   :<br>
S1                    :<br>
S2                    :<br>
S3                    :<br>
Ilmu yang Ditekuni    :<br>
No. HP                :<br><br>
                 <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr class="info">
                  <th>No.</th>
                  <th>Kegiatan</th>
                  <th>Bukti Penugasan</th>
                  <th>Masa Pelaksanaan Tugas</th>
                  <th>Kinerja</th>
                  <th>Penilaian</th>
                </tr>
                </thead>
                <tbody>
                <tr><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td></tr>
                <tr><td>2</td><td>2</td><td>2</td><td>2</td><td>2</td><td>2</td></tr>
                <tr><td>3</td><td>3</td><td>3</td><td>3</td><td>3</td><td>3</td></tr>
                <tr><td>4</td><td>4</td><td>4</td><td>4</td><td>4</td><td>4</td></tr>
</tbody>
</table>
<h4><p align="center">Pernyataan Dosen</p></h4><br>
Saya dosen yang membuat laporan kinerja ini menyatakan bahwa semua aktivitas dan bukti pendukungnya adalah benar aktivitas saya dan saya sanggup menerima sanksi apapun termasuk penghentian tunjangan dan mengembalikan yang sudah saya terima apabila pernyataan ini di kemudian hari terbukti tidak benar<br><br>
<h4><p align="center">Dosen yang Membuat</p><br><br><br><br><br><br>
<p align="center">Pernyataan Asesor</p><br></h4>
<p align="center">Saya sudah memeriksa kebenaran dokumen yang ditunjukkan dan bisa menyetujui laporan</p><br>
 <h4><div class="row">
        <div class="col-sm-6">
          <p align="center">Asesor 1</p>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <p align="center">Asesor 2</p>
        </div>
<br><br><br><br><br><br>
  </div></h4>
</div>
<a href="" class="btn btn-success btn-flat">Cetak</a>
</body>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>