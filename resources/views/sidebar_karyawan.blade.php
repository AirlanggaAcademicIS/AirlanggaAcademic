
<!-- awal modul pengelolaan kegiatan fitur view lpj -->
<li>
<a href=""><i class="fa fa-users"></i> <span> Kegiatan Akademik </span></a>    

<ul class="treeview-menu">

<!-- Sidebarnya ditaruh dibawah sini -->
<!-- Konfirmasi kegiatan -->
<li
@if($page == 'konfirmasi-kegiatan')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('karyawan/pengelolaan-kegiatan/konfirmasi-kegiatan') }}"><i class='fa fa-book'></i><span> Konfirmasi Kegiatan </span></a>
</li>

<!-- Daftar Konfirmasi Kegiatan -->
<li
@if($page == 'daftar-konfirmasi')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('karyawan/pengelolaan-kegiatan/daftar-konfirmasi') }}"><i class='fa fa-book'></i><span> Daftar Konfirmasi Kegiatan </span></a>
</li>

</ul>
</li>
