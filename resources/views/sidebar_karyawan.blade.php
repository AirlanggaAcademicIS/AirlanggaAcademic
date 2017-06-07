<li>
<a href=""><i class='fa fa-users'></i> <span> Kegiatan Akademik </span></a>
<ul class="treeview-menu">
<!-- Sidebarnya ditaruh dibawah sini -->
<li
@if($page == 'konfirmasi-kegiatan')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan') }}"><i class='fa fa-book'></i><span>Daftar Surat Pengajuan</span></a>
</li>

<li
@if($page == 'daftar-konfirmasi')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('karyawan/pengelolaan-kegiatan/daftar-konfirmasi') }}"><i class='fa fa-book'></i><span>Daftar Kegiatan Akademik</span></a>
</li>

</ul>
</li>

