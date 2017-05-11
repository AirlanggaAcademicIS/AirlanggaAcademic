<!-- Contoh -->
<!-- <<li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->
<li>
<a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
<ul class="treeview-menu">
<!-- Sidebarnya ditaruh dibawah sini -->
<li
@if($page == 'skripsi')
{!! 'class="active"'!!}
@endif>

<a href="{{ url('dosen/monitoring-skripsi/skripsi') }}"><i class='fa fa-book'></i><span> Data Skripsi</span></a>
</li>
</ul>
<a href="{{ url('/inventaris/index-peminjaman') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Peminjaman</a>
</li>

<li

@if($page == 'capaian-pembelajaran')
{!! 'class="active"'!!}
 @endif
>
<!-- Href menuju ke url kurikulum/capaian-pembelajaran -->
<a href="{{ url('dosen/kurikulum/cp_pembelajaran') }}"><i class='fa fa-book'></i> <span> Capaian Pembelajaran</span></a>