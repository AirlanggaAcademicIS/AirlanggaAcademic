<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
<!-- Nama konten -->
Nama konten 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->
Notulensi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Notulensi Rapat</h3>
              <br>
            
            <div class="container">
  <div class="row">
        <div class="col-sm-4 col-sm-offset-7">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search" >
                    <span class=" input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
            </div>
        </div>
  </div>
</div>

          <div class="btn-group">
              <a button type="button" class="btn btn-primary">Bulan</button></a>
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
              <span class="caret"></span>
              </button>
            <ul class="dropdown-menu" role="menu">
            <li><a href="#">Januari</a></li>
            <li><a href="#">Februari</a></li>
            <li><a href="#">Maret</a></li>
            <li><a href="#">April</a></li>
            <li><a href="#">Mei</a></li>
            <li><a href="#">Juni</a></li>
            <li><a href="#">Juli</a></li>
            <li><a href="#">Agustus</a></li>
            <li><a href="#">September</a></li>
            <li><a href="#">Oktober</a></li>
            <li><a href="#">November</a></li>
            <li><a href="#">Desember</a></li>
          </ul>
          </div>

          <div class="btn-group">
          <button type="button" class="btn btn-primary">Tahun</button>
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
          <li><a href="#">2015</a></li>
          <li><a href="#">2016</a></li>
          <li><a href="#">2017</a></li>
          <li><a href="#">2018</a></li>
   
          </ul>
          </div>

              <a href="<?php echo e(url ('notulensi/notulensi/formnotulensi')); ?>" class="btn btn-primary btn-l">
              <i class="fa fa-plus"></i> Tambah</a>

               <a href="<?php echo e(url('notulensi/notulensi/ViewEditNotulensi')); ?>" class="btn btn-primary btn-md"> Edit</a>

               
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                  <th></th>
                   <th>No</th>
                   <th>Nama Rapat</th>
                  <th>Waktu Pelaksanaan</th>
                  <th>Tempat </th>
                  <th>Agenda </th>
                  <th> Hasil Rapat</th>
                  <th> Status</th>
                  <th></th>
                  </tr>
                </thead>
                <tbody>
                <tr>
               <td><input type="checkbox" class="checkbox" value=""></label></td>
               <td>1</td>
                <td>Rapat Kurikulum</td>
                <td>20-03-2017 09.00</td>
                <td>Ruang 101</td>
                <th>Membahas Kurikulum Baru </th>
                <td><button type="button" class="btn btn-link"data-toggle="modal" data-target="#myModal">Detail</button>
                <th> Sudah dikonfirmasi</th>
                <td><button type="button" class="btn btn-primary btn-sm"data-toggle="modal" data-target="#myModalHorizontal">Kirim</button>
                </tr>
                <td><input type="checkbox" class="checkbox" value=""></label></td>
                <td>2</td>
                <td>Rapat Semester Baru</td>
                <td>25-03-2017 10.00</td>
                <td>Ruang 322</td>
                <th>Membahas Jadwal Kegiatan Semester Baru</th>
                <td><button type="button" class="btn btn-link"data-toggle="modal" data-target="#myModal2">Detail</button>
                <th> Sudah dikonfirmasi</th>
                <td><button type="button" class="btn btn-primary btn-sm"data-toggle="modal" data-target="#myModalHorizontal">Kirim</button>
                </tr>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Detail Hasil Pembahasan</h4>
        </div>
        <div class="modal-body">
          <p>Prodi S1 Sistem Informasi mengadakan acara Lokakarya Redesain Kurikulum S1 Sistem Informasi bertempat di Ruang 101 Sains dan Teknologi Universitas Airlangga surabaya. Acara dihadiri oleh Staf Prodi, Alumni, Mahasiswa dan Stake holder.
          Berikut Susunan Acara :
          Registrasi
          Pembukaan
          Sambutan Bpk Dekan FST (Prof. Win Darmanto, Ph.D)
          Sambutan Bpk Kepala Departemen Matematika ( Badrus Zaman, S.Kom, M.Cs)
          Sambutan dari Tim Redesain Kurikulum S1 SI ( Indra Kharisma Raharjana, S.Kom, M.Kom)
          Sambutan dari Stake Holder PT. Andromeda (Bpk. Zaenal Arifin)
          Sambutan dari Stake Holder PT. Sentra Vidya Tama
          Sesi Tanya Jawab Alumni, Mahasiswa, Tim Redesain dan Stake Holder
          Penutup
        <p>Berikut adalah poin hasil pembahasan yang diperoleh:
            </p>1.Penambahan Mata Kuliah Sains yaitu kimia, fisika, dll
            </p>2.Penambahan Mata Kuliah Berbasis Start Up
          .</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Detail Hasil Pembahasan</h4>
        </div>
        <div class="modal-body">
          <p>Jadwal Semester Ganjil
            </p>Pemindahan Jam ke-1 menjadi pukul 08.00
            </p>Pemindahan Jam istirahat menjadi pukul 13.00-13.30
            
          .</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Kirim Notulensi Rapat
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form class="form-horizontal" role="form">

          <div class="form-group">
         <label class="col-sm-2 control-label"
         for="sel1">Select list:</label>
         <div class="col-sm-3">
        <select class="col-sm-7 form-control" id="sel1">
    <option>Ketua Rapat</option>
    <option>Dosen</option>
   
           </select>
            </div>

                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-4">
                        <input type="email" class="form-control" 
                        id="inputEmail3" placeholder="Email"/>
                    </div>
                  </div>
                </form>
                 
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">
                    Kirim
                </button>
            </div>
        </div>
    </div>
</div>
</div>

    </tbody>
  </table>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('code-footer'); ?>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#myTable1').DataTable();
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>