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
            <a href="<?php echo e(url('/biodata')); ?>"><i class='fa fa-book'></i> <span> Biodata</span></a>
            </li>        
            </ul>
            </li>

            <!-- Modul Dosen -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Dosen</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
           <li
            <?php if($page == 'konferensi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('dosen/konferensi')); ?>"><i class='fa fa-book'></i> <span> Konferensi</span></a>
            </li> 

            <li><a href="<?php echo e(url('/dosen/pengmas/index')); ?>">Pengabdian Masyarakat</a></li>
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


            </ul>
            </li>

            <!-- Modul Kurikulum -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Kurikulum</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
            <!-- $page nya sesuaiin sama yang di controller -->
            <li
            <?php if($page == 'prodi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <li
            <?php if($page == 'universitas'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('kurikulum/prodi')); ?>"><i class='fa fa-book'></i> <span> Prodi</span></a>
            </li> 
            <a href="<?php echo e(url('/kurikulum/universitas')); ?>"><i class='fa fa-book'></i> <span> Universitas</span></a>
            </li>        



            </ul>
            </li>

            <!-- Modul Krs-Khs -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Krs-Khs</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
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

            </ul>
            </li>

            <!-- Modul Monitoring Skripsi -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
            <li
            <?php if($page == 'skripsi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>>

            <a href="<?php echo e(url('monitoring-skripsi/skripsi')); ?>"><i class='fa fa-book'></i><span> Skripsi</span></a>
            </li>

            <li
                <?php if($page == 'KBK'): ?>
                <?php echo 'class="active"'; ?>

                <?php endif; ?>
                >

                <a href="<?php echo e(url('monitoring-skripsi/KBK')); ?>"><i class='fa fa-book'></i><span> KBK </span></a>
            </li>


            <li
                <?php if($page == 'dosbing'): ?>
                <?php echo 'class="active"'; ?>

                <?php endif; ?>
                >

                <a href="<?php echo e(url('monitoring-skripsi/index-dosbing')); ?>"><i class='fa fa-book'></i><span>Dosen Pembimbing </span></a>
            </li>

            <li
            <?php if($page == 'konsultasi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <a href="<?php echo e(url('monitoring-skripsi/konsultasi')); ?>"><i class='fa fa-book'></i>
            <span>Konsultasi</span></a>
            </li>
            </ul>
            </li>

            <!-- Modul Notulensi -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Notulensi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <li
            <?php if($page == 'notulen'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url notulensi/notulensi rapat -->
            <a href="<?php echo e(url('notulensi/notulen')); ?>"><i class='fa fa-book'></i> <span> Notulensi Rapat</span></a>
            </li>

            <li
            <?php if($page == 'dosenrapat'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url notulensi/dosenrapat -->
            <a href="<?php echo e(url('notulensi/dosenrapat')); ?>"><i class='fa fa-book'></i> <span>Dosen Rapat</span></a>
            </li>        
            </ul>
            </li>


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
                <li><a href="<?php echo e(url('/index-asset')); ?>">all asset</a></li>
                <li><a href="<?php echo e(url('/inventaris/index-peminjaman')); ?>">peminjaman</a></li>
                <li><a href="<?php echo e(url('/index-maintenance')); ?>">maintenance</a></li>
            </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>