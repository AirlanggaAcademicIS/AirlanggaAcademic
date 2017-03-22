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
        <form action="#" method="get" class="sidebar-form">
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
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

>>>>>>> a3c3e3b59215f3cd3255e10b8ab596151be1ebab
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
            <li class="active"><a href="<?php echo e(url('home')); ?>"><i class='fa fa-link'></i> <span><?php echo e(trans('adminlte_lang::message.home')); ?></span></a></li>

            <!-- Sidebar Modul Kurikulum -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Kurikulum</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
                    <li><a href="#">RPS</a></li>
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    <li><a href="#">Mata Kuliah</a></li>
=======
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
                    <li><a href="#">Silabus</a></li>
                    <li><a href="#">Capaian Program</a></li>
                    <li><a href="#">Capaian Pembelajaran</a></li>
                    <li><a href="#">E-Learning</a></li>
                    <li><a href="<?php echo e(url('kurikulum/kode/cpmatkul')); ?>">Manage Kode CP Mata Kuliah</a></li>
                    <li><a href="<?php echo e(url('kurikulum/kode/cplprodi')); ?>">Manage Kode CP Prodi</a></li>
                    <li><a href="#">Manage Mata Kuliah</a></li>
<<<<<<< HEAD
=======
>>>>>>> a3c3e3b59215f3cd3255e10b8ab596151be1ebab
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
                </ul>
            </li>
            <!-- Sidebar Modul Dosen -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Dosen</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    <li><a href="<?php echo e(url('/dosen/penelitian')); ?>">Biodata</a></li>
                    <li><a href="#">Penelitian</a></li>
=======
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb

                    <li><a href="<?php echo e(url('/dosen/laporan/laporan')); ?>">Laporan Kinerja Dosen</a></l
        
                    <li><a href="<?php echo e(url('/dosen/pengmas/pengmas')); ?>">Pengabdian Masyarakat</a></li>
                    <li><a href="<?php echo e(url('/dosen/konferensi/konferensi')); ?>">Konferensi</a></li>
                    <li><a href="<?php echo e(url('/dosen/penelitian/penelitian')); ?>">Penelitian</a></li>                 
               <li><a href="<?php echo e(url('/dosen/jurnal/')); ?>">Jurnal</a></li>                    

<<<<<<< HEAD
=======
>>>>>>> a3c3e3b59215f3cd3255e10b8ab596151be1ebab
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
                </ul>
            </li>
            <!-- Sidebar Modul Mahasiswa -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Mahasiswa</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    <li><a href="#">Fitur</a></li>
=======
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
                    <li><a href="<?php echo e(url('/mahasiswa/input/')); ?>">Input Biodata</a></li>
                    <li><a href="<?php echo e(url('/mahasiswa/view/')); ?>">View Biodata</a></li>
                    <li><a href="<?php echo e(url('/karyawan')); ?>">Karyawan</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Kemahasiswaan
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo e(url('/mahasiswa/penelitian')); ?>"><i class="fa fa-circle-o"></i> Penelitian</a></li>
                            </ul>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Prestasi</a></li>
                            </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Biodata</a></li>
                    <li>
                        <a href="<?php echo e(url('/karyawan')); ?>"><i class="fa fa-circle-o"></i> Karyawan
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Verifikasi
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                        <ul class="treeview-menu">
                                            <li><a href="#"><i class="fa fa-circle-o"></i> Penelitian</a></li>
                                        </ul>
                                        <ul class="treeview-menu">
                                            <li><a href="#"><i class="fa fa-circle-o"></i> Penelitian</a></li>
                                        </ul>
                                        <ul class="treeview-menu">
                                            <li><a href="#"><i class="fa fa-circle-o"></i> Prestasi</a></li>
                                        </ul>
                                </li>
                            </ul>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Create Account</a></li>
                            </ul>
                    </li>

                    <li><a href="<?php echo e(url('/mahasiswa/prestasi')); ?>">Prestasi</a></li>
                   
<<<<<<< HEAD
=======
>>>>>>> a3c3e3b59215f3cd3255e10b8ab596151be1ebab
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
                </ul>
            </li>

            <!-- Sidebar Modul KRS & KHS -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>KRS & KHS</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    <li><a href="#">Fitur</a></li>
