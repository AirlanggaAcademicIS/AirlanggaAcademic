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
            <li class="active"><a href="<?php echo e(url('kurikulum/contoh')); ?>"><i class='fa fa-link'></i> <span><?php echo e(trans('adminlte_lang::message.home')); ?></span></a></li>
            <li class="active"><a href="<?php echo e(url('home')); ?>"><i class='fa fa-link'></i> <span><?php echo e(trans('adminlte_lang::message.home')); ?></span></a></li>

            <!-- Sidebar Modul Kurikulum -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Kurikulum</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->

                    <li><a href="<?php echo e(url('kurikulum/rps')); ?>">RPS</a></li>
                    <li><a href="<?php echo e(url('kurikulum/silabus')); ?>">Silabus</a></li>
                    <li><a href="<?php echo e(url('kurikulum/cpbelajar')); ?>">Capaian Pembelajaran</a></li>
                    <li><a href="<?php echo e(url('kurikulum/cpprogram')); ?>">Capaian Program</a></li>
                    <li><a href="<?php echo e(url('kurikulum/elearning')); ?>">E-Learning</a></li>
                    <li><a href="<?php echo e(url('kurikulum/kode/cpmatkul')); ?>">Manage Kode CP Mata Kuliah</a></li>
                    <li><a href="<?php echo e(url('kurikulum/kode/cplprodi')); ?>">Manage Kode CP Prodi</a></li>
                    <li><a href="<?php echo e(url('kurikulum/kode/matkul')); ?>">Manage Mata Kuliah</a></li>

                </ul>
            </li>
            <!-- Sidebar Modul Dosen -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Dosen</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->

                    <li><a href="<?php echo e(url('/dosen/laporan/laporan')); ?>">Laporan Kinerja Dosen</a></l
        
                    <li><a href="<?php echo e(url('/dosen/pengmas/pengmas')); ?>">Pengabdian Masyarakat</a></li>
                    <li><a href="<?php echo e(url('/dosen/konferensi/konferensi')); ?>">Konferensi</a></li>
                    <li><a href="<?php echo e(url('/dosen/penelitian/penelitian')); ?>">Penelitian</a></li>                 
               <li><a href="<?php echo e(url('/dosen/jurnal/')); ?>">Jurnal</a></li>                    

                </ul>
            </li>
            <!-- Sidebar Modul Mahasiswa -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Mahasiswa</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
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
                   
                </ul>
            </li>

            <!-- Sidebar Modul KRS & KHS -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>KRS & KHS</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
                    <li><a href="<?php echo e(url('/krs-khs/nilai')); ?>">Nilai</a></li>
                    <li><a href="#">KRS</a></li>
                    <li><a href="#">KHS</a></li>

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
                    <li><a href="#">Fitur</a></li>





                    <li><a href="<?php echo e(url('krs-khs/krs')); ?>">KRS</a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo e(url('krs-khs/krs')); ?>">Lihat KRS</a></li>
                            <li><a href="<?php echo e(url('krs-khs/krs/pilih')); ?>">Pilih KRS</a></li>
                            <li><a href="#">Jadwal</a></li>
                        </ul>
                    </li>

                    <li><a href="<?php echo e(url('krs-khs/khs')); ?>">KHS</a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo e(url('krs-khs/khs')); ?>">Lihat KHS</a></li>
                            <li><a href="<?php echo e(url('krs-khs/khs/histori_nilai')); ?>">History Nilai</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo e(url('krs-khs/dosen')); ?>">Dosen</a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo e(url('krs-khs/dosen')); ?>">MK Diajar</a></li>
                            <li><a href="<?php echo e(url('krs-khs/dosen/input_dosen_mk')); ?>">Input Dosen MK</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo e(url('krs-khs/krs')); ?>">Perwalian</a></li>
                    <li><a href="<?php echo e(url('krs-khs/penjadwalan')); ?>">Penjadwalan</a>
                    </li>

                </ul>
            </li>

            <!-- Sidebar Modul Pengelolaan Kegiatan -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Pengelolaan Kegiatan</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
                    <li><a href="<?php echo e(url('/kegiatan/inputkalender')); ?>">Input Kalender</a></li>
                     <li><a href="<?php echo e(url('/kegiatan/kalender')); ?>">Kalender Kegiatan</a></li>

                    <li><a href="<?php echo e(url('kegiatan/input_lpj')); ?>">Input Laporan Kegiatan</a></li>


                    <li><a href="<?php echo e(url('/kegiatan/viewlpj')); ?>">Berita Acara</a></li>
                    <li><a href="<?php echo e(url('/kegiatan/adminview')); ?>">Admin Berita Acara</a></li>
                    <li><a href="<?php echo e(url('/kegiatan/inputkalender')); ?>">Input Kalender</a></li>
                     <li><a href="<?php echo e(url('/kegiatan/kalender')); ?>">Kalender Kegiatan</a></li>
                    <li><a href="<?php echo e(url('kegiatan/input_lpj')); ?>">Input Laporan Kegiatan</a></li>

                    <li><a href="<?php echo e(url('/kegiatan/publikasi')); ?>">Publikasi</a></li>
                <li><a href="<?php echo e(url('/kegiatan/pengajuan_kegiatan')); ?>">Pengajuan Kegiatan</a></li>
                <li><a href="<?php echo e(url('/kegiatan/admin')); ?>">Admin Kegiatan</a></li>
                    <li><a href="<?php echo e(url('kegiatan/dokumentasi')); ?>">Dokumentasi</a></li>
                    <li><a href="<?php echo e(url('kegiatan/input')); ?>">Input TU</a></li>
                </ul>
            </li>

            <!-- Sidebar Modul Layanan Akademik -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Layanan Akademik</span>
                <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->


                    <li><a href="#">Fitur</a></li>                    

                    <li><a href="<?php echo e(url('pla/permohonan_ruang')); ?>">Konfirmasi Ruangan</a></li>
                  

                    <li><a href="#">Fitur</a></li>
                    <li><a href="<?php echo e(url('/pla/konfirmasiproposal')); ?>">Konfirmasi Proposal</a></li>
                    <li><a href="<?php echo e(url('/pla/konfirmasiskripsi')); ?>">Konfirmasi Skripsi</a></li>


                    <li><a href="<?php echo e(url('pla/permohonansurat')); ?>">Surat Menyurat</a></li>



                    <li><a href="<?php echo e(url('pla/permohonansurat')); ?>">Surat Menyurat</a></li>

                    <li><a href="<?php echo e(url('pla/permohonan_ruang')); ?>">Konfirmasi Ruangan</a></li>
                    <li><a href="<?php echo e(url('/pla/konfirmasiproposal')); ?>">Konfirmasi Proposal</a></li>
                    <li><a href="<?php echo e(url('/pla/konfirmasiskripsi')); ?>">Konfirmasi Skripsi</a></li>
                    <li><a href="<?php echo e(url('pla/permohonansurat')); ?>">Surat Menyurat</a></li>

                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i>Permohonan Ruangan

                    <li><a href="#"><i class="fa fa-circle-o"></i>Permohonan Ruangan</a></li>

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
                        <li><a href="<?php echo e(url('/pla/konfirmasiproposal')); ?>"><i class="fa fa-circle-o"></i>Proposa; (Admin TU)</a></li>
                        <li><a href="<?php echo e(url('/pla/konfirmasiskripsi')); ?>"><i class="fa fa-circle-o"></i>Skripsi (Admin TU)</a></li>
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
                        <li><a href="<?php echo e(url('pla/peringatansurat')); ?>"><i class="fa fa-circle-o"></i> Admin TU</a></li>
                        <li><a href="<?php echo e(url('pla/permohonansurat')); ?>"><i class="fa fa-circle-o"></i> Dosen - Mahasiswa</a></li>
                      </ul>
                    </li>






                </ul>
            </li>

            <!-- Sidebar Modul Inventaris -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Inventaris</span>
                <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
                    <li><a href="<?php echo e(url('/view-asset')); ?>">all asset</a></li>
                    <li><a href="<?php echo e(url('/index-peminjaman')); ?>">peminjaman</a></li>
                    <li><a href="<?php echo e(url('/index-maintenance')); ?>">maintenance</a></li>
                </ul>
            </li>

            <!-- Sidebar Modul Notulen -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Notulen</span>
                <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                   <li>
              <a href="#"><i class="fa fa-circle-o"></i> Undangan
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo e(url('notulensi/undangan/daftarRapat')); ?>"><i class="fa fa-circle-o"></i>TU</a></li>
                <li><a href="<?php echo e(url('notulensi/undangan/undanganDosen')); ?>"><i class="fa fa-circle-o"></i>Dosen</a></li>
              </ul>
                <li>
              <a href="<?php echo e(url('notulensi/kehadiranRapat')); ?>"><i class="fa fa-circle-o"></i> Kehadiran Rapat
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
            </li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Notulensi
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/notulensi/ViewDaftarHasil"><i class="fa fa-circle-o"></i>TU</a></li>
                <li><a href="/notulensi/daftarnotulensi"><i class="fa fa-circle-o"></i>Dosen</a></li>
              </ul>
            </li>
                <li>
              <a href="/notulensi/kalender"><i class="fa fa-circle-o"></i> Kalender
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
            </li>
                </ul>
            </li>

            <!-- Sidebar Modul Monitoring Skripsi -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Monitoring Skripsi</span>
                <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->

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
              <a href="#"><i class="fa fa-circle-o"></i> Hasil Sidang Proposal - Skripsi
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo e(url('#')); ?>"><i class="fa fa-circle-o"></i> Admin TU</a>
                <ul class="treeview-menu">
                 <li><a href="<?php echo e(url('monsi/upload_hasil_sidang_proposal')); ?>"><i class="fa fa-circle-o"></i>Upload Hasil Sidang Proposal</a></li>
                  <li><a href="<?php echo e(url('monsi/upload_hasil_sidang_skripsi')); ?>"><i class="fa fa-circle-o"></i>Upload Hasil Sidang Skripsi</a></li>
                </ul>
                </li>
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
    
            
                
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
