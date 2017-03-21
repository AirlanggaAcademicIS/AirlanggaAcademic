<?php $__env->startSection('code-header'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
Berita Acara HTML Head
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
<!-- Nama konten -->
Berita Acara
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
 <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- First Blog Post -->
                <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="<?php echo e(asset('img/se1.png')); ?>" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo e(asset('img/se2.png')); ?>" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?php echo e(asset('img/se3.png')); ?>" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <h2>
                    <a href="<?php echo e(url('/kegiatan/postpertama')); ?>">Study Excursion di Gameloft, Jogjakarta</a>
                </h2>
                <p class="lead">
                    by <a href="#">Windra Rasyad</a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:00 PM</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                <h3>Project Details</h3>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Dolor Sit Amet</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>
                </ul>
            <a class="btn btn-primary" href="<?php echo e(url('/kegiatan/postpertama')); ?>">Read More <i class="fa fa-angle-right"></i></a>
            </div>

            	<br></br>

                <h2>
                    <a href="#">Seminar START UP sebagai solusi masalah</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Admin</a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on March 18, 2017 at 10:00 PM</p>
                <hr>
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="<?php echo e(asset('img/aisf.png')); ?>" alt="">
                </a>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>

                <hr>

                <!-- Second Blog Post -->
                <h2>
                    <a href="#">Lokakarya Redesign Kurikulum</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Eva Hariyanti, S.Si., M.T.</a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on February 28, 2017 at 10:45 AM</p>
                <hr>
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="<?php echo e(asset('img/Lokakarya.png')); ?>" alt="">
                </a>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>

                <hr>

                <!-- Third Blog Post -->
                <h2>
                    <a href="#">Studi Banding dan Silaturahmi HIMSI UNAIR dengan STIKOM</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">M. Hilmi Achwin</a>
                </p>
                <p><i class="fa fa-clock-o"></i> Posted on January 31, 2017 at 8:45 PM</p>
                <hr>
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="<?php echo e(asset('img/stubanHead.png')); ?>" alt="">
                </a>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>

                <hr>

                <!-- Pager -->
                <ul class="col-md-6">
                    <li class="previous" style="margin-right : 150px;">
                        <a><button type="button" class=" btn btn-block btn-primary" disabled>&larr; Older</button></a>
                    </li>
                </ul>
                <ul class="col-md-6">
                	
                		
                    <li class="next" style="margin-left: 150px;">
                        <a href="#"><button type="button" class="btn btn-block btn-primary">Newer &rarr;</button></a>
                   
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Cari <i class="fa fa-search"></i></h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    <!-- /.input-group -->
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
	                        <!-- /.col-lg-6 -->
	                    </div>
	                    <!-- /.row -->
	            </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Arsip</h4>
                    <div class="form-group">
                		<select class="form-control select2 select2-hidden-accessible" style="width: 70%;" tabindex="-1" aria-hidden="true" value="Pilih Bulan">
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>