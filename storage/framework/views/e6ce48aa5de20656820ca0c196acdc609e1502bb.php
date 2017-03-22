<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
Nama konten 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->
Histori Bimbingan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<form>


            
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box box-info">

            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>

            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">

                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Mahasiswa</label>


                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Rr. Nadhila Ramadhini A" disabled="">
                  </div>
                </div>
<br><br>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">NIM</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="081411631007" disabled="">
                  </div>
                </div>
<br><br>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Judul</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Analisa Kepuasan Pengguna Mobile-Apps blablabla Menggunakan Metode blablabla" disabled="">
                  </div>
                </div>
              </div>
              </div>
            </form>
            <br>
          


<div class="box">
            
              <div class="box-tools">
              </div>
            
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>No.</th>
                  <th>Tanggal</th> 
                  <th>Agenda Bimbingan</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>11-7-2014</td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>13-7-2014</td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>3</td> 
                  <td>14-7-2014</td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>20-7-2014</td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>


</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>