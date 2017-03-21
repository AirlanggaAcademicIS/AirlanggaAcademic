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
        <form action="#" method="get" class="sidebar-form">
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

            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>

            <!-- Sidebar Modul Kurikulum -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Kurikulum</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
                    <li><a href="#">RPS</a></li>
                    <li><a href="#">Silabus</a></li>
                    <li><a href="#">Capaian Program</a></li>
                    <li><a href="#">Capaian Pembelajaran</a></li>
                    <li><a href="#">E-Learning</a></li>
                    <li><a href="#">Manage Kode CP Mata Kuliah</a></li>
                    <li><a href="#">Manage Kode CP Prodi</a></li>
                    <li><a href="#">Manage Mata Kuliah</a></li>
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
                </ul>
            </li>

            <!-- Sidebar Modul Pengelolaan Kegiatan -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Pengelolaan Kegiatan</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
                    <li><a href="{{url('/kegiatan/viewlpj')}}">Berita Acara</a></li>
                    <li><a href="{{url('/kegiatan/adminview')}}">Admin Berita Acara</a></li>
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
                    <li><a href="{{url('pla/permohonan_ruang')}}">Konfirmasi Ruangan</a></li>
                    <li><a href="{{url('/pla/konfirmasiproposal')}}">Konfirmasi Proposal</a></li>
                    <li><a href="{{url('/pla/konfirmasiskripsi')}}">Konfirmasi Skripsi</a></li>
                    <li><a href="{{ url('pla/permohonansurat') }}">Surat Menyurat</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i>Permohonan Ruangan
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
                </ul>
            </li>

            <!-- Sidebar Modul Inventaris -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Inventaris</span>
                <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <!-- Tulis disini fiturnya -->
                    <li><a href="{{ url('/view-asset')}}">all asset</a></li>
                    <li><a href="{{url('/index-peminjaman')}}">peminjaman</a></li>
                    <li><a href="{{url('/index-maintenance')}}">maintenance</a></li>
                </ul>
            </li>

            <!-- Sidebar Modul Notulen -->
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Notulen</span>
                <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                <li><a href="#">Undangan</a></li>
                <li><a href="#">Kehadiran</a></li>
                <li><a href="{{ url('notulensi/notulensi/ViewDaftarHasil') }}">Notulensi TU </a></li>
                <li><a href="#">Kalender</a></li>

                    <!-- Tulis disini fiturnya -->
                    <li><a href="{{ url('notulensi/daftarnotulensi') }}">Notulensi Rapat</a></li>
                    <li><a href="{{ url('notulensi/formnotulensi') }}">Form Notulensi</a></li>
                    <li><a href="{{ url('notulensi/kirimnotulensi') }}">Kirim Notulensi</a></li>
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

            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Sidang Proposal - Skripsi
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Admin TU</a>
                <ul class="treeview-menu">
                <li><a href="{{ url('/monsi/sidang_proposal') }}"><i class="fa fa-circle-o"></i> Sidang Proposal</a></li>
                <li><a href="{{ url('/monsi/sidang_skripsi') }}"><i class="fa fa-circle-o"></i> Sidang Skripsi</a></li>
              </ul></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Dosen</a>
                <ul class="treeview-menu">
                <li><a href="{{ url('/monsi/jadwal_sidang_proposal_dosen') }}"><i class="fa fa-circle-o"></i> Sidang Proposal</a></li>
                <li><a href="{{ url('/monsi/jadwal_sidang_skripsi_dosen') }}"><i class="fa fa-circle-o"></i> Sidang Skripsi</a></li>
              </ul></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Mahasiswa</a>
                <ul class="treeview-menu">
                <li><a href="{{ url('/monsi/jadwal_sidang_proposal_mhs') }}"><i class="fa fa-circle-o"></i> Sidang Proposal</a></li>
                <li><a href="{{ url('/monsi/jadwal_sidang_skripsi_mhs') }}"><i class="fa fa-circle-o"></i> Sidang Skripsi</a></li>
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
