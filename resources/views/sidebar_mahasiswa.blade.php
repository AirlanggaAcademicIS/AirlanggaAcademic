<li>
<a href=""><i class='fa fa-users'></i> <span> Kegiatan Akademik </span></a>
<ul class="treeview-menu">
<!-- Sidebarnya ditaruh dibawah sini -->


<li
@if($page == 'pengajuan')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('mahasiswa/pengelolaan-kegiatan/pengajuan') }}"><i class='fa fa-book'></i><span>Input Pengajuan <br>Kegiatan Akademik</span></a>
</li>

<li
@if($page == 'dokumentasi')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('mahasiswa/pengelolaan-kegiatan/dokumentasi/create') }}"><i class='fa fa-book'></i><span>Input Laporan Pelaksanaan <br>Kegiatan Akademik</span></a>
</li>

<li
@if($page == 'DiterimaProposal')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('mahasiswa/pengelolaan-kegiatan/daftarPengajuanKonfirmasiProposal') }}"><i class='fa fa-calendar'></i><span>Kegiatan Akademik<br>Mendatang</span></a>
</li>

<li
@if($page == 'DiterimaLPJ')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('mahasiswa/pengelolaan-kegiatan/daftarPengajuanKonfirmasiLPJ') }}"><i class='fa fa-calendar-check-o'></i><span>Kegiatan Akademik <br> Terlaksana</span></a>
</li>

<li
@if($page == 'DitolakProposal')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('mahasiswa/pengelolaan-kegiatan/daftarPengajuanDitolak') }}"><i class='fa fa-exclamation-circle'></i><span>Revisi Pengajuan<br>Kegiatan Akademik </span></a>
</li>

<li
@if($page == 'DitolakLPJ')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('mahasiswa/pengelolaan-kegiatan/daftarPengajuanDitolakLPJ') }}"><i class='fa fa-exclamation-circle'></i><span>Revisi Laporan<br>Kegiatan Akademik </span></a>
</li>

</ul>
</li>
