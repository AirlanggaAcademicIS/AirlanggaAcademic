@extends('adminlte::layouts.app')

@section('code-header')


@endsection

@section('htmlheader_title')
<!-- Nama konten -->
Berita Acara
@endsection

@section('contentheader_title')
<!-- Nama konten -->
Laporan Pertanggung Jawaban
@endsection

@section('main-content')
<div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PMB 2016
                    <small>by <a href="#">Windra Rasyad</a>
                    </small>
                    <small>Kategori <a href="#">Himpunan Mahasiswa S1 Sistem Informasi</a>
                    </small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Pengelolaan Kegiatan</a>
                    </li>
                    <li><a href="{{url('/kegiatan/viewlpj')}}">Laporan Pertanggung Jawaban</a></li>
                    <li><a href="#">PMB 2016</a></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8" style="background-color:white;">

                <!-- Blog Post -->

                <hr>

                <!-- Date/Time -->
                <p><i class="fa fa-clock-o"></i> Posted on March 20, 2017 at 9:00 AM</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="{{asset('img/seHead.png')}}" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead" style="text-align:justify">I. Latar Belakang</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
                <p class="lead" style="text-align:justify">II.  TUJUAN KEGIATAN</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
                <p class="lead" style="text-align:justify">III. NAMA KEGIATAN</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
                <p class="lead" style="text-align:justify">IV.  PELAKSANAAN MEKANISME DAN RANCANGAN KEGIATAN</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>
                <p class="lead" style="text-align:justify">V.   EVALUASI KEGIATAN</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>
                <p class="lead" style="text-align:justify">VI.  SUSUNAN PANITIA</p>
                    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Sie</th>
                        <th>Jabatan</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Prodi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>BPI</td>
                        <td>Ketua</td>
                        <td>M. Hilmi Achwin</td>
                        <td>081411631020</td>
                        <td>Sistem Informasi</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>BPI</td>
                        <td>Sekertaris</td>
                        <td>Regina Devi L.</td>
                        <td>081411633009</td>
                        <td>Sistem Informasi</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Acara</td>
                        <td>Koordinator</td>
                        <td>Dionisius N. P.</td>
                        <td>081411631019</td>
                        <td>Sistem Informasi</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Acara</td>
                        <td>Staff</td>
                        <td>Dewangga Wisnu</td>
                        <td>081511631019</td>
                        <td>Sistem Informasi</td>
                    </tr>
                    </tbody>
                    </table>                    
                <p class="lead" style="text-align:justify">VII. SUSUNAN ACARA</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>
                <p class="lead" style="text-align:justify">VIII.    REALISASI PENDANAAN</p>
                    <h4 class="box-title">Pemasukan</h4>
                    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Sumber Dana</th>
                        <th>Jumlah Dana</th>
                        <th>QTY</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Dana Fakultas</td>
                        <td>Rp. 1.800.000,00</td>
                        <td>1</td>
                        <td>Rp. 1.800.000,00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pembayaran Peserta</td>
                        <td>Rp. 50.000,00</td>
                        <td>56</td>
                        <td>Rp. 2.800.000,00</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Total</th>
                        <th>Rp. 4.600.000,00</th>
                    </tr>
                    </tfoot>
                    </table>
                    <h4 class="box-title">Pengeluaran</h4>
                    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Jenis Pengeluaran</th>
                        <th>Harga</th>
                        <th>QTY</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Makan Peserta</td>
                        <td>Rp. 10.000,00</td>
                        <td>60 x 3 Hari</td>
                        <td>Rp. 1.800.000,00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Makan Panitia</td>
                        <td>Rp. 6.000,00</td>
                        <td>37 x 3 Hari</td>
                        <td>Rp. 666.000,00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Fee Pemateri</td>
                        <td>Rp. 500.000,00</td>
                        <td>6</td>
                        <td>Rp. 666.000,00</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Total</th>
                        <th>Rp. 4.600.000,00</th>
                    </tr>
                    </tfoot>
                    </table>
                <p class="lead" style="text-align:justify">IX.  Dokumentasi</p>
                <img class="img-responsive" src="{{asset('img/se1.png')}}" alt="">
                <img class="img-responsive" src="{{asset('img/se2.png')}}" alt="">
                <img class="img-responsive" src="{{asset('img/se3.png')}}" alt="">
                <hr>
                <br></br>
                <br></br>
                
                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Masukkan Saran</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <h3>Kotak Saran</h3>

                <br></br>
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Taufik, S.T, M.Kom	<small>Dosen</small>

                        </h4>
                        <h4>
                            <small>March 20, 2017 at 9:17 PM </small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="{{asset('img/profile.jpg')}}" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Windra Rasyad	<small>Mahasiswa</small>
                        </h4>
                        <h4>
                            <small>March 20, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="{{asset('img/profile2.jpg')}}" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">M. Hilmi Achwin	<small>Mahasiswa</small>
                                </h4>
                                <h4>
                                    <small>March 20, 2014 at 9:38 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                            <div class="row">
                            	<div class="well">
	                            <div class="media-body">
	                            	<form role="form">
	                        			<div class="form-group">
	                            			<textarea class="form-control" rows="1"></textarea>
	                        			</div>
	                        			<button type="submit" class="btn btn-primary">Submit</button>
	                    			</form>
	                            </div>
	                        	</div>
                        	</div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Cari <i class="fa fa-search"></i></h4>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Kegiatan Lain</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Pengmas Himsi</a>
                                </li>
                                <li><a href="#">Pengmas Dosen</a>
                                </li>
                                <li><a href="#">AISF</a>
                                </li>
                                <li><a href="#">Seminar SCM</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Lokakarya Kurikulum</a>
                                </li>
                                <li><a href="#">FAMGATH</a>
                                </li>
                                <li><a href="#">Raker HIMSI</a>
                                </li>
                                <li><a href="#">Kuliah Tamu</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Arsip</h4>
                    <div class="form-group">
                		<select class="form-control select2 select2-hidden-accessible" style="width: 70%;" tabindex="-1" aria-hidden="true">
	                  		<option>Pilih bulan</option>
	                  		<option>Maret 2017</option>
	                  		<option>Februari 2017</option>
	                  		<option>Januari 2017</option>
	                  	</select>
              		</div>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Windra R 2017</p>
                </div>
            </div>
        </footer>

    </div>


@endsection

@section('code-footer')
<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>



@endsection