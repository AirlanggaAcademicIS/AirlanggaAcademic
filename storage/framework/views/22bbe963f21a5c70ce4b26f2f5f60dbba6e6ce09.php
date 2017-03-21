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
<body>
<label>Laporan Kinerja Dosen</label>
                 <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>data1</th>
                  <th>data2</th>
                  <th>data3</th>
                  <th>data4</th>
                  <th>data5</th>
                </tr>
                </thead>
                <tbody>
                <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
                <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
                <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
                <tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
                
</body><br>
<a href="" class="btn btn-default btn-flat">Cetak</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>