<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebkuar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('kurikulum/contoh') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>

            <!-- Sidebar Modul Kurikulum -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Kurikulum</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->

                    <li><a href="{{ url('kurikulum/rps') }}">RPS</a></li>
                    <li><a href="{{ url('kurikulum/silabus') }}">Silabus</a></li>
                    <li><a href="{{ url('kurikulum/cpbelajar') }}">Capaian Pembelajaran</a></li>
                    <li><a href="{{ url('kurikulum/cpprogram') }}">Capaian Program</a></li>
                    <li><a href="{{ url('kurikulum/elearning') }}">E-Learning</a></li>
                    <li><a href="{{ url('kurikulum/kode/cpmatkul') }}">Manage Kode CP Mata Kuliah</a></li>
                    <li><a href="{{ url('kurikulum/kode/cplprodi') }}">Manage Kode CP Prodi</a></li>
                    <li><a href="{{ url('kurikulum/kode/matkul') }}">Manage Mata Kuliah</a></li>

                </ul>
            </li>
            <!-- Sidebar Modul Dosen -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Dosen</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->

                    <li><a href="{{url('/dosen/laporan/laporan')}}">Laporan Kinerja Dosen</a></l
        
                    <li><a href="{{url('/dosen/pengmas/pengmas')}}">Pengabdian Masyarakat</a></li>
                    <li><a href="{{ url('/dosen/konferensi/konferensi') }}">Konferensi</a></li>
                    <li><a href="{{url('/dosen/penelitian/penelitian')}}">Penelitian</a></li>                 
               <li><a href="{{url('/dosen/jurnal/')}}">Jurnal</a></li>                    

                </ul>
            </li>
            <!-- Sidebar Modul Mahasiswa -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Mahasiswa</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
                    <li><a href="{{url('/mahasiswa/input/')}}">Input Biodata</a></li>
                    <li><a href="{{url('/mahasiswa/view/')}}">View Biodata</a></li>
                    <li><a href="{{url('/karyawan')}}">Karyawan</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Kemahasiswaan
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                            <ul class="treeview-menu">
                                <li><a href="{{url('/mahasiswa/penelitian')}}"><i class="fa fa-circle-o"></i> Penelitian</a></li>
                            </ul>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Prestasi</a></li>
                            </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Biodata</a></li>
                    <li>
                        <a href="{{url('/karyawan')}}"><i class="fa fa-circle-o"></i> Karyawan
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

                    <li><a href="{{url('/mahasiswa/prestasi')}}">Prestasi</a></li>
                   
                </ul>
            </li>

            <!-- Sidebar Modul KRS & KHS -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>KRS & KHS</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
                    <li><a href="{{url('/krs-khs/nilai')}}">Nilai</a></li>
                    <li><a href="#">KRS</a></li>
                    <li><a href="#">KHS</a></li>

                    <li><a href="{{url('/krs-khs/mk')}}">Mata Kuliah</a></li>
                    <li><a href="{{url('/krs-khs/dosen_mk')}}">MK Diajar</a></li>
                    <li><a href="{{url('/krs-khs/input_jadwal')}}">input jadwal</a></li>
                    <li><a href="{{url('/krs-khs/input_ruang')}}">input ruang kelas</a></li>
                    <li><a href="{{url('/krs-khs/input_nilai')}}">input nilai</a></li>
                    <li><a href="{{url('/approve1')}}">Approve KRS</a></li>
                    <li><a href="{{url('/buka')}}">Buka KRS</a></li>
                    <li><a href="{{ url('krs-khs/form_khs') }}">KHS</a></li>
                    <li><a href="{{ url('krs-khs/histori_nilai') }}">Histori Nilai</a></li>
                    <li><a href="{{url('/krs-khs/krs')}}">Kartu Rencana Studi</a></li>
                    <li><a href="#">Fitur</a></li>





                    <li><a href="{{ url('krs-khs/krs') }}">KRS</a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('krs-khs/krs') }}">Lihat KRS</a></li>
                            <li><a href="{{ url('krs-khs/krs/pilih') }}">Pilih KRS</a></li>
                            <li><a href="#">Jadwal</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ url('krs-khs/khs') }}">KHS</a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('krs-khs/khs') }}">Lihat KHS</a></li>
                            <li><a href="{{ url('krs-khs/khs/histori_nilai') }}">History Nilai</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('krs-khs/dosen') }}">Dosen</a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('krs-khs/dosen') }}">MK Diajar</a></li>
                            <li><a href="{{ url('krs-khs/dosen/input_dosen_mk') }}">Input Dosen MK</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('krs-khs/krs') }}">Perwalian</a></li>
                    <li><a href="{{ url('krs-khs/penjadwalan') }}">Penjadwalan</a>
                    </li>

                </ul>
            </li>

            <!-- Sidebar Modul Pengelolaan Kegiatan -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Pengelolaan Kegiatan</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
                    <li><a href="{{url('/kegiatan/inputkalender')}}">Input Kalender</a></li>
                     <li><a href="{{url('/kegiatan/kalender')}}">Kalender Kegiatan</a></li>

                    <li><a href="{{ url('kegiatan/input_lpj') }}">Input Laporan Kegiatan</a></li>


                    <li><a href="{{url('/kegiatan/viewlpj')}}">Berita Acara</a></li>
                    <li><a href="{{url('/kegiatan/adminview')}}">Admin Berita Acara</a></li>
                    <li><a href="{{url('/kegiatan/inputkalender')}}">Input Kalender</a></li>
                     <li><a href="{{url('/kegiatan/kalender')}}">Kalender Kegiatan</a></li>
                    <li><a href="{{ url('kegiatan/input_lpj') }}">Input Laporan Kegiatan</a></li>

                    <li><a href="{{url('/kegiatan/publikasi')}}">Publikasi</a></li>
                <li><a href="{{url('/kegiatan/pengajuan_kegiatan')}}">Pengajuan Kegiatan</a></li>
                <li><a href="{{url('/kegiatan/admin')}}">Admin Kegiatan</a></li>
                    <li><a href="{{ url('kegiatan/dokumentasi') }}">Dokumentasi</a></li>
                    <li><a href="{{ url('kegiatan/input') }}">Input TU</a></li>
                </ul>
            </li>

            <!-- Sidebar Modul Layanan Akademik -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Layanan Akademik</span>
                <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->


                    <li><a href="#">Fitur</a></li>                    

                    <li><a href="{{url('pla/permohonan_ruang')}}">Konfirmasi Ruangan</a></li>
                  

                    <li><a href="#">Fitur</a></li>
                    <li><a href="{{url('/pla/konfirmasiproposal')}}">Konfirmasi Proposal</a></li>
                    <li><a href="{{url('/pla/konfirmasiskripsi')}}">Konfirmasi Skripsi</a></li>


                    <li><a href="{{ url('pla/permohonansurat') }}">Surat Menyurat</a></li>



                    <li><a href="{{ url('pla/permohonansurat') }}">Surat Menyurat</a></li>

                    <li><a href="{{url('pla/permohonan_ruang')}}">Konfirmasi Ruangan</a></li>
                    <li><a href="{{url('/pla/konfirmasiproposal')}}">Konfirmasi Proposal</a></li>
                    <li><a href="{{url('/pla/konfirmasiskripsi')}}">Konfirmasi Skripsi</a></li>
                    <li><a href="{{ url('pla/permohonansurat') }}">Surat Menyurat</a></li>

                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i>Permohonan Ruangan

                    <li><a href="#"><i class="fa fa-circle-o"></i>Permohonan Ruangan</a></li>

                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="{{url('/pla/permohonan_ruangan_admin')}}"><i class="fa fa-circle-o"></i> Admin TU</a></li>
                        <li><a href="{{url('/pla/permohonan_ruangan_user')}}"><i class="fa fa-circle-o"></i> Dosen - Mahasiswa</a></li>
                      </ul>
                    </li>
                    
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i>Pengumpulan Proposal/Skripsi
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="{{url('/pla/konfirmasiproposal')}}"><i class="fa fa-circle-o"></i>Proposa; (Admin TU)</a></li>
                        <li><a href="{{url('/pla/konfirmasiskripsi')}}"><i class="fa fa-circle-o"></i>Skripsi (Admin TU)</a></li>
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
                        <li><a href="{{ url('pla/peringatansurat') }}"><i class="fa fa-circle-o"></i> Admin TU</a></li>
                        <li><a href="{{ url('pla/permohonansurat') }}"><i class="fa fa-circle-o"></i> Dosen - Mahasiswa</a></li>
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
                    <li><a href="{{ url('/index-asset')}}">all asset</a></li>
                    <li><a href="{{url('/index-peminjaman')}}">peminjaman</a></li>
                    <li><a href="{{url('/index-maintenance')}}">maintenance</a></li>
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
                <li><a href="{{url('notulensi/undangan/daftarRapat')}}"><i class="fa fa-circle-o"></i>TU</a></li>
                <li><a href="{{url('notulensi/undangan/undanganDosen')}}"><i class="fa fa-circle-o"></i>Dosen</a></li>
              </ul>
                <li>
              <a href="{{url('notulensi/kehadiranRapat')}}"><i class="fa fa-circle-o"></i> Kehadiran Rapat
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
                <li><a href="{{ url('monsi/tabel-mhs') }}"><i class="fa fa-circle-o"></i> Admin TU</a></li>
                <li><a href="{{ url('monsi/tabel-mhs2') }}"><i class="fa fa-circle-o"></i> Dosen - Mahasiswa</a></li>
              </ul>
            </li>

             <li>
              <a href="#"><i class="fa fa-circle-o"></i> Bimbingan Proposal - Skripsi
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('monsi/upload-bimbingan') }}"><i class="fa fa-circle-o"></i> Dosen</a></li>
                <li><a href="{{ url('monsi/view-bimbingan') }}"><i class="fa fa-circle-o"></i> Mahasiswa</a></li>
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
                <li><a href="{{ url('monsi/upload-bimbingan') }}"><i class="fa fa-circle-o"></i> Dosen</a></li>
                <li><a href="{{ url('monsi/view-bimbingan') }}"><i class="fa fa-circle-o"></i> Mahasiswa</a></li>
              </ul>
            </li>

             <li>
              <a href="#"><i class="fa fa-circle-o"></i> Hasil Sidang Proposal - Skripsi
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('#') }}"><i class="fa fa-circle-o"></i> Admin TU</a>
                <ul class="treeview-menu">
                 <li><a href="{{ url('monsi/upload_hasil_sidang_proposal') }}"><i class="fa fa-circle-o"></i>Upload Hasil Sidang Proposal</a></li>
                  <li><a href="{{ url('monsi/upload_hasil_sidang_skripsi') }}"><i class="fa fa-circle-o"></i>Upload Hasil Sidang Skripsi</a></li>
                </ul>
                </li>
                <li><a href="{{ url('monsi/lihat_hasil_sidang') }}"><i class="fa fa-circle-o"></i> Mahasiswa</a></li>
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
                <li><a href="{{ url('monsi/sidang-proposal') }}"><i class="fa fa-circle-o"></i> Sidang Proposal</a></li>
                <li><a href="{{ url('monsi/sidang-skripsi') }}"><i class="fa fa-circle-o"></i> Sidang Skripsi</a></li>
              </ul></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Dosen</a>
                <ul class="treeview-menu">
                <li><a href="{{ url('monsi/jadwal-sidang-proposal-dosen') }}"><i class="fa fa-circle-o"></i> Sidang Proposal</a></li>
                <li><a href="{{ url('monsi/jadwal-sidang-skripsi-dosen') }}"><i class="fa fa-circle-o"></i> Sidang Skripsi</a></li>
              </ul></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Mahasiswa</a>
                <ul class="treeview-menu">
                <li><a href="{{ url('monsi/jadwal-sidang-proposal-mhs') }}"><i class="fa fa-circle-o"></i> Sidang Proposal</a></li>
                <li><a href="{{ url('monsi/jadwal-sidang-skripsi-mhs') }}"><i class="fa fa-circle-o"></i> Sidang Skripsi</a></li>
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
                <li><a href="{{ url('monsi/form_uploadproposal') }}"><i class="fa fa-circle-o"></i> Mahasiswa</a></li>
                <li><a href="{{ url('monsi/tabel_judul') }}"><i class="fa fa-circle-o"></i> Dosen - Admin TU</a></li>
              </ul>
            </li>
                </ul>
            </li>
    
            
                
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
