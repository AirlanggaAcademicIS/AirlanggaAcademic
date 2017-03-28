<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Fitur 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
KHS
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<section class="content-header">
      <div class="input-group margin">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Pilih Semester
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Semester 2014/2015 Ganjil</a></li>
                    <li><a href="#">Semester 2014/2015 Genap</a></li>
                    <li><a href="#">Semester 2015/2016 Ganjil</a></li>
                  </ul>
                </div>
                </div>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
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
                  <td><a href="<?php echo e(url('krs-khs/detail_nilai_RPL')); ?>">A</td>
                  <td>12</td>
                </tr>
                <tr>
                  <td>2015/2016 Ganjil</td>
                  <td>SID201</td>
                  <td>Basis Data</td>
                  <td>3</td>
                  <td><a href="<?php echo e(url('krs-khs/detail_nilai_BD')); ?>">B</td>
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
                <tr>
                <li>IPS           : 3,37</li>
                </tr>
                <tr>
                <li>IPK           : 3,4</li>
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
    <!-- Content Header (Page footer) -->
    <section class="content-footer">
      <div class="col-xs-12">
        <button type="button" class="btn btn-info btn-flat">Cetak</button>
        </div>
    </section>
    <!-- /.content -->
  </div>
<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>