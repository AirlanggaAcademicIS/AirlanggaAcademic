<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
Rencana Pembelajaran Semester 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->
Rencana Pembelajaran Semester
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>

<h1>Input Laporan Kegiatan</h1>
<form class="form-horizontal">
    <div class="form-group">
     <label class="control-label col-sm-2">Kode Kegiatan :</label>		
        <input style="width: 200px" type="text" class="form-control" placeholder="Kode Kegiatan">
      	</div>
    <div class="form-group">
    <label class="control-label col-sm-2">Evaluasi Kegiatan :</label>
        <textarea style="width: 500px" type="text" class="form-control" rows="5" placeholder="Evaluasi Kegiatan"></textarea>
      	</div>
</form>

<form class="form-horizontal">
  <div class="form-group">
    <label for="upload">Upload Kuisioner Feedback (xls, xlxs) :</label>        
  </div>     
      <input type="file" id="exampleInputFile">
  <p class="help-block">(Maks. file 25 MB).</p>
  <div class="form-group">

    <label for="upload">Upload Dokumentasi (jpg, jpeg, png) :</label>        
  </div>     
      <input type="file" id="exampleInputFile">
  <p class="help-block">(Maks. file 25 MB).</p>

  <div class="checkbox">
    <label><input type="checkbox"> Apakah file yang diupload sudah benar?</label>
  </div>

 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Submit</button>
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">			
			<div class="modal-content">
				<div class="modal-body">
					<p>Laporan berhasil diinput.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
</form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>