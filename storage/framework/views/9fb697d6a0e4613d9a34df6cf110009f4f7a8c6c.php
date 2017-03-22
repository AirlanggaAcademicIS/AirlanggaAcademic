<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
Admin 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->
Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<!-- Kodingan HTML ditaruh di sini -->

 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Admin</h3>

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
              <table class="table table-hover">
                <tr>
                  <th>Kategori Kegiatan</th>
                  <th>Nama Kegiatan</th>
                  <th>Tanggal Kegiatan</th>
                  <th>Kategori Dana</th>
                  <th>Jumlah Dana</th>
                  <th>Lampiran Poster</th>
                  <th>Lampiran Proposal</th>
                  <th>Status Kegiatan</th>
                  <th>
                </tr>
                <tr>
                  <td>Mahasiswa</td>
                  <td>Pendekar</td>
                  <td>11-7-2014</td>
                  <td>Fakultas</td>
                  <td>15.000.000</td>
                  <td></td>
                  <td></td>
                  <td><span class="label label-success">Disetujui</span></td>
                </tr>
                <tr>
                  <td>Mahasiswa</td>
                  <td>Dekan Cup</td>
                  <td>11-7-2014</td>
                  <td>Fakultas</td>
                  <td>15.000.000</td>
                  <td></td>
                  <td></td>
                  <td><span class="label label-warning">Pending</span></td>
                </tr>
                <tr>
                  <td>Dosen</td>
                  <td>Student Exchange Program</td>
                  <td>11-7-2014</td>
                  <td>Fakultas</td>
                  <td>15.000.000</td>
                  <td></td>
                  <td></td>
                  <td><span class="label label-danger">Ditolak</span></td>
                </tr>
              </table>
            </div>

            <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Status Kegiatan</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Empty</option>
                  <option>Pendekar</option>
                  <option>Dekan Cup</option>
                  <option>Student Exchange Program</option>
                </select>
              </div>

              
                <label>Status Kegiatan</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Empty</option>
                  <option>Disetujui</option>
                  <option>Pending</option>
                  <option>Ditolak</option>
                </select>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
              </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>