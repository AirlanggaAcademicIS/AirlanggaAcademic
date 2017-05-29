
<!-- awal modul pengelolaan kegiatan fitur view lpj -->
<li>
<a href=""><i class="fa fa-users"></i> <span> Kegiatan Akademik </span></a>    

<ul class="treeview-menu">

<!-- Sidebarnya ditaruh dibawah sini -->
<!-- Konfirmasi kegiatan -->
<li
@if($page == 'struktur-panitia')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('/dosen/pengelolaan-kegiatan/input-struktur-panitia/view') }}"><i class='fa fa-book'></i><span> Daftar Kegiatan </span></a>
</li>

</ul>
</li>
