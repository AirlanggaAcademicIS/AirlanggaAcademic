<html>
<?php $__env->startSection('code-header'); ?>
<<<<<<< HEAD
<<<<<<< HEAD
<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<title></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
PUBLIKASI KEGIATAN
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
<body>
<form action="/action_page.php">
  Nama Kegiatan:<br>
  <input type="text" name="namakegiatan" value="Xplonation">
  <br>
  Deskripsi Kegiatan:<br>
  <textarea rows="4" cols="50" name="comment" form="usrform">
  Enter text here...</textarea>
  <br>
  Tempat Kegiatan:<br>
  <input type="text" name="tempatkegiatan" value="FST, Kampus C Unair">
  <br>
  Tanggal Pelaksanaan:<br>
  <input type="text" name="tanggalpelaksanaan" value="07/11/2017">
  <br><br>
  <input type="file" id="myFile">
=======
=======
>>>>>>> f6fccf35c9921d3e2b03b57a0426d305eee32806


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<title>Input TU</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Input Dokumentasi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<body>
<form>
Nomor Kegiatan
<br>
<input type="text" name="JudulK" value=""/>
<br>
Tempat Kegiatan
<br>
<input type="text" name="TempatK" value=""/>
<br>
Tanggal Pelaksanaan
<br>
<input type="date" name="TanggalT" value=""/>
<br>
<br>
<input type="file" id="myFile">
<<<<<<< HEAD
>>>>>>> 0f93479142897a3a0cb98d1c570f7454caeaebd8
=======
>>>>>>> f6fccf35c9921d3e2b03b57a0426d305eee32806
(max size 200MB)
<script>
function myFunction() {
    var x = document.getElementById("myFile");
    x.disabled = true;
}
</script>
<br><br>
<<<<<<< HEAD
<<<<<<< HEAD
  <button type="button"><a href="<?php echo e(url('/kegiatan/publikasi')); ?>">Submit</a></button>
</form> 

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>
=======
=======
>>>>>>> f6fccf35c9921d3e2b03b57a0426d305eee32806
Deskripsi Kegiatan
<br>
<textarea rows="4" cols="50" name="comment" form="usrform">Enter text here...</textarea>
<br>
<button type="submit" onclick="clicked(event)" /><a href="<?php echo e(url('/kegiatan/dokumentasi')); ?>">Submit</a></button>
<script>
function clicked(e)
{
    if(!confirm('Dokumentasi akan ditampilkan.'))e.preventDefault();
}
</script>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>



<<<<<<< HEAD
>>>>>>> 0f93479142897a3a0cb98d1c570f7454caeaebd8
=======
>>>>>>> f6fccf35c9921d3e2b03b57a0426d305eee32806
</body>
<?php $__env->stopSection(); ?>
</html>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>