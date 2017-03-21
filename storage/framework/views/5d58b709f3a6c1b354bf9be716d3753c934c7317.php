<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Verifikasi Biodata
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Verifikasi Biodata
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Kodingan HTML ditaruh di sini -->
<!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Biodata Mahasiswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nim</th>
                  <th>Nama Mahasiswa</th>
                  <th>Status Verifikasi</th>
                  <th>View More</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>081411631011</td>
                  <td>Andhini Dita
                  </td>
                  <td>Belum Diverifikasi</td>
                  <td> <button type="button" class="btn btn-default btn-block" default ><a href="<?php echo e(url('/karyawan/ver-bio-more/')); ?>">View More</a></button> </td>
                </tr>
                <tr>
                  <td>081411631002</td>
                  <td>Joko
                  </td>
                  <td>Belum Diverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411631033</td>
                  <td>Atep
                  </td>
                  <td>Belum Diverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411631004</td>
                  <td>Putra
                  </td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411631015</td>
                  <td>Jaka</td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411631006</td>
                  <td>Badu</td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411631007</td>
                  <td>Budi</td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411631008</td>
                  <td>Jono</td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>0814116310010</td>
                  <td>Budiman</td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411631070</td>
                  <td>Sukiyem</td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411631021</td>
                  <td>Sutejo</td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                <tr>
                  <td>081411633001</td>
                  <td>Suko</td>
                  <td>Terverifikasi</td>
                  <td><button type="button" class="btn btn-default btn-block">View More</button></td>
                </tr>
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>