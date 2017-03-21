<?php $__env->startSection('htmlheader_title'); ?>
  <?php echo e(trans('adminlte_lang::message.home')); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>

      <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Aset Prodi Sistem Informasi</h3>
              <br>
              <br>
              <a href="<?php echo e(url('add-asset')); ?>" class="btn btn-primary btn-l">
              <i class="fa fa-plus"></i> add entry</a>
            </div>
            <!--  -->
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="myTable1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>serial_barcode</th>
                  <th>nama_asset</th>
                  <th>status</th>
                  <th>lokasi</th>
                  <th>kategori</th>
                  <th>expired_date</th>
                  <th>nama_supplier</th>
                  <th>harga_satuan</th>
                  <th>jumlah_barang</th>
                  <th>total_harga</th>
                </tr>
                </thead>           
                <tbody>
                <td>01232</td>
                  <td>Komputer</td>
                  <td>Ready</td>
                  <td>Labkom3</td>
                  <td>Elektronik</td>
                  <td>null</td>
                  <td>PT Faiq Makmur</td>
                  <td>5.000.000</td>
                  <td>3</td>
                  <td>15.000.000</td>
                </tr>
                <tr>
                  <td>01222</td>
                  <td>Meja</td>
                  <td>Ready</td>
                  <td>Labkom4</td>
                  <td>Furniture</td>
                  <td>null</td>
                  <td>PT Faiq Makmur</td>
                  <td>3.000.000</td>
                  <td>3</td>
                  <td>15.000.000</td>                
                  </tr>
         
                <tr>
                  <td>01432</td>
                  <td>Lemari</td>
                  <td>Ready</td>
                  <td>Labkom1</td>
                  <td>Furniture</td>
                  <td>null</td>
                  <td>PT Faiq Makmur</td>
                  <td>1.000.000</td>
                  <td>1</td>
                  <td>1.000.000</td>
                </tr>
                
                                <tr>
                  <td>01672</td>
                  <td>Laptop</td>
                  <td>Ready</td>
                  <td>Labkom2</td>
                  <td>Elektronik</td>
                  <td>null</td>
                  <td>PT Faiq Makmur</td>
                  <td>6.000.000</td>
                  <td>12</td>
                  <td>72.000.000</td>
                </tr>
                  
                                <tr>
                  <td>01122</td>
                  <td>LCD</td>
                  <td>Ready</td>
                  <td>Labkom4</td>
                  <td>Elektronik</td>
                  <td>null</td>
                  <td>PT Faiq Makmur</td>
                  <td>4.500.000</td>
                  <td>2</td>
                  <td>9.000.000</td>
                </tr>
               
                                <tr>
                  <td>01312</td>
                  <td>Sound system</td>
                  <td>Ready</td>
                  <td>Labkom1</td>
                  <td>Elektronik</td>
                  <td>null</td>
                  <td>PT Faiq Makmur</td>
                  <td>1.000.000</td>
                  <td>4</td>
                  <td>4.000.000</td>
                </tr>
               
                                <tr>
                  <td>01431</td>
                  <td>Smart Board</td>
                  <td>Ready</td>
                  <td>Labkom3</td>
                  <td>Elektronik</td>
                  <td>null</td>
                  <td>PT Faiq Makmur</td>
                  <td>2.000.000</td>
                  <td>3</td>
                  <td>6.000.000</td>
                </tr>
                                               <tr>
                  <td>01232</td>
                  <td>Papan Tulis</td>
                  <td>Ready</td>
                  <td>Labkom2</td>
                  <td>Furniture</td>
                  <td>null</td>
                  <td>PT Faiq Makmur</td>
                  <td>1.000.000</td>
                  <td>2</td>
                  <td>2.000.000</td>

                <tfoot>
                  <tr>
                  <th>serial_barcode</th>
                  <th>nama_asset</th>
                  <th>status</th>
                  <th>lokasi</th>
                  <th>kategori</th>
                  <th>expired_date</th>
                  <th>nama_supplier</th>
                  <th>harga_satuan</th>
                  <th>jumlah_barang</th>
                  <th>total_harga</th>
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
<script type="text/javascript">
$(document).ready(function(){
    $('#myTable1').DataTable();
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>