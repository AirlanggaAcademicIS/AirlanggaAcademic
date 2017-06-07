<li>
<a href=""><i class='fa fa-users'></i> <span> Kegiatan Akademik </span></a>
<ul class="treeview-menu">
<!-- Sidebarnya ditaruh dibawah sini -->


<li
@if($page == 'pengajuan')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('mahasiswa/pengelolaan-kegiatan/pengajuan') }}"><i class='fa fa-book'></i><span>Input Pengajuan Proposal <br>Kegiatan Akademik</span></a>
</li>

<li
@if($page == 'dokumentasi')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('mahasiswa/pengelolaan-kegiatan/dokumentasi/create') }}"><i class='fa fa-book'></i><span>Input Pengajuan LPJ <br>Kegiatan Akademik</span></a>
</li>

<li
@if($page == 'DiterimaProposal')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('mahasiswa/pengelolaan-kegiatan/daftarPengajuanKonfirmasiProposal') }}"><i class='fa fa-book'></i><span>Daftar Kegiatan Akademik<br> Yang Akan Datang</span></a>
</li>

<li
@if($page == 'DiterimaLPJ')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('mahasiswa/pengelolaan-kegiatan/daftarPengajuanKonfirmasiLPJ') }}"><i class='fa fa-book'></i><span>Daftar Kegiatan Akademik <br> Terlaksana</span></a>
</li>

<li
@if($page == 'Status')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('mahasiswa/pengelolaan-kegiatan/Status') }}"><i class='fa fa-book'></i><span>Daftar Pengajuan Kegiatan <br>Akademik</span></a>
</li>

<li
@if($page == 'Ditolak')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('mahasiswa/pengelolaan-kegiatan/daftarPengajuanDitolak') }}"><i class='fa fa-book'></i><span>Daftar Revisi Kegiatan<br> Akademik </span></a>
</li>

</ul>
</li>