<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <?php if(! Auth::guest()): ?>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo e(Gravatar::get($user->email)); ?>" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p><?php echo e(Auth::user()->name); ?></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> <?php echo e(trans('adminlte_lang::message.online')); ?></a>
                </div>
            </div>
        <?php endif; ?>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebkuar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="<?php echo e(trans('adminlte_lang::message.search')); ?>..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header"><?php echo e(trans('adminlte_lang::message.header')); ?></li>
            <!-- Optionally, you can add icons to the links -->
            <li 
            <?php if($page == 'home'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            ><a href="<?php echo e(url('home')); ?>"><i class='fa fa-link'></i> <span><?php echo e(trans('adminlte_lang::message.home')); ?></span></a></li>
            
            <!-- Modul Mahasiswa -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Mahasiswa</span></a>
            <ul class="treeview-menu">
            <!-- Sidebar Biodata -->
            <!-- $page nya sesuaiin sama yang di controller -->
            <li
            <?php if($page == 'biodata'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('mahasiswa/biodata')); ?>"><i class='fa fa-book'></i> <span> Biodata</span></a>
            </li>        
            </ul>
            </li>

            <!-- Modul Dosen -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Dosen</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            </ul>
            </li>

            <!-- Modul Kurikulum -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Kurikulum</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            </ul>
            </li>

            <!-- Modul Krs-Khs -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Krs-Khs</span></a>
            <ul class="treeview-menu">
<<<<<<< HEAD
                <li
                <?php if($page == 'ruang'): ?>
                <?php echo 'class="active"'; ?>

                <?php endif; ?>
                >
            <!-- Href menuju ke url krs-khs/ruang/view -->
                <a href="<?php echo e(url('krs-khs/ruang/view')); ?>"><i class='fa fa-book'></i> <span> Ruang</span></a>
                </li>    
=======
>>>>>>> bc487658186cc5c6b5c09d20d98e029aa1ff028f
            <!-- Sidebarnya ditaruh dibawah sini -->

            </ul>
            </li>

            <!-- Modul Monitoring Skripsi -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            </ul>
            </li>

            <!-- Modul Notulensi -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Notulensi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            </ul>
            </li>

            <!-- Modul Pengelolaan Kegiatan -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Pengelolaan Kegiatan</span></a>
            <ul class="treeview-menu">
<<<<<<< HEAD
                <li><a href="<?php echo e(url('/kegiatan/dokumentasi')); ?>">Show</a></li>
                <li><a href="<?php echo e(url('/pengelolaan-kegiatan/uploadDokumentasi')); ?>">Upload</a></li>
            <!-- Sidebarnya ditaruh dibawah sini -->

=======
            <!-- Sidebarnya ditaruh dibawah sini -->
            <!-- $page nya sesuaiin sama yang di controller -->
            <li
            <?php if($page == 'rundown'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('pengelolaan-kegiatan/rundown')); ?>"><i class='fa fa-book'></i> <span> Rundown</span></a>
            </li>
>>>>>>> bc487658186cc5c6b5c09d20d98e029aa1ff028f
            </ul>
            </li>

            <!-- Modul PLA -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> PLA</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            </ul>
            </li>

            <!-- Modul Inventaris -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Inventaris</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
                <li><a href="<?php echo e(url('/index-asset')); ?>">all asset</a></li>
                <li><a href="<?php echo e(url('/inventaris/index-peminjaman')); ?>">peminjaman</a></li>
                <li><a href="<?php echo e(url('/index-maintenance')); ?>">maintenance</a></li>
            </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>