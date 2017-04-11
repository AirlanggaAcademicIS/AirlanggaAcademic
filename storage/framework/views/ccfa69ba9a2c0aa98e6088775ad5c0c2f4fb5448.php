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

<<<<<<< HEAD
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
=======
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
>>>>>>> 811ff23a5082ee82c748905620869fcc9fb7e65f
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
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('mahasiswa/biodata')); ?>"><i class='fa fa-book'></i> <span> Biodata</span></a>
            </li>        
            </ul>
            </li>
=======
                <a href="<?php echo e(url('/mahasiswa/biodata')); ?>"><i class="fa fa-book"></i> Biodata</a>
            </li>
                        <!-- Href menuju ke url mahasiswa/kemahasiswaan/prestasi -->
                        <li><a href="<?php echo e(url('/mahasiswa/prestasi')); ?>"><i class="fa fa-edit"></i> Prestasi</a></li>
                <!-- $page nya sesuaiin sama yang di controller -->

            <li
            <?php if($page == 'biodatamahasiswa'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('mahasiswa/biodata-mahasiswa')); ?>"><i class='fa fa-book'></i> <span> Biodata Mahasiswa</span></a>
          
            </li>
                        <!-- Href menuju ke url mahasiswa/kemahasiswaan/penelitian -->
                        <li 
                        <?php if($page == 'penelitian'): ?>
                        <?php echo 'class="active"'; ?>

                        <?php endif; ?>
                        ><a href="<?php echo e(url('/mahasiswa/penelitian')); ?>"><i class="fa fa-edit"></i> Penelitian
                            </a>
                            </li>
                                    <!-- Href menuju ke url mahasiswa/kemahasiswaan/penelitian -->
                                    <li
                                    <?php if($page == 'detailpenelitian'): ?>
                                    <?php echo 'class="active"'; ?>

                                    <?php endif; ?>
                                    ><a href="<?php echo e(url('/mahasiswa/detailpenelitian')); ?>"><i class="fa fa-edit"></i>Detail Penelitian</a></li>
                                    <li><a href="<?php echo e(url('/mahasiswa/detailanggota')); ?>"><i class="fa fa-edit"></i>Detail Anggota</a></li>
                        <!-- Href menuju ke url mahasiswa/kemahasiswaan/prestasi -->
                        <li><a href="<?php echo e(url('/mahasiswa/prestasi')); ?>"><i class="fa fa-edit"></i> Prestasi</a></li>
                <!-- $page nya sesuaiin sama yang di controller -->
            <li
            <?php if($page == 'biodata'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
                <a href="<?php echo e(url('/mahasiswa/akun')); ?>"><i class="fa fa-book"></i> Akun Mahasiswa</a>
            </li>
                  
                </ul>
            </li>
             
>>>>>>> 811ff23a5082ee82c748905620869fcc9fb7e65f

            <!-- Modul Dosen -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Dosen</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

<<<<<<< HEAD
=======
            <li

            <?php if($page == 'pengmas'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            ><a href="<?php echo e(url('/dosen/pengmas')); ?>"><i class='fa fa-book'></i> <span> Pengabdian Masyarakat</span></a></li>

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

            <li><a href="<?php echo e(url('/dosen/pengmas/index')); ?>"><i class='fa fa-book'></i>Pengabdian Masyarakat</a></li>  
            <li><a href="<?php echo e(url('/dosen/jurnal/index')); ?>"><i class='fa fa-book'></i>Jurnal</a></li>  
            <li

            <?php if($page == 'sktugas'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('dosen/sktugas')); ?>"><i class='fa fa-book'></i> <span> Surat Tugas</span></a>
            </li>
            <li
            <?php if($page == 'jurnal'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            ><a href="<?php echo e(url('/dosen/jurnal')); ?>">Jurnal</a>
            </li>  
            <li><a href="<?php echo e(url('/dosen/sktugas/index')); ?>">SK Tugas</a></li>
            <li><a href="<?php echo e(url('/dosen/biodata/index')); ?>">Biodata</a></li>
>>>>>>> 811ff23a5082ee82c748905620869fcc9fb7e65f
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
<<<<<<< HEAD
>>>>>>> e70533c973b5d483bf0cfa9919751e4a9bbb5ee5

            <li
            <?php if($page == 'biodata'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('kurikulum/kodecpmatkul')); ?>"><i class='fa fa-book'></i> <span> Kode CP Matkul</span></a>
            </li>

<<<<<<< HEAD
=======
=======

>>>>>>> 77af1278244e14d96346cf660240e4319ac363e3
>>>>>>> e70533c973b5d483bf0cfa9919751e4a9bbb5ee5
            <li
            <?php if($page == 'capaian-program'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url kurikulum/capaian-program -->
            <a href="<?php echo e(url('kurikulum/capaian-program')); ?>"><i class='fa fa-book'></i> <span> Capaian Program</span></a>

            <li
            <?php if($page == 'kategori-media-pembelajaran'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('kurikulum/kategori-media-pembelajaran')); ?>"><i class='fa fa-book'></i> <span>Kategori Media Pembelajaran</span></a>

            </li>

            <li 
            <?php if($page == 'prodi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            ><a href="<?php echo e(url('/kurikulum/prodi')); ?>"><i class='fa fa-book'></i> <span> Prodi</span></a></li>
            </li>
            <li>
            <a href="<?php echo e(url('/kurikulum/universitas')); ?>"><i class='fa fa-book'></i> <span> Universitas</span></a>
            </li>       
>>>>>>> 811ff23a5082ee82c748905620869fcc9fb7e65f
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
             <li
            <?php if($page == 'JadwalKuliah'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url notulensi/dosenrapat -->
            <a href="<?php echo e(url('krs-khs/JadwalKuliah')); ?>"><i class='fa fa-book'></i> <span>Jadwal Kuliah</span></a>
            </li>
            <li
            <?php if($page == 'JenisPenilaian'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url notulensi/dosenrapat -->
            <a href="<?php echo e(url('krs-khs/JenisPenilaian')); ?>"><i class='fa fa-book'></i> <span>JenisPenilaian</span></a>
            </li>

            <li
            <?php if($page == 'TahunAkademik'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url notulensi/dosenrapat -->
            <a href="<?php echo e(url('krs-khs/TahunAkademik')); ?>"><i class='fa fa-book'></i> <span>TahunAjaran</span></a>
            </li>
                        <li
            <?php if($page == 'khs'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url krs-khs/Khs -->
            <a href="<?php echo e(url('krs-khs/khs')); ?>"><i class='fa fa-book'></i> <span>Khs</span></a>
            </li>     
>>>>>>> 811ff23a5082ee82c748905620869fcc9fb7e65f
            </ul>
            </li>

            <!-- Modul Monitoring Skripsi -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
<<<<<<< HEAD

=======
            <li
            <?php if($page == 'skripsi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>>

            <a href="<?php echo e(url('monitoring-skripsi/skripsi')); ?>"><i class='fa fa-book'></i><span> Skripsi</span></a>
            </li>

<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 77af1278244e14d96346cf660240e4319ac363e3
>>>>>>> e70533c973b5d483bf0cfa9919751e4a9bbb5ee5
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
                <?php if($page == 'dosen_penguji'): ?>
                <?php echo 'class="active"'; ?>

                <?php endif; ?>
                >

                <a href="<?php echo e(url('monitoring-skripsi/index-dosen-penguji')); ?>"><i class='fa fa-book'></i><span>Dosen Penguji </span></a>
            </li>

            <li
            <?php if($page == 'konsultasi'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <a href="<?php echo e(url('monitoring-skripsi/konsultasi')); ?>"><i class='fa fa-book'></i>
            <span>Konsultasi</span></a>
            </li>
>>>>>>> 811ff23a5082ee82c748905620869fcc9fb7e65f
            </ul>
            </li>

            <!-- Modul Notulensi -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Notulensi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

<<<<<<< HEAD
            </ul>
            </li>

=======
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


>>>>>>> 811ff23a5082ee82c748905620869fcc9fb7e65f
            <!-- Modul Pengelolaan Kegiatan -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Pengelolaan Kegiatan</span></a>
            <ul class="treeview-menu">
<<<<<<< HEAD
            <!-- Sidebarnya ditaruh dibawah sini -->

=======
                <li><a href="<?php echo e(url('/kegiatan/dokumentasi')); ?>">Dokumentasi</a></li>
                <li><a href="<?php echo e(url('/pengelolaan-kegiatan/uploadDokumentasi')); ?>">Upload</a></li>
            <!-- Sidebarnya ditaruh dibawah sini -->
            <!-- $page nya sesuaiin sama yang di controller -->
<<<<<<< HEAD
            <li
            <?php if($page == 'rincian_dana'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('pengelolaan-kegiatan/rincian_dana')); ?>"><i class='fa fa-book'></i> <span>Rincian Dana</span></a>
            </li>       
=======
<<<<<<< HEAD

            <!-- Sidebar Biodata -->
            <!-- $page nya sesuaiin sama yang di controller -->
            <li
            <?php if($page == 'pengajuan'): ?>
            <?php echo 'class="active"'; ?>

=======

            <!-- Sidebar Biodata -->
            <!-- $page nya sesuaiin sama yang di controller -->
>>>>>>> e70533c973b5d483bf0cfa9919751e4a9bbb5ee5
            <li
            <?php if($page == 'pengajuan'): ?>
            <?php echo 'class="active"'; ?>

<<<<<<< HEAD
=======
>>>>>>> 77af1278244e14d96346cf660240e4319ac363e3
>>>>>>> e70533c973b5d483bf0cfa9919751e4a9bbb5ee5
            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->

            <a href="<?php echo e(url('pengelolaan-kegiatan/rundown')); ?>"><i class='fa fa-book'></i> <span> Rundown</span></a>
            </li>

<<<<<<< HEAD

=======
>>>>>>> e70533c973b5d483bf0cfa9919751e4a9bbb5ee5
            <a href="<?php echo e(url('pengelolaan-kegiatan/pengajuan')); ?>"><i class='fa fa-book'></i> <span> Pengajuan Kegiatan</span></a>
            </li>        
>>>>>>> 811ff23a5082ee82c748905620869fcc9fb7e65f
            </ul>
            </li>

            <!-- Modul PLA -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> PLA</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
            <li
<<<<<<< HEAD
                <?php if($page == 'suratkeluar'): ?>
=======
            <?php if($page == 'surat_mhs'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('pla/PermohonanSuratMhs')); ?>"><i class='fa fa-book'></i> <span> Permohonan Surat Mhs</span></a>
            </li> 
                <li
                <?php if($page == 'jadwal-permohonan'): ?>
>>>>>>> 811ff23a5082ee82c748905620869fcc9fb7e65f
                <?php echo 'class="active"'; ?>

                <?php endif; ?>
                >
<<<<<<< HEAD
            <!-- Href menuju ke url krs-khs/ruang/view -->
                <a href="<?php echo e(url('pla/surat-keluar-mhs')); ?>"><i class='fa fa-book'></i> <span> Surat Keluar Mahasiswa</span></a>
                </li>
=======
            <!-- Href menuju ke url pla/jadwal-permohonan-ruangan/view -->
                <a href="<?php echo e(url('pla/jadwal-permohonan/view')); ?>"><i class='fa fa-book'></i> <span>Jadwal Permohonan</span></a>
<<<<<<< HEAD
                </li>
=======
                </li>    
<<<<<<< HEAD
=======


>>>>>>> 77af1278244e14d96346cf660240e4319ac363e3
>>>>>>> e70533c973b5d483bf0cfa9919751e4a9bbb5ee5
            <li
                <?php if($page == 'suratmasuk'): ?>
                <?php echo 'class="active"'; ?>

                <?php endif; ?>
                >
            <!-- Href menuju ke url -->
                <a href="<?php echo e(url('pla/surat-masuk')); ?>"><i class='fa fa-book'></i> <span> Surat Masuk</span></a>
                </li>   
            <!-- Sidebarnya ditaruh dibawah sini -->
            <li
            <?php if($page == 'PermohonanRuang'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="<?php echo e(url('pla/PermohonanRuang')); ?>"><i class='fa fa-book'></i> <span> Permohonan Ruang</span></a>
            </li>  
>>>>>>> 811ff23a5082ee82c748905620869fcc9fb7e65f
            </ul>
            </li>

            <!-- Modul Inventaris -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Inventaris</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
<<<<<<< HEAD
=======

            <!-- Sidebarnya Asset -->
            <li
            <?php if($page == 'asset'): ?>
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
            <!-- Href menuju ke url inventaris/asset -->
            <a href="<?php echo e(url('inventaris/asset')); ?>"><i class='fa fa-book'></i> <span> Asset</span></a>
            </li>        

>>>>>>> 811ff23a5082ee82c748905620869fcc9fb7e65f
                <li><a href="<?php echo e(url('/index-asset')); ?>">all asset</a></li>
                <li><a href="<?php echo e(url('/inventaris/index-peminjaman')); ?>">peminjaman</a></li>
                <li><a href="<?php echo e(url('/index-maintenance')); ?>">maintenance</a></li>
            </ul>
            </li>
<<<<<<< HEAD
=======

            
>>>>>>> 811ff23a5082ee82c748905620869fcc9fb7e65f
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>