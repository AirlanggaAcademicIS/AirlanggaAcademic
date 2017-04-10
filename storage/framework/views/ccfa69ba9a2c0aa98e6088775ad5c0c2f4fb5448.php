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
<<<<<<< HEAD
            <a href="<?php echo e(url('/biodata')); ?>"><i class="fa fa-book"></i> Biodata</a>
            </li>


            <li
            <?php if($page == 'kemahasiswaan'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
                <a href="#"><i class="fa fa-user-secret"></i> Kemahasiswaan
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                    <ul class="treeview-menu">
                        <!-- Href menuju ke url mahasiswa/kemahasiswaan/penelitian -->
                        <li 
                        <?php if($page == 'penelitian'): ?>
                        <?php echo 'class="active"'; ?>

                        <?php endif; ?>
                        ><a href="<?php echo e(url('/mahasiswa/penelitian')); ?>"><i class="fa fa-edit"></i> Penelitian
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                                <ul class="treeview-menu">
                                    <!-- Href menuju ke url mahasiswa/kemahasiswaan/penelitian -->
                                    <li
                                    <?php if($page == 'detailpenelitian'): ?>
                                    <?php echo 'class="active"'; ?>

                                    <?php endif; ?>
                                    ><a href="<?php echo e(url('/mahasiswa/detailpenelitian')); ?>"><i class="fa fa-edit"></i>Detail Penelitian</a></li>
                                    <li><a href="<?php echo e(url('/mahasiswa/detailanggota')); ?>"><i class="fa fa-edit"></i>Detail Anggota</a></li>
                                </ul>
                        </li>
                        <!-- Href menuju ke url mahasiswa/kemahasiswaan/prestasi -->
                        <li><a href="<?php echo e(url('/mahasiswa/prestasi')); ?>"><i class="fa fa-edit"></i> Prestasi</a></li>
                    </ul>
                </li>
                <!-- $page nya sesuaiin sama yang di controller -->
            <li
            <?php if($page == 'biodata'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
                <a href="<?php echo e(url('/mahasiswa/akun')); ?>"><i class="fa fa-book"></i> Akun Mahasiswa</a>
            </li>
                  
                </ul>
=======
            <!-- Href menuju ke url mahasiswa/biodata -->
<<<<<<< HEAD
            <a href="<?php echo e(url('/biodata')); ?>"><i class='fa fa-book'></i> <span> Biodata</span></a>
=======
            <a href="<?php echo e(url('mahasiswa/biodata')); ?>"><i class='fa fa-book'></i> <span> Biodata</span></a>
>>>>>>> 6458f7765f20d5e4c9efd16f98e1117f3defb387
            </li>        
            </ul>
>>>>>>> f87d0977d4ab8efde894bf4387fb772132a94de6
            </li>

            <!-- Modul Dosen -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Dosen</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f87d0977d4ab8efde894bf4387fb772132a94de6

            <li <?php if($page == 'pengmas'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            ><a href="<?php echo e(url('/dosen/pengmas')); ?>">Pengabdian Masyarakat</a></li>

           <li
            <?php if($page == 'konferensi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('dosen/konferensi')); ?>"><i class='fa fa-book'></i> <span> Konferensi</span></a>
            </li> 

          
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
            <li><a href="<?php echo e(url('/dosen/pengmas/index')); ?>">Pengabdian Masyarakat</a></li>
>>>>>>> 6458f7765f20d5e4c9efd16f98e1117f3defb387
>>>>>>> f87d0977d4ab8efde894bf4387fb772132a94de6
            <li><a href="<?php echo e(url('/dosen/konferensi/index')); ?>">Konferensi</a></li>
            <li
            <?php if($page == 'penelitian'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            ><a href="<?php echo e(url('/dosen/penelitian')); ?>">Penelitian</a>
            </li>                 
<<<<<<< HEAD
            <li
            <?php if($page == 'jurnal'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            ><a href="<?php echo e(url('/dosen/jurnal')); ?>">Jurnal</a>
            </li>  

            <li><a href="<?php echo e(url('/dosen/sktugas/index')); ?>">SK Tugas</a></li>
            <li><a href="<?php echo e(url('/dosen/biodata/index')); ?>">Biodata</a></li>

=======
            <li><a href="<?php echo e(url('/dosen/jurnal/index')); ?>">Jurnal</a></li>  
            <li><a href="<?php echo e(url('/dosen/sktugas/index')); ?>">SK Tugas</a></li>
            <li><a href="<?php echo e(url('/dosen/biodata/index')); ?>">Biodata</a></li>

<<<<<<< HEAD
=======
=======
>>>>>>> aa315a25f1ed1a3b8fc46a30303a79d232c8ee1d
>>>>>>> 6458f7765f20d5e4c9efd16f98e1117f3defb387
>>>>>>> f87d0977d4ab8efde894bf4387fb772132a94de6

            </ul>
            </li>

            <!-- Modul Kurikulum -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Kurikulum</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
<<<<<<< HEAD
            <li 
=======
<<<<<<< HEAD
            <!-- $page nya sesuaiin sama yang di controller -->
            <li
>>>>>>> f87d0977d4ab8efde894bf4387fb772132a94de6
            <?php if($page == 'prodi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
<<<<<<< HEAD
            ><a href="<?php echo e(url('/kurikulum/prodi')); ?>"><i class='fa fa-book'></i> <span> Prodi</span></a></li>
            </li> 
            <a href="<?php echo e(url('/kurikulum/universitas')); ?>"><i class='fa fa-book'></i> <span> Universitas</span></a>
            </li>        
=======
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


=======
<<<<<<< HEAD
=======
            <li
            <?php if($page == 'capaian-pembelajaran'): ?>
            <?php echo 'class="active"'; ?>

             <?php endif; ?>
            >
            <!-- Href menuju ke url kurikulum/capaian-pembelajaran -->
            <a href="<?php echo e(url('kurikulum/capaian-pembelajaran')); ?>"><i class='fa fa-book'></i> <span> Capaian Pembelajaran</span></a>
            </li>
>>>>>>> aa315a25f1ed1a3b8fc46a30303a79d232c8ee1d
>>>>>>> 6458f7765f20d5e4c9efd16f98e1117f3defb387

>>>>>>> f87d0977d4ab8efde894bf4387fb772132a94de6
            </ul>
            </li>

            <!-- Modul Krs-Khs -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Krs-Khs</span></a>
            <ul class="treeview-menu">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f87d0977d4ab8efde894bf4387fb772132a94de6
            <!-- Sidebarnya ditaruh dibawah sini -->
            
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

           
            </li>

<<<<<<< HEAD
=======
=======
                <li
                <?php if($page == 'ruang'): ?>
                <?php echo 'class="active"'; ?>

                <?php endif; ?>
                >
            <!-- Href menuju ke url krs-khs/ruang/view -->
                <a href="<?php echo e(url('krs-khs/ruang/view')); ?>"><i class='fa fa-book'></i> <span> Ruang</span></a>
<<<<<<< HEAD
                </li>  
                <a href="<?php echo e(url('krs-khs/jam/view')); ?>"><i class='fa fa-clock-o'></i> <span> Jam</span></a>
                </li>   
=======
                </li>    
>>>>>>> aa315a25f1ed1a3b8fc46a30303a79d232c8ee1d
            <!-- Sidebarnya ditaruh dibawah sini -->

            </ul>
            </li>

>>>>>>> 6458f7765f20d5e4c9efd16f98e1117f3defb387
>>>>>>> f87d0977d4ab8efde894bf4387fb772132a94de6
            <!-- Modul Monitoring Skripsi -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f87d0977d4ab8efde894bf4387fb772132a94de6
            <li
            <?php if($page == 'skripsi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>>

            <a href="<?php echo e(url('monitoring-skripsi/skripsi')); ?>"><i class='fa fa-book'></i><span> Skripsi</span></a>
            </li>

            <li
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
            <li
            <?php if($page == 'skripsi'): ?>
            {
            !!'class="active"'!!}
            <?php endif; ?>>

            <a href="<?php echo e(url('monsi/skripsi')); ?>">
            <i class='fa fa-book'></i> <span> Skripsi</span></a>
=======
            <li>
>>>>>>> 6458f7765f20d5e4c9efd16f98e1117f3defb387
>>>>>>> f87d0977d4ab8efde894bf4387fb772132a94de6
                <?php if($page == 'KBK'): ?>
                <?php echo 'class="active"'; ?>

                <?php endif; ?>
                >

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f87d0977d4ab8efde894bf4387fb772132a94de6
                <a href="<?php echo e(url('monitoring-skripsi/KBK')); ?>"><i class='fa fa-book'></i><span> KBK </span></a>
            </li>


            <li
                <?php if($page == 'dosbing'): ?>
                <?php echo 'class="active"'; ?>

                <?php endif; ?>
                >

                <a href="<?php echo e(url('monitoring-skripsi/index-dosbing')); ?>"><i class='fa fa-book'></i><span>Dosen Pembimbing </span></a>
<<<<<<< HEAD
            </li>

             <li
                <?php if($page == 'status'): ?>
                <?php echo 'class="active"'; ?>

                <?php endif; ?>
                >

                <a href="<?php echo e(url('monitoring-skripsi/status')); ?>"><i class='fa fa-book'></i><span>Status </span></a>
=======
=======
                <a href="<?php echo e(url('monsi/KBK')); ?>"><i class='fa fa-book'></i><span> KBK </span></a>
>>>>>>> 6d7c00deb94cc42be50f08d01e1471f613b56f53
>>>>>>> 6458f7765f20d5e4c9efd16f98e1117f3defb387
>>>>>>> f87d0977d4ab8efde894bf4387fb772132a94de6
            </li>

            <li
            <?php if($page == 'konsultasi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
<<<<<<< HEAD
            <a href="<?php echo e(url('monitoring-skripsi/konsultasi')); ?>"><i class='fa fa-book'></i>
            <span>Konsultasi</span></a>
            </li>
=======
<<<<<<< HEAD
            <a href="<?php echo e(url('monitoring-skripsi/konsultasi')); ?>"><i class='fa fa-book'></i>
            <span>Konsultasi</span></a>
            </li>
=======
            <a href="<?php echo e(url('monsi/konsultasi')); ?>"><i class='fa-fa-book'></i>
            <span>Konsultasi</span></a>
            </li>
=======

>>>>>>> aa315a25f1ed1a3b8fc46a30303a79d232c8ee1d
>>>>>>> 6458f7765f20d5e4c9efd16f98e1117f3defb387
>>>>>>> f87d0977d4ab8efde894bf4387fb772132a94de6
            </ul>
            </li>

            <!-- Modul Notulensi -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Notulensi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f87d0977d4ab8efde894bf4387fb772132a94de6

            <li
            <?php if($page == 'notulen'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url notulensi/notulensi rapat -->
            <a href="<?php echo e(url('notulensi/notulen')); ?>"><i class='fa fa-book'></i> <span> Notulensi Rapat</span></a>
            </li>

<<<<<<< HEAD
           

=======
>>>>>>> f87d0977d4ab8efde894bf4387fb772132a94de6
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


<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
            
=======

>>>>>>> aa315a25f1ed1a3b8fc46a30303a79d232c8ee1d
            </ul>
            </li>

>>>>>>> 6458f7765f20d5e4c9efd16f98e1117f3defb387
>>>>>>> f87d0977d4ab8efde894bf4387fb772132a94de6
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