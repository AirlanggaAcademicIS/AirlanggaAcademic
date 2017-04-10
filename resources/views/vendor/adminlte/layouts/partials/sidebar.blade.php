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
            <li 
            @if($page == 'home')
            {!! 'class="active"'!!}
            @endif
            ><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            
            <!-- Modul Mahasiswa -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Mahasiswa</span></a>
            <ul class="treeview-menu">
            <!-- Sidebar Biodata -->
            <!-- $page nya sesuaiin sama yang di controller -->
            <li
            @if($page == 'biodata')
            {!! 'class="active"'!!}
            @endif
            >
                <a href="{{url('/mahasiswa/biodata')}}"><i class="fa fa-book"></i> Biodata</a>
            </li>
                        <!-- Href menuju ke url mahasiswa/kemahasiswaan/prestasi -->
                        <li><a href="{{url('/mahasiswa/prestasi')}}"><i class="fa fa-edit"></i> Prestasi</a></li>
                <!-- $page nya sesuaiin sama yang di controller -->
            <li
            @if($page == 'biodata')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="{{ url('mahasiswa/biodata') }}"><i class='fa fa-book'></i> <span> Biodata</span>
            </a>
            </li>

            <li
            @if($page == 'biodatamahasiswa')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="{{ url('mahasiswa/biodata-mahasiswa') }}"><i class='fa fa-book'></i> <span> Biodata Mahasiswa</span></a>
          
            </li>
                        <!-- Href menuju ke url mahasiswa/kemahasiswaan/penelitian -->
                        <li 
                        @if($page == 'penelitian')
                        {!! 'class="active"'!!}
                        @endif
                        ><a href="{{url('/mahasiswa/penelitian')}}"><i class="fa fa-edit"></i> Penelitian
                            </a>
                            </li>
                                    <!-- Href menuju ke url mahasiswa/kemahasiswaan/penelitian -->
                                    <li
                                    @if($page == 'detailpenelitian')
                                    {!! 'class="active"'!!}
                                    @endif
                                    ><a href="{{url('/mahasiswa/detailpenelitian')}}"><i class="fa fa-edit"></i>Detail Penelitian</a></li>
                                    <li><a href="{{url('/mahasiswa/detailanggota')}}"><i class="fa fa-edit"></i>Detail Anggota</a></li>
                        <!-- Href menuju ke url mahasiswa/kemahasiswaan/prestasi -->
                        <li><a href="{{url('/mahasiswa/prestasi')}}"><i class="fa fa-edit"></i> Prestasi</a></li>
                <!-- $page nya sesuaiin sama yang di controller -->
            <li
            @if($page == 'biodata')
            {!! 'class="active"'!!}
            @endif
            >
                <a href="{{url('/mahasiswa/akun')}}"><i class="fa fa-book"></i> Akun Mahasiswa</a>
            </li>
                  
                </ul>
            </li>
             


            <!-- Modul Dosen -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Dosen</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <li

            <li @if($page == 'pengmas')
            {!! 'class="active"'!!}
            @endif
            ><a href="{{url('/dosen/pengmas')}}"><i class='fa fa-book'></i> <span> Pengabdian Masyarakat</span></a></li>

           <li
            @if($page == 'konferensi')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="{{ url('dosen/konferensi') }}"><i class='fa fa-book'></i> <span> Konferensi</span></a>
            </li> 
            <li><a href="{{url('/dosen/pengmas/index')}}">Pengabdian Masyarakat</a></li>

            <li><a href="{{ url('/dosen/konferensi/index') }}">Konferensi</a></li>

            <li><a href="{{url('/dosen/pengmas/index')}}"><i class='fa fa-book'></i>Pengabdian Masyarakat</a></li>

          
            <li><a href="{{ url('/dosen/konferensi/index') }}"><i class='fa fa-book'></i>Konferensi</a></li>
            <li
            @if($page == 'penelitian')
            {!! 'class="active"'!!}
            @endif
            ><a href="{{url('/dosen/penelitian')}}"><i class='fa fa-book'></i>Penelitian</a>
            </li>                 
            <li><a href="{{url('/dosen/jurnal/index')}}">Jurnal</a></li>  
            <li><a href="{{url('/dosen/jurnal/index')}}"><i class='fa fa-book'></i>Jurnal</a></li>  
            <li

            @if($page == 'sktugas')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="{{ url('dosen/sktugas') }}"><i class='fa fa-book'></i> <span> Surat Tugas</span></a>
            </li> 
            <li><a href="{{url('/dosen/biodata/index')}}">Biodata</a></li>

            <li
            @if($page == 'jurnal')
            {!! 'class="active"'!!}
            @endif
            ><a href="{{url('/dosen/jurnal')}}">Jurnal</a>
            </li>  

            <li><a href="{{url('/dosen/sktugas/index')}}">SK Tugas</a></li>
            <li><a href="{{url('/dosen/biodata/index')}}">Biodata</a></li>

            </ul>
            </li>

            <!-- Modul Kurikulum -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Kurikulum</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <li
            @if($page == 'capaian-program')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url kurikulum/capaian-program -->
            <a href="{{ url('kurikulum/capaian-program') }}"><i class='fa fa-book'></i> <span> Capaian Program</span></a>

            <li
            @if($page == 'kategori-media-pembelajaran')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="{{ url('kurikulum/kategori-media-pembelajaran') }}"><i class='fa fa-book'></i> <span>Kategori Media Pembelajaran</span></a>

            </li>

            <li 
            @if($page == 'prodi')
            {!! 'class="active"'!!}
            @endif
            ><a href="{{ url('/kurikulum/prodi') }}"><i class='fa fa-book'></i> <span> Prodi</span></a></li>
            </li> 
            <a href="{{ url('/kurikulum/universitas') }}"><i class='fa fa-book'></i> <span> Universitas</span></a>
            </li>        
            </ul>
            </li>

            <!-- Modul Krs-Khs -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Krs-Khs</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
             <li
            @if($page == 'JadwalKuliah')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url notulensi/dosenrapat -->
            <a href="{{ url('krs-khs/JadwalKuliah') }}"><i class='fa fa-book'></i> <span>Jadwal Kuliah</span></a>
            </li>        
            </ul>
            </li>
            
            <!-- Sidebarnya ditaruh dibawah sini -->
            <li
            @if($page == 'JenisPenilaian')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url notulensi/dosenrapat -->
            <a href="{{ url('krs-khs/JenisPenilaian') }}"><i class='fa fa-book'></i> <span>JenisPenilaian</span></a>
            </li>

            <li
            @if($page == 'TahunAkademik')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url notulensi/dosenrapat -->
            <a href="{{ url('krs-khs/TahunAkademik') }}"><i class='fa fa-book'></i> <span>TahunAjaran</span></a>
            </li>        
            </ul>
            </li>

            <!-- Sidebarnya ditaruh dibawah sini -->
            <li
            @if($page == 'khs')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url krs-khs/Khs -->
            <a href="{{ url('krs-khs/khs') }}"><i class='fa fa-book'></i> <span>Khs</span></a>
            </li>        
            </ul>
            </li>
           
            

            <!-- Modul Monitoring Skripsi -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
            <li
            @if($page == 'skripsi')
            {!! 'class="active"'!!}
            @endif>

            <a href="{{ url('monitoring-skripsi/skripsi') }}"><i class='fa fa-book'></i><span> Skripsi</span></a>
            </li>

            <li
                @if($page == 'KBK')
                {!! 'class="active"'!!}
                @endif
                >

                <a href="{{ url('monitoring-skripsi/KBK') }}"><i class='fa fa-book'></i><span> KBK </span></a>
            </li>


            <li
                @if($page == 'dosbing')
                {!! 'class="active"'!!}
                @endif
                >

                <a href="{{ url('monitoring-skripsi/index-dosbing') }}"><i class='fa fa-book'></i><span>Dosen Pembimbing </span></a>
            </li>


            <li
                @if($page == 'dosen_penguji')
                {!! 'class="active"'!!}
                @endif
                >

                <a href="{{ url('monitoring-skripsi/index-dosen-penguji') }}"><i class='fa fa-book'></i><span>Dosen Penguji </span></a>
            </li>

            <li
            @if($page == 'konsultasi')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{url('monitoring-skripsi/konsultasi')}}"><i class='fa fa-book'></i>
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
            @if($page == 'notulen')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url notulensi/notulensi rapat -->
            <a href="{{ url('notulensi/notulen') }}"><i class='fa fa-book'></i> <span> Notulensi Rapat</span></a>
            </li>

            <li
            @if($page == 'dosenrapat')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url notulensi/dosenrapat -->
            <a href="{{ url('notulensi/dosenrapat') }}"><i class='fa fa-book'></i> <span>Dosen Rapat</span></a>
            </li>        
            </ul>
            </li>


            <!-- Modul Pengelolaan Kegiatan -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Pengelolaan Kegiatan</span></a>
            <ul class="treeview-menu">
