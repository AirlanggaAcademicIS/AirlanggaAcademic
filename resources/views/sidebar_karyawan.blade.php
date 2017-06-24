<li class="treeview">
            <a href=""><i class='fa fa-book'></i> <span> Kurikulum</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <li
            @if($page == 'kurikulum')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url notulensi/notulensi rapat -->
          <a href="{{ url('karyawan/kurikulum/rps') }}"><i class='fa fa-book'></i> <span> RPS</span></a>
            <a href="{{ url('karyawan/kurikulum/silabus') }}"><i class='fa fa-book'></i> <span> Silabus</span></a>
            <a href="{{ url('karyawan/kurikulum/cp_program') }}"><i class='fa fa-book'></i> <span> Capaian Program</span></a>
          <a href="{{ url('karyawan/kurikulum/kodecppem') }}"><i class='fa fa-book'> </i> <span> Kode Capaian Pembelajaran</span></a>
          <a href="{{ url('karyawan/kurikulum/cp_pembelajaran') }}"><i class='fa fa-book'> </i> <span> Capaian Pembelajaran</span></a>
            </li>
            </ul>
            </li>
<li
@if($page == 'AkunMahasiswa')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('karyawan/akun') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Akun Mahasiswa</a>
</li>
<li
@if($page == 'verifikasi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('karyawan/verifikasi') }}"><i class="fa fa-book" aria-hidden="true"></i>Verifikasi Mahasiswa</a>
</li>

<li class="treeview"
@if($page == 'upload-dokumen' || 'konfirmasi-ruang' || 'history-ruang' || 'hardcopy' || 'surat-masuk' || 'surat-keluar-mhs' || 'surat-keluar-dosen' || 'akun-karyawan') 
{!! 'active' !!} 
@endif 
>
    <a href=""><i class='fa fa-user'></i> <span>Layanan Akademik</span></a>
    <ul class="treeview-menu">

    <li
      @if($page == 'upload-dokumen')
      {!! 'class="active"'!!}
      @endif
      > <a href="{{url('karyawan/upload-dokumen')}}"><i class="fa fa-file-text"></i>Shared Dokumen</a></li>

    <li class="
      treeview">
        <a href=""><i class='fa fa-calendar-plus-o'></i> <span>Permohonan Ruang</span></a>
        <ul class="treeview-menu">
                   <li
                       @if($page == 'konfirmasi-ruang')
                        {!! 'claass="active"'!!}
                         @endif>

                        <a href="{{url('karyawan/PermohonanRuang/Konfirmasi')}}"><i class='fa fa-check-square'></i><span>Konfirmasi</span>
                        </a>
                   </li> 

                   <li
                       @if($page == 'history-ruang')
                        {!! 'claass="active"'!!}
                         @endif>

                        <a href="{{url('karyawan/PermohonanRuang/History')}}"><i class='fa fa-history'></i><span>History</span>
                        </a>
                   </li> 
        </ul>
    </li>


    <li
    @if($page == 'hardcopy')
    {!! 'class="active"'!!}
    @endif
    >
    <a href="{{ url('karyawan/Pengumpulan-Hardcopy') }}"><i class="fa fa-book" aria-hidden="true"></i>Pengumpulan Proposal & Skripsi</a>

    </li>

    <li
    @if($page == 'surat-masuk')
    {!! 'class="active"'!!}
    @endif
    >
    <a href="{{ url('karyawan/surat-masuk') }}"><i class="fa fa-envelope" aria-hidden="true"></i>Surat Masuk</a>

    </li>

    <li
    @if($page == 'surat-keluar-mhs')
    {!! 'class="active"'!!}
     @endif
    >
    <!-- Href menuju ke url kurikulum/capaian-pembelajaran -->
    <a href="{{ url('karyawan/surat-keluar-mhs') }}"><i class='fa fa-envelope'></i> <span>Surat Keluar Mahasiswa</span></a>

    </li>

    <li
    @if($page == 'surat-keluar-dosen')
    {!! 'class="active"'!!}
     @endif
    >
    <!-- Href menuju ke url kurikulum/capaian-pembelajaran -->
    <a href="{{ url('karyawan/surat-keluar-dosen') }}"><i class='fa fa-envelope'></i> <span>Surat Keluar Dosen</span></a>

    </li>

    <li
    @if($page == 'akun-karyawan')
    {!! 'class="active"'!!}
    @endif
    >
    <a href="{{ url('karyawan/pla/karyawan') }}"><i class='fa fa-user'></i> <span>Akun Karyawan</span></a>
    </li>
    </ul>
</li>

<li
@if($page == 'biodata-dosen')
{!! 'class="active"'!!}
@endif
><a href="{{url('/dosen/biodata-dosen')}}"><i class="fa fa-calculator" aria-hidden="true"></i> Biodata Dosen</a>
</li>
<li> 
<a href="{{ url('/inventaris/index-peminjaman') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Inventaris</a> 
<ul class="treeview-menu"> 
    <!-- Sidebarnya ditaruh dibawah sini --> 
        <li><a href={{url('/inventaris/asset')}}>all asset</a></li> 
        <li><a href="<?php echo e(url('/inventaris/index-peminjaman')); ?>">peminjaman</a></li> 
        <li><a href="<?php echo e(url('/index-maintenance')); ?>">maintenance</a></li> 
    </ul> 
</li>

<!--Awal Notulen-->
<li>
            <a href=""><i class='fa fa-users'></i> <span> Notulensi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <li
            @if($page == 'notulensi')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url notulensi/notulensi rapat -->
            <a href="{{ url('undangankaryawan') }}"><i class='fa fa-book'></i> <span>Undangan</span></a>
            <a href="{{url('notulensi/dosenrapat')}}"><i class='fa fa-book'></i> <span>Kehadiran Rapat</span></a>
            <a href="{{url('notulensi')}}"><i class='fa fa-book'></i> <span>Notulensi</span></a>
            <a href="{{url('karyawan/notulensi/kalenderRapat')}}"><i class='fa fa-book'></i> <span>Kalender</span></a>
            </li>
            </ul>
        </li>
<!--Akhir Notulen-->
<!-- MONITORING SKRIPSI -->
<li>
 <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
    <ul class="treeview-menu">

    <li
      @if($page == 'KBK')
      {!! 'claass="active"'!!}
      @endif>

      <a href="{{url('karyawan/monitoring-skripsi/KBK')}}"><i class='fa fa-book'></i><span>Input KBK</span>
      </a>
    </li>

    <li
      @if($page == 'status')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/status')}}"><i class='fa fa-book'></i><span>Input Status</span>
      </a>
    </li>

    <li
      @if($page == 'form_usulan')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/form_usulan')}}"><i class='fa fa-download'></i><span>Form Usulan</span>
      </a>
    </li>

    <li
      @if($page == 'skripsi')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/skripsi')}}"><i class='fa fa-id-card'></i><span>Data Skripsi</span>
      </a>
    </li>

    <li
      @if($page == 'konsultasi')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/konsultasi')}}"><i class='fa fa-handshake-o'></i><span>Konsultasi</span>
      </a>
    </li>

    <li
      @if($page == 'berkas')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/berkas')}}"><i class='fa fa-file-word-o '></i><span>Berkas</span>
      </a>
    </li>

    <li
      @if($page == 'jadwal-sidang')
      {!! 'class="active"'!!}
      @endif
      >
      <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>Jadwal Sidang</a>
      
      <ul class="treeview-menu">
        
      <li
      @if($page == 'manage-jadwal-sidang-proposal')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/manage-jadwal-sidang-proposal')}}"><i class='fa fa-circle-o'></i><span>Jadwal Sidang Proposal</span>
      </a>
      </li>

      <li
      @if($page == 'manage-jadwal-sidang-skripsi')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/manage-jadwal-sidang-skripsi')}}"><i class='fa fa-circle-o'></i><span>Jadwal Sidang Skripsi</span>
      </a> 
      </li>


      </ul>
    </li>

      <li
      @if($page == 'hasil-sidang')
      {!! 'class="active"'!!}
      @endif
      >
      <a href="#"><i class="fa fa-certificate" aria-hidden="true"></i>Hasil Sidang</a>
      
      <ul class="treeview-menu">
        
      <li
      @if($page == 'manage-hasil-sidang-proposal')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/manage-hasil-sidang-proposal')}}"><i class='fa fa-circle-o'></i><span>Hasil Proposal </span>
      </a>
      </li>

      <li
      @if($page == 'manage-hasil-sidang-skripsi')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/manage-hasil-sidang-skripsi')}}"><i class='fa fa-circle-o'></i><span>Hasil Skripsi </span>
      </a>
      </li>


      </ul>
      </li>


    </ul>
</li>
<!-- Akhir side bar monitoring skripsi harus ditutup dengan ul dan li jangan lupa -->
<!-- MODUL KRS KHS -->
<li
    @if($page == 'mk_diajar')
    {!! 'class="active"'!!}
    @endif
>
<a href="{{ url('karyawan/krs-khs/input-dosen-mk/view') }}"><i class="fa fa-calculator" aria-hidden="true"></i>MK Diajar</a>
</li>

<li
    @if($page == 'mk_ditawarkan')
    {!! 'class="active"'!!}
    @endif
>
<a href="{{ url('karyawan/krs-khs/mk-ditawarkan/view') }}"><i class="fa fa-calculator" aria-hidden="true"></i>MK Ditawarkan</a>
</li>

<li
    @if($page == 'jadwal')
    {!! 'claass="active"'!!}
    @endif
>
<a href="{{url('karyawan/krs-khs/jadwal-kuliah/index')}}"><i class='fa fa-book'></i><span>Jadwal Kuliah</span>
  </a>
</li>

<li
    @if($page == 'ruang')
    {!! 'claass="active"'!!}
    @endif
>
<a href="{{url('karyawan/krs-khs/ruang/create')}}"><i class='fa fa-users'></i><span>Ruang</span>
</a>
</li>
<!-- Akhir modul krs khs -->