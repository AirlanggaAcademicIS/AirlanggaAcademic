<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
Penelitian Dosen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->
Penelitian Dosen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Kodingan HTML ditaruh di sini -->
 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             
            <a href="<?php echo e(url('dosen/penelitian/create')); ?>"><button type="button" class="btn btn-primary">Tambah Penelitian</button></a>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-bordered">
                <tr class="info">
                  <th>Judul Penelitian</th>
                  <th>Ketua</th>
                  <th>Bidang</th>
                  <th>Tanggal</th>
                  <th>File</th>
                  <th>Status</th>                  
                  <th> </th>
                 
                </tr>
                <tr>
                  <td>Algoritma chusmana arie dalam penerapan sistem pengembil keputusan pembelian rumah hunian</td>
                  <td>Arie edogawa</td>
                  <td>Sistem Informasi</td>
                  <td>11-03-2016</td>
                  <td> </td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><a href="<?php echo e(url('dosen/penelitian/edit')); ?>"><button type="button" class="btn btn-info btn-xs pull">Edit</button></a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>
                <tr>
                  <td>list penelitian dosen berdasarkan subjek pengindekksan subjek adalah : Analisis Kesesuaian Subjek Dokumen Yang Menyitir Dengan Dokumen Yang Disitir Dalam Tesis Magister (S2)Teknologi Pendidikan Sekolah Pasca Sarjana Universitas Negeri Medan</td>
                  <td>Fendy Rahayu</td>
                  <td>Pengindeksan Subjek</td>
                  <td>11-03-2016</td>
                  <td> </td>
                  <td><span class="label label-warning">Process</span></td>
                  <td><a href="<?php echo e(url('dosen/penelitian/edit')); ?>"><button type="button" class="btn btn-info btn-xs pull">Edit</button></a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>
                <tr>
                  <td>Analisis Pengelolaan Arsip Media Audiovisual Bidang Produksi Acara Pada Lembaga Penyiaran Publiks</td>
                  <td>Lanang Alun Nugraha</td>
                  <td>Sistem Informasi</td>
                  <td>11-03-2016</td>
                  <td> </td>
                  <td><span class="label label-success">Approved</span></td>
                  <td><a href="<?php echo e(url('dosen/penelitian/edit')); ?>"><button type="button" class="btn btn-info btn-xs pull">Edit</button></a>
                  <button type="button" class="btn btn-danger btn-xs">Delete</button></td>
                </tr>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>