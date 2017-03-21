<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Permohonan Ruangan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Permohonan Ruangan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <!-- tabel jadwal -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Jadwal Kuliah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="jadwal" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Hari</th>
                  <th>Tanggal</th>
                  <th>Ruang</th>
                  <th>Jenis Kegiatan</th>
                  <th>Perihal</th>
                  <th>Jam Awal</th>
                  <th>Jam Akhir</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Senin</td>                 
                    <td>03/05/2017</td>
                    <td>301a</td>
                    <td>Kuliah</td>
                    <td>Kalkulus</td>
                    <td>1</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>Senin</td>                 
                    <td>03/05/2017</td>
                    <td>301b</td>
                    <td>Kuliah</td>
                    <td>Basis Data</td>
                    <td>3</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>Senin</td>                 
                    <td>03/05/2017</td>
                    <td>320</td>
                    <td>PHL</td>
                    <td>Matriks</td>
                    <td>3</td>
                    <td>4</td>
                  </tr>
                </tbody>
                </table>
            </div>
          </div>
          </div>
        
        <!-- form -->
         <div class="col-md-6">  
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Form Permohonan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- text input -->
                <div class="form-group">
                  <label>Jam Mulai</label>
                  <input type="text" class="form-control" id="jam_mulai" placeholder="Jam ke ...">
                </div>
                <div class="form-group">
                  <label>Jam Selesai</label>
                  <input type="text" class="form-control" id="jam_selesai" placeholder="Jam ke ...">
                </div>
                <!-- select -->
                <div class="form-group">
                  <label>Pilih Ruangan</label>
                  <select class="form-control">
                    <option>101</option>
                    <option>102</option>
                    <option>301a</option>
                    <option>301b</option>
                    <option>302</option>
                    <option>319a</option>
                    <option>319b</option>
                    <option>320</option>
                    <option>321</option>
                    <option>322a</option>
                    <option>322b</option>
                    <option>323</option>
                    <option>324</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Jenis Kegiatan</label>
                  <select class="form-control">
                    <option>PHL</option>
                    <option>Seminar</option>
                  </select>
                </div>
                                <!-- textarea -->
                <div class="form-group">
                  <label>Perihal</label>
                  <textarea class="form-control" rows="3" id="perihal" placeholder="Perihal"></textarea>
                </div>
                
                <!-- /.box-body -->

                <div class="box-footer">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Lanjut</button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Notifikasi</h4>
                      </div>
                      <div class="modal-body">
                        <p>Berhasil</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </section>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>