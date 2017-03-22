<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Fitur 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Konfirmasi Proposal
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<div class="box">
            <div class="col-md-3">
<h4>Cari <i class="fa fa-search"></i></h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
</div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama          <span class="glyphicon glyphicon-chevron-down"></span></th> 
                  <th>Nim         <span class="glyphicon glyphicon-chevron-down"></span></th>
                  <th>Judul         <span class="glyphicon glyphicon-chevron-down"></span></th>
                  <th>Tanggal mengumpulkan          <span class="glyphicon glyphicon-chevron-down"></span></th>
                  <th>Status          <span class="glyphicon glyphicon-chevron-down"></span></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Faisal Rahman</td>
                  <td>081411633009
                  </td>
                  <td>SPK</td>
                  <td>28-06-2017</td>
                  <td><span class="label label-primary">Sudah mengumpulkan</span></td>
                </tr>
               <tr>
                  <td>Pandu Patra</td>
                  <td>081411631122
                  </td>
                  <td>SPK</td>
                  <td>20-01-2016</td>
                  <td><span class="label label-primary">Sudah mengumpulkan</span></td>
                </tr>
               <tr>
                  <td>Lanang Alun</td>
                  <td>081411631021
                  </td>
                  <td>RSI</td>
                  <td>13-05-2016</td>
                  <td><span class="label label-primary">Sudah mengumpulkan</span></td>
                </tr>
                 <tr>
                  <td>Rizaldi Firdaus</td>
                  <td>081411631123
                  </td>
                  <td>SPK</td>
                  <td></td>
                  <td><span class="label label-danger">Belum mengumpulkan</span></td>
                </tr>
                <tr>
                  <td>Putra Arga</td>
                  <td>081411631124
                  </td>
                  <td>Data Mining</td>
                  <td></td>
                  <td><span class="label label-danger">Belum mengumpulkan</span></td>
                </tr>
                <tr>
                  <td>Ramadhan Akira</td>
                  <td>081411631125
                  </td>
                  <td>Data Mining</td>
                  <td>24-05-2017</td>
                  <td><span class="label label-primary">Sudah mengumpulkan</span></td>
                </tr>
                <tr>
                  <td>Windra Rasyad</td>
                  <td>081411631126
                  </td>
                  <td>RSI</td>
                  <td></td>
                  <td><span class="label label-danger">Belum mengumpulkan</span></td>
                </tr>
                <tr>
                  <td>Choirul Heidi</td>
                  <td>081411631127
                  </td>
                  <td>Data Mining</td>
                  <td></td>
                  <td><span class="label label-danger">Belum mengumpulkan</span></td>
                </tr>
                <tr>
                  <td>Prasetyo Adi</td>
                  <td>081411631128
                  </td>
                  <td>RSI</td>
                  <td>14-01-2017</td>
                  <td><span class="label label-primary">Sudah mengumpulkan</span></td>
                </tr>
                <tr>
                  <td>Garincha Didi</td>
                  <td>081411631129
                  </td>
                  <td>SPK</td>
                  <td>18-07-2017</td>
                  <td><span class="label label-primary">Sudah mengumpulkan</span></td>
                </tr>
            </tfoot>
              </table>
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