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
<<<<<<< HEAD
            <a href="<?php echo e(url('mahasiswa/biodata')); ?>"><i class='fa fa-book'></i> <span> Biodata</span></a>
=======
<<<<<<< HEAD
            <a href="<?php echo e(url('mahasiswa/biodata')); ?>"><i class='fa fa-book'></i> <span> Biodata</span></a>
=======
            <a href="<?php echo e(url('/biodata')); ?>"><i class='fa fa-book'></i> <span> Biodata</span></a>
>>>>>>> 41de8911d6f2bbafa7cc6ca841df5319741319e6
>>>>>>> 5f49b40739e4af9b52bf0d1338f3d87b6706afa5
            </li>        
            </ul>
            </li>

            <!-- Modul Dosen -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Dosen</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
<<<<<<< HEAD
            <li <?php if($page == 'pengmas'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            ><a href="<?php echo e(url('/dosen/pengmas')); ?>">Pengabdian Masyarakat</a></li>
            <li><a href="<?php echo e(url('/dosen/konferensi/index')); ?>">Konferensi</a></li>
            <li
            <?php if($page == 'penelitian'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            ><a href="<?php echo e(url('/dosen/penelitian')); ?>">Penelitian</a>
            </li>                 
            <li><a href="<?php echo e(url('/dosen/jurnal/index')); ?>">Jurnal</a></li>  
            <li><a href="<?php echo e(url('/dosen/sktugas/index')); ?>">SK Tugas</a></li>
            <li><a href="<?php echo e(url('/dosen/biodata/index')); ?>">Biodata</a></li>

=======
>>>>>>> 5f49b40739e4af9b52bf0d1338f3d87b6706afa5

            </ul>
            </li>

            <!-- Modul Kurikulum -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Kurikulum</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            <li
            <?php if($page == 'universitas'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('/kurikulum/universitas')); ?>"><i class='fa fa-book'></i> <span> Universitas</span></a>
            </li>        

>>>>>>> 41de8911d6f2bbafa7cc6ca841df5319741319e6
>>>>>>> 5f49b40739e4af9b52bf0d1338f3d87b6706afa5

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
            <!-- Sidebarnya ditaruh dibawah sini -->
=======
            <!-- Sidebarnya ditaruh dibawah sini -->
<<<<<<< HEAD
            <li>
            <a href=""><i class='fa fa-users'></i> <span> JenisPenilaian</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
            <li
            <?php if($page == 'JenisPenilaian'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url notulensi/dosenrapat -->
            <a href="<?php echo e(url('krs-khs/JenisPenilaian')); ?>"><i class='fa fa-book'></i> <span>JenisPenilaian</span></a>
            </li>        
            </ul>
            </li>
=======
>>>>>>> 41de8911d6f2bbafa7cc6ca841df5319741319e6
>>>>>>> 5f49b40739e4af9b52bf0d1338f3d87b6706afa5

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
            <li
<<<<<<< HEAD
            <?php if($page == 'notulen'): ?>
=======
            <?php if($page == 'dosenrapat'): ?>
>>>>>>> 5f49b40739e4af9b52bf0d1338f3d87b6706afa5
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
<<<<<<< HEAD
            <!-- Href menuju ke url notulensi/notulensi rapat -->
            <a href="<?php echo e(url('notulensi/notulen')); ?>"><i class='fa fa-book'></i> <span> Notulensi Rapat</span></a>
            </li>
            </ul>
            </li>

=======
            <!-- Href menuju ke url notulensi/dosenrapat -->
            <a href="<?php echo e(url('notulensi/dosenrapat')); ?>"><i class='fa fa-book'></i> <span>Dosen Rapat</span></a>
            </li>        
            </ul>
            </li>


>>>>>>> 5f49b40739e4af9b52bf0d1338f3d87b6706afa5
            <!-- Modul Pengelolaan Kegiatan -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Pengelolaan Kegiatan</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

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
<<<<<<< HEAD
                <li><a href="<?php echo e(url('/index-asset')); ?>">all asset</a></li>
                <li><a href="<?php echo e(url('/inventaris/index-peminjaman')); ?>">peminjaman</a></li>
                <li><a href="<?php echo e(url('/index-maintenance')); ?>">maintenance</a></li>
=======
<<<<<<< HEAD
                <li><a href="<?php echo e(url('/index-asset')); ?>">all asset</a></li>
                <li><a href="<?php echo e(url('/inventaris/index-peminjaman')); ?>">peminjaman</a></li>
                <li><a href="<?php echo e(url('/index-maintenance')); ?>">maintenance</a></li>
=======

>>>>>>> 41de8911d6f2bbafa7cc6ca841df5319741319e6
>>>>>>> 5f49b40739e4af9b52bf0d1338f3d87b6706afa5
            </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>