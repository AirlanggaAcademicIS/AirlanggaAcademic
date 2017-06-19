<li class="treeview">

      <a href=""><i class='fa fa-users'></i> <span> Kurikulum</span></a>
      <ul class="treeview-menu">
            <li
            @if($page == 'kurikulum')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('karyawan/kurikulum/inputmatkul') }}"><i class='fa fa-book'> </i> <span>Input Matkul</span></a>
            <a href="{{ url('karyawan/kurikulum/mk-prodi') }}"><i class='fa fa-book'> </i> <span>Pilih Matkul</span></a>
            <a href="{{ url('karyawan/kurikulum/silabus') }}"><i class='fa fa-book'></i> <span> Silabus</span></a>
            <a href="{{ url('karyawan/kurikulum/rps') }}"><i class='fa fa-book'></i> <span> RPS</span></a>
            <a href="{{ url('karyawan/kurikulum/cp_program') }}"><i class='fa fa-book'></i> <span> Capaian Program</span></a>
            <a href="{{ url('karyawan/kurikulum/capaian-pembelajaran') }}"><i class='fa fa-book'> </i> <span> Capaian Pembelajaran</span></a>
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