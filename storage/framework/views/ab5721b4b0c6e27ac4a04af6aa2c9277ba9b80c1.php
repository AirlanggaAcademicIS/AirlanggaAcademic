<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
Nama konten 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->
Kartu Rencana Studi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">


                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode MA</th>
                  <th>Nama Mata Kuliah</th>
                  <th>SKS</th>
                  <th>Kelas</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>AGI401
                  </td>
                  <td>Agama Islam 2</td>
                  <td>2</td>
                  <td>ABCDLITS1</td>
                  <td>Disetujui</td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>KNT401</td>
                  <td>Kuliah Kerja Nyata - Belajar Bersama Masyarakat</td>
                  <td>3</td>
                  <td>I</td>
                  <td>Disetujui</td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>MAT303</td>
                  <td>Teori Pengambilan Keputusan</td>
                  <td>3</td>
                  <td>I</td>
                  <td>Disetujui</td>
                </tr>

                <tr>
                  <td>4</td>
                  <td>PNT497</td>
                  <td>Metodologi Penelitian</td>
                  <td>2</td>
                  <td>I</td>
                  <td>Disetujui</td>
                </tr>

                <tr>
                  <td>5</td>
                  <td>SIC302</td>
                  <td>Kecerdasan Buatan</td>
                  <td>3</td>
                  <td>I</td>
                  <td>Disetujui</td>
                </tr>

                <tr>
                  <td>6</td>
                  <td>SII303</td>
                  <td>Pengembangan Sistem Informasi</td>
                  <td>3</td>
                  <td>I</td>
                  <td>Disetujui</td>
                </tr>

                <tr>
                  <td>7</td>
                  <td>SII304</td>
                  <td>Sistem Pendukung Keputusan</td>
                  <td>3</td>
                  <td>I</td>
                  <td>Disetujui</td>
                </tr>

                <tr>
                  <td>8</td>
                  <td>SOK224</td>
                  <td>Komunikasi Interpersonal</td>
                  <td>2</td>
                  <td>I</td>
                  <td>Disetujui</td>
                </tr>


                </tbody>

                
              </table>
              <a href="https://cybercampus.unair.ac.id/modul/mhs/proses/_akademik-kprs_cetak.php" target="_blank" class="btn btn-md btn-primary" style="float: right; margin-top: 10px; margin-right: 5px">Cetak</a>
              <br>
              <p><b>IPK : 2.77</p>
              <p>IPS : 2.74</p>
              <p>Max SKS : 22</p>
              <p>Terambil : 21</p></b>
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