<<<<<<< HEAD
                <li><a href="{{url('/kegiatan/dokumentasi')}}">Dokumentasi</a></li>
                <li><a href="{{url('/pengelolaan-kegiatan/uploadDokumentasi')}}">Upload</a></li>
=======

>>>>>>> bc487658186cc5c6b5c09d20d98e029aa1ff028f
            <!-- Sidebarnya ditaruh dibawah sini -->
            <!-- $page nya sesuaiin sama yang di controller -->
            <li
            @if($page == 'rundown')

            <!-- Sidebar Biodata -->
            <!-- $page nya sesuaiin sama yang di controller -->
            <li
            @if($page == 'pengajuan')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url mahasiswa/biodata -->

            <a href="{{ url('pengelolaan-kegiatan/rundown') }}"><i class='fa fa-book'></i> <span> Rundown</span></a>
            </li>

            <a href="{{ url('pengelolaan-kegiatan/pengajuan') }}"><i class='fa fa-book'></i> <span> Pengajuan Kegiatan</span></a>
            </li>        
            </ul>
            </li>

            <!-- Modul PLA -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> PLA</span></a>
            <ul class="treeview-menu">
<<<<<<< HEAD
            <!-- Sidebarnya ditaruh dibawah sini -->
            <li
            @if($page == 'surat_mhs')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="{{ url('pla/PermohonanSuratMhs') }}"><i class='fa fa-book'></i> <span> Permohonan Surat Mhs</span></a>
            </li> 
           
