<li>
<a href="{{ url('/inventaris/index-peminjaman') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Inventaris</a>
<ul class="treeview-menu">
    <!-- Sidebarnya ditaruh dibawah sini -->
        <li><a href={{url('/inventaris/asset')}}>all asset</a></li>
        <li><a href="<?php echo e(url('/inventaris/index-peminjaman')); ?>">peminjaman</a></li>
        <li><a href="<?php echo e(url('/index-maintenance')); ?>">maintenance</a></li>
    </ul>
</li>

<!-- awal sidebar karyawan pengelolaan kegiatan -->
<li>
<a href=""><i class='fa fa-users'></i> <span> Kegiatan Akademik </span></a>
<ul class="treeview-menu">
<!-- Sidebarnya ditaruh dibawah sini -->

<li
@if($page == 'dokumentasi')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('karyawan/pengelolaan-kegiatan/dokumentasi') }}"><i class='fa fa-book'></i><span> Daftar  Dokumentasi Kegiatan </span></a>
</li>
<li
 @if($page == 'rincianrundown')
 {!! 'class="active"'!!}
 @endif>
<a href="{{url('pengelolaan-kegiatan/karyawan/pengelolaan-kegiatan/rincian-rundown')}}"><i class='fa fa-book'></i><span>Rincian Rundown </span></a>
</li>

<li
@if($page == 'konfirmasi-kegiatan')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan') }}"><i class='fa fa-book'></i><span> Konfirmasi Kegiatan </span></a>
</li>

<li
@if($page == 'rincian_dana')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('kegiatan/rincian_dana') }}"><i class='fa fa-book'></i><span>Rincian Dana </span></a>
</li>

<li
@if($page == 'publikasi')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('karyawan/kegiatan/publikasi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Publikasi</a>
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
            <a href="{{ url('notulensi/dosenrapat') }}"><i class='fa fa-book'></i> <span>Kehadiran Rapat</span></a>
            </li>
            <li
            @if($page == 'notulensi')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{url('notulensi')}}"><i class='fa fa-book'></i> <span>Notulensi</span></a>
            </li>
            <li
            @if($page == 'undangan')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url notulensi/notulensi rapat -->
            <a href="{{ url('undangan/karyawan') }}"><i class='fa fa-book'></i> <span>Undangan</span></a>
            </li>
            </ul>
        </li>
<!--Akhir Notulen-->

<li>
    <a href=""><i class='fa fa-users'></i> <span>Permohonan Ruang</span></a>
    <ul class="treeview-menu">
        
               <li
                   @if($page == 'History')
                    {!! 'claass="active"'!!}
                     @endif>

                    <a href="{{url('karyawan/PermohonanRuang/History')}}"><i class='fa fa-book'></i><span>History</span>
                    </a>
               </li> 
               <li
                   @if($page == 'Konfirmasi')
                    {!! 'claass="active"'!!}
                     @endif>

                    <a href="{{url('karyawan/PermohonanRuang/Konfirmasi')}}"><i class='fa fa-book'></i><span>Konfirmasi</span>
                    </a>
               </li> 

    </ul>
</li>

<li
@if($page == 'petugas_tu')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('karyawan/petugas_tu') }}"><i class='fa fa-book'></i> <span>Petugas TU</span></a>

</li>

<li
@if($page == 'surat-keluar-mhs')
{!! 'class="active"'!!}
 @endif
>
<!-- Href menuju ke url kurikulum/capaian-pembelajaran -->
<a href="{{ url('karyawan/surat-keluar-mhs') }}"><i class='fa fa-book'></i> <span> Surat Keluar Mahasiswa</span></a>

</li>

<li
@if($page == 'surat-keluar-dosen')
{!! 'class="active"'!!}
 @endif
>
<!-- Href menuju ke url kurikulum/capaian-pembelajaran -->
<a href="{{ url('karyawan/surat-keluar-dosen') }}"><i class='fa fa-book'></i> <span> Surat Keluar Dosen</span></a>

</li>
<!-- MONITORING SKRIPSI -->
<li class="treeview">
 <a href="#"><i class='fa fa-users'></i> <span> Monitoring Skripsi</span>  <i class="fa fa-angle-left pull-right"></i></a>
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
      @if($page == 'skripsi')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/skripsi')}}"><i class='fa fa-book'></i><span>Data Skripsi</span>
      </a>
    </li>

    <li
      @if($page == 'manage-jadwal-sidang-proposal')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/manage-jadwal-sidang-proposal')}}"><i class='fa fa-book'></i><span>Jadwal Sidang Proposal</span>
      </a>
    </li>

    <li
      @if($page == 'manage-hasil-sidang-proposal')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/manage-hasil-sidang-proposal')}}"><i class='fa fa-book'></i><span>Hasil Proposal </span>
      </a>
    </li>

    </ul>
</li>
<!-- Akhir side bar monitoring skripsi harus ditutup dengan ul dan li jangan lupa -->