=======
<<<<<<< HEAD
                    <li><a href="<?php echo e(url('/krs-khs/nilai')); ?>">Nilai</a></li>
                    <li><a href="#">KRS</a></li>
                    <li><a href="#">KHS</a></li>
=======
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
                    <li><a href="<?php echo e(url('/krs-khs/mk')); ?>">Mata Kuliah</a></li>
                    <li><a href="<?php echo e(url('/krs-khs/dosen_mk')); ?>">MK Diajar</a></li>
                    <li><a href="<?php echo e(url('/krs-khs/input_jadwal')); ?>">input jadwal</a></li>
                    <li><a href="<?php echo e(url('/krs-khs/input_ruang')); ?>">input ruang kelas</a></li>
                    <li><a href="<?php echo e(url('/krs-khs/input_nilai')); ?>">input nilai</a></li>
                    <li><a href="<?php echo e(url('/approve1')); ?>">Approve KRS</a></li>
                    <li><a href="<?php echo e(url('/buka')); ?>">Buka KRS</a></li>
                    <li><a href="<?php echo e(url('krs-khs/form_khs')); ?>">KHS</a></li>
                    <li><a href="<?php echo e(url('krs-khs/histori_nilai')); ?>">Histori Nilai</a></li>
                    <li><a href="<?php echo e(url('/krs-khs/krs')); ?>">Kartu Rencana Studi</a></li>
<<<<<<< HEAD
=======
                    <li><a href="#">Fitur</a></li>
>>>>>>> a9d03f52c70ddadc5c71b33fec90f9c43fe34791
>>>>>>> a3c3e3b59215f3cd3255e10b8ab596151be1ebab
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
                </ul>
            </li>

            <!-- Sidebar Modul Pengelolaan Kegiatan -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Pengelolaan Kegiatan</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
<<<<<<< HEAD
                    <li><a href="<?php echo e(url('/kegiatan/inputkalender')); ?>">Input Kalender</a></li>
                     <li><a href="<?php echo e(url('/kegiatan/kalender')); ?>">Kalender Kegiatan</a></li>
                    <li><a href="<?php echo e(url('kegiatan/input_lpj')); ?>">Input Laporan Kegiatan</a></li>
=======
<<<<<<< HEAD
                    <li><a href="<?php echo e(url('/kegiatan/viewlpj')); ?>">Berita Acara</a></li>
                    <li><a href="<?php echo e(url('/kegiatan/adminview')); ?>">Admin Berita Acara</a></li>
=======
<<<<<<< HEAD
                    <li><a href="<?php echo e(url('/kegiatan/inputkalender')); ?>">Input Kalender</a></li>
                     <li><a href="<?php echo e(url('/kegiatan/kalender')); ?>">Kalender Kegiatan</a></li>
=======
<<<<<<< HEAD
                    <li><a href="<?php echo e(url('kegiatan/input_lpj')); ?>">Input Laporan Kegiatan</a></li>
=======
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
                    <li><a href="<?php echo e(url('/kegiatan/publikasi')); ?>">Publikasi</a></li>
                <li><a href="<?php echo e(url('/kegiatan/pengajuan_kegiatan')); ?>">Pengajuan Kegiatan</a></li>
                <li><a href="<?php echo e(url('/kegiatan/admin')); ?>">Admin Kegiatan</a></li>
                    <li><a href="<?php echo e(url('kegiatan/dokumentasi')); ?>">Dokumentasi</a></li>
                    <li><a href="<?php echo e(url('kegiatan/input')); ?>">Input TU</a></li>
<<<<<<< HEAD
=======
>>>>>>> 7f52ac8ca7d33e5afdb8da0d5f0e3253a17f2f3f
>>>>>>> 4bf6935348f49df39706586260909904e0b72e73
>>>>>>> a3c3e3b59215f3cd3255e10b8ab596151be1ebab
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
                </ul>
            </li>

            <!-- Sidebar Modul Layanan Akademik -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Layanan Akademik</span>
                <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
<<<<<<< HEAD
                    <li><a href="<?php echo e(url('pla/permohonan_ruang')); ?>">Konfirmasi Ruangan</a></li>
                    <li><a href="<?php echo e(url('/pla/konfirmasiproposal')); ?>">Konfirmasi Proposal</a></li>
                    <li><a href="<?php echo e(url('/pla/konfirmasiskripsi')); ?>">Konfirmasi Skripsi</a></li>
                    <li><a href="<?php echo e(url('pla/permohonansurat')); ?>">Surat Menyurat</a></li>z
=======
<<<<<<< HEAD
                    <li><a href="#">Fitur</a></li>
=======
<<<<<<< HEAD
                    <li><a href="#">Fitur</a></li>                    
=======
<<<<<<< HEAD
                    <li><a href="<?php echo e(url('pla/permohonan_ruang')); ?>">Konfirmasi Ruangan</a></li>
                  
=======
<<<<<<< HEAD
                    <li><a href="#">Fitur</a></li>
                    <li><a href="<?php echo e(url('/pla/konfirmasiproposal')); ?>">Konfirmasi Proposal</a></li>
                    <li><a href="<?php echo e(url('/pla/konfirmasiskripsi')); ?>">Konfirmasi Skripsi</a></li>
=======

                    <li><a href="<?php echo e(url('pla/permohonansurat')); ?>">Surat Menyurat</a></li>
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb

                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i>Permohonan Ruangan
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="<?php echo e(url('/pla/permohonan_ruangan_admin')); ?>"><i class="fa fa-circle-o"></i> Admin TU</a></li>
                        <li><a href="<?php echo e(url('/pla/permohonan_ruangan_user')); ?>"><i class="fa fa-circle-o"></i> Dosen - Mahasiswa</a></li>
                      </ul>
                    </li>
                    
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i>Pengumpulan Proposal/Skripsi
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Admin TU</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Dosen - Mahasiswa</a></li>
                      </ul>
                    </li>

                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i>Surat Menyurat
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Admin TU</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Dosen - Mahasiswa</a></li>
                      </ul>
                    </li>
<<<<<<< HEAD
=======


>>>>>>> a9d03f52c70ddadc5c71b33fec90f9c43fe34791
>>>>>>> ea460daeeda422e18a31366bb8d01a7a2df359fd
>>>>>>> 7f52ac8ca7d33e5afdb8da0d5f0e3253a17f2f3f
>>>>>>> a3c3e3b59215f3cd3255e10b8ab596151be1ebab
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
                </ul>
            </li>

            <!-- Sidebar Modul Inventaris -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Inventaris</span>
                <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
<<<<<<< HEAD
                    <li><a href="<?php echo e(url('/view-asset')); ?>">all asset</a></li>
                    <li><a href="<?php echo e(url('/index-peminjaman')); ?>">peminjaman</a></li>
                    <li><a href="<?php echo e(url('/index-maintenance')); ?>">maintenance</a></li>
=======
<<<<<<< HEAD
                    <li><a href="#">Fitur</a></li>
=======
                    <li><a href="<?php echo e(url('/view-asset')); ?>">all asset</a></li>
                    <li><a href="<?php echo e(url('/index-peminjaman')); ?>">peminjaman</a></li>
                    <li><a href="<?php echo e(url('/index-maintenance')); ?>">maintenance</a></li>
>>>>>>> a3c3e3b59215f3cd3255e10b8ab596151be1ebab
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
                </ul>
            </li>

            <!-- Sidebar Modul Notulen -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Notulen</span>
                <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    <!-- Tulis disini fiturnya -->
                    <li><a href="#">Fitur</a></li>
=======
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
                <li><a href="#">Undangan</a></li>
                <li><a href="#">Kehadiran</a></li>
                <li><a href="<?php echo e(url('notulensi/notulensi/ViewDaftarHasil')); ?>">Notulensi TU </a></li>
                <li><a href="#">Kalender</a></li>

                    <!-- Tulis disini fiturnya -->
<<<<<<< HEAD
                    <li><a href="<?php echo e(url('notulensi/undangan/daftarRapat')); ?>">Undangan</a></li>
                    <li><a href="<?php echo e(url('notulensi/kehadiranRapat/kehadiran')); ?>">Kehadiran Rapat</a></li>
                    <li><a href="#">Notulensi Rapat</a></li>
                    <li><a href="<?php echo e(url('notulensi/kalender/calendar')); ?>">Kalender</a></li>
                    <li><a href="<?php echo e(url('notulensi/daftarnotulensi')); ?>">Notulensi Rapat</a></li>
                    <li><a href="<?php echo e(url('notulensi/formnotulensi')); ?>">Form Notulensi</a></li>
                    <li><a href="<?php echo e(url('notulensi/kirimnotulensi')); ?>">Kirim Notulensi</a></li>
=======
                    <li><a href="<?php echo e(url('notulensi/daftarnotulensi')); ?>">Notulensi Rapat</a></li>
                    <li><a href="<?php echo e(url('notulensi/formnotulensi')); ?>">Form Notulensi</a></li>
                    <li><a href="<?php echo e(url('notulensi/kirimnotulensi')); ?>">Kirim Notulensi</a></li>
>>>>>>> a3c3e3b59215f3cd3255e10b8ab596151be1ebab
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
                </ul>
            </li>

            <!-- Sidebar Modul Monitoring Skripsi -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Monitoring Skripsi</span>
                <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    <li><a href="#">Fitur</a></li>
                </ul>
            </li>

=======
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb

                    <li>
              <a href="#"><i class="fa fa-circle-o"></i> Informasi Proposal - Skripsi
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo e(url('monsi/tabel-mhs')); ?>"><i class="fa fa-circle-o"></i> Admin TU</a></li>
                <li><a href="<?php echo e(url('monsi/tabel-mhs2')); ?>"><i class="fa fa-circle-o"></i> Dosen - Mahasiswa</a></li>
              </ul>
            </li>

             <li>
              <a href="#"><i class="fa fa-circle-o"></i> Bimbingan Proposal - Skripsi
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo e(url('monsi/upload-bimbingan')); ?>"><i class="fa fa-circle-o"></i> Dosen</a></li>
                <li><a href="<?php echo e(url('monsi/view-bimbingan')); ?>"><i class="fa fa-circle-o"></i> Mahasiswa</a></li>
              </ul>
            </li>

            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Sidang Proposal - Skripsi
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Admin TU</a>
                <ul class="treeview-menu">
                <li><a href="<?php echo e(url('/monsi/sidang_proposal')); ?>"><i class="fa fa-circle-o"></i> Sidang Proposal</a></li>
                <li><a href="<?php echo e(url('/monsi/sidang_skripsi')); ?>"><i class="fa fa-circle-o"></i> Sidang Skripsi</a></li>
              </ul></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Dosen</a>
                <ul class="treeview-menu">
                <li><a href="<?php echo e(url('/monsi/jadwal_sidang_proposal_dosen')); ?>"><i class="fa fa-circle-o"></i> Sidang Proposal</a></li>
                <li><a href="<?php echo e(url('/monsi/jadwal_sidang_skripsi_dosen')); ?>"><i class="fa fa-circle-o"></i> Sidang Skripsi</a></li>
              </ul></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Mahasiswa</a>
                <ul class="treeview-menu">
                <li><a href="<?php echo e(url('/monsi/jadwal_sidang_proposal_mhs')); ?>"><i class="fa fa-circle-o"></i> Sidang Proposal</a></li>
                <li><a href="<?php echo e(url('/monsi/jadwal_sidang_skripsi_mhs')); ?>"><i class="fa fa-circle-o"></i> Sidang Skripsi</a></li>
              </ul></li>
              </ul>
            </li>

            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Berkas Proposal - Skripsi
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo e(url('monsi/form_uploadproposal')); ?>"><i class="fa fa-circle-o"></i> Mahasiswa</a></li>
                <li><a href="<?php echo e(url('monsi/tabel_judul')); ?>"><i class="fa fa-circle-o"></i> Dosen - Admin TU</a></li>
              </ul>
            </li>
                </ul>
            </li>
    
            
                
<<<<<<< HEAD
=======
>>>>>>> a3c3e3b59215f3cd3255e10b8ab596151be1ebab
>>>>>>> 9d403da96f72b1370cbb9ece263217f3d0d353fb
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
