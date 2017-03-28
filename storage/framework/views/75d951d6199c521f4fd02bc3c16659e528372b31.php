<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Fitur 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Histori Nilai
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="input-group margin">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Pilih Semester
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Semester 2014/2015 Ganjil</a></li>
                    <li><a href="#">Semester 2014/2015 Genap</a></li>
                    <li><a href="#">Semester 2015/2016 Ganjil</a></li>
                    <li><a href="#">Semua Semester</a></li>
                  </ul>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Semester</th>
                  <th>Kode MA</th>
                  <th>Nama MA</th>
                  <th>SKS</th>
                  <th>Nilai</th>
                  <th>Bobot</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>2015/2016 Ganjil</td>
                  <td>SIR202</td>
                  <td>Rekayasa Perangkat Lunak</td>
                  <td>3</td>
                  <td>A</td>
                  <td>12</td>
                </tr>
                <tr>
                  <td>2015/2016 Ganjil</td>
                  <td>SID201</td>
                  <td>Basis Data</td>
                  <td>3</td>
                  <td>B</td>
                  <td>9</td>
                </tr>
                <tr>
                  <td>2015/2016 Ganjil</td>
                  <td>SIJ201</td>
                  <td>Sistem Operasi</td>
                  <td>3</td>
                  <td>AB</td>
                  <td>10,5</td>
                </tr>
                <tr>
                  <td>2015/2016 Ganjil</td>
                  <td>SIR201</td>
                  <td>Pemrograman Berorientasi Obyek</td>
                  <td>3</td>
                  <td>AB</td>
                  <td>10,5</td>
                </tr>
                <tr>
                  <td>2015/2016 Ganjil</td>
                  <td>SII201</td>
                  <td>Konsep Sistem Informasi</td>
                  <td>4</td>
                  <td>B</td>
                  <td>12</td>
                </tr>
                </tbody>
              </table>
              <div class="box-body">
                <tr>
                <li>Total SKS     : 16</li>
                </tr>
                </tr>
                <tr>
                <li>Total bobot   : 54</li>
                </tr>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>