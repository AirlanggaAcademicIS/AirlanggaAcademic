<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Fitur 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Fitur
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail KRS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Kode MA</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Nama Mata Ajar</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">SKS</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Kelas</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Status</th></tr>
                </thead>
                <tbody>
                <tr role="row" class="odd">
                  <td class="sorting_1">1</td>
                  <td>AG001</td>
                  <td>Agama</td>
                  <td>2</td>
                  <td>322</td>
                  <td><a href="/approve1"><button type="button" class="btn btn-md btn-primary">Approve</button></a></td>
                </tr><tr role="row" class="even">
                  <td class="sorting_1">2</td>
                  <td>PS001</td>
                  <td>PSI</td>
                  <td>3</td>
                  <td>319B</td>
                  <td><button type="button" class="btn btn-md btn-primary">Approve</button></td>
                 </tr><tr role="row" class="even">
                  <td class="sorting_1">3</td>
                  <td>KB001</td>
                  <td>KCB</td>
                  <td>3</td>
                  <td>323</td>
                  <td><button type="button" class="btn btn-md btn-primary">Approve</button></td>
                </tbody>
                <tfoot>
                <tr>
                </tr>
                </tfoot>
                
              </table></div></div><div class="row"><div class="col-sm-5"></div></div></div>
            </div>

            <div align="center">
            <button type="button" class="btn btn-block-md-4 btn-success">Save</button>
            </div>
            <!-- /.box-body -->
          </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>