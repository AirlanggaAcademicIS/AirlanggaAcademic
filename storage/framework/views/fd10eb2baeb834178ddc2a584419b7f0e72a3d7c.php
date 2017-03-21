<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Fitur 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Input Dosen Mata Kuliah
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
	<div class="box box-info">
		<form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Prodi : </label>
                  <div class="col-sm-10">
						<div class="form-group row">
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option>Matematika</option>
                                        <option>Sistem Informasi</option>
                                        <option>Statistika</option>
                                        <option>Fisika</option>
                                        <option>Biologi	</option>
                                    </select>
                                </div>              
                        </div>
                </div>

               
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Mata Kuliah : </label>
                  <div class="col-sm-10">
						<div class="form-group row">
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option>Riset Operasi</option>
                                        <option>Kalkulus</option>
                                        <option>Algoritma dan Pemrograman</option>
                                        <option>Sistem Pendukung Keputusan</option>
                                        <option>Teori Pengambilan Keputusan</option>
                                    </select>
                                </div>              
                        </div>
                </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tahun Akademik : </label>
                  <div class="col-sm-10">
						<div class="form-group row">
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option>Genap</option>
                                        <option>Ganjil</option>
                                    </select>
                                </div> 
                                <div class="col-xs-2">
                                	<input type="text" class="form-control" id="thn-input" placeholder="____/____">
                                </div>       
                        </div>


                </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Dosen : </label>
                  <div class="col-sm-10">
						<div class="form-group row">
                                <div class="col-xs-4">
                                    <select class="form-control">
                                        <option>Purbandini, S.Si., M.Kom.</option>
                                        <option>Drs. Eto Wuryanto, DEA</option>
                                        <option>Ir. Dyah Herawatie, M.Si.</option>
                                        <option>Indra Kharisma Raharjana, S.Kom., M.T.</option>
                                        <option>Badrus Zaman, S.Kom., M.Cs.</option>
                                        <option>Ir. Dyah Herawatie, M.Si.</option>
                                    </select>
                                </div>

                                <div class="col-xs-3">
                                	<div class="radio">
                    					<label>
                      						<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked="">
                      							 PJMK
                      					</label>
                      				</div>

                                    <div class="radio">
                    					<label>
                      						<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                      							Pendamping PJMK
                      					</label>
                      				</div>
                                </div>
                            </div> 
                            </div>                  
                        </div>
       
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
    </div>
                               
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>