=======
>>>>>>> 6770194a2676dca582d1c436880b032c4b19e900


                <li
                @if($page == 'jadwal-permohonan')
                {!! 'class="active"'!!}
                @endif
                >
            <!-- Href menuju ke url pla/jadwal-permohonan-ruangan/view -->
                <a href="{{ url('pla/jadwal-permohonan/view') }}"><i class='fa fa-book'></i> <span>Jadwal Permohonan</span></a>
                </li>    


            <li
                @if($page == 'suratmasuk')
                {!! 'class="active"'!!}
                @endif
                >
            <!-- Href menuju ke url -->
                <a href="{{ url('pla/surat-masuk') }}"><i class='fa fa-book'></i> <span> Surat Masuk</span></a>
                </li>   
            <!-- Sidebarnya ditaruh dibawah sini -->
            <li
            @if($page == 'PermohonanRuang')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="{{ url('pla/PermohonanRuang') }}"><i class='fa fa-book'></i> <span> Permohonan Ruang</span></a>
            </li>  
            </ul>
            </li>

            <!-- Modul Inventaris -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> Inventaris</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <!-- Sidebarnya Asset -->
            <li
            @if($page == 'asset')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url inventaris/asset -->
            <a href="{{ url('inventaris/asset') }}"><i class='fa fa-book'></i> <span> Asset</span></a>
            </li>        

                <li><a href="{{ url('/index-asset')}}">all asset</a></li>
                <li><a href="{{url('/inventaris/index-peminjaman')}}">peminjaman</a></li>
                <li><a href="{{url('/index-maintenance')}}">maintenance</a></li>
            </ul>
            </li>

            
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>