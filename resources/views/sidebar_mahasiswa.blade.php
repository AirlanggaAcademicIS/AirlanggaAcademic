<!-- Contoh -->
<!--  <li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->

<li
@if($page == 'biodata-mahasiswa')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('mahasiswa/biodata-mahasiswa') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Biodata Mahasiswa</a>
</li>
<li
@if($page == 'penelitian')
{!! 'class="active"'!!}
@endif
>
<!-- Href menuju ke url mahasiswa/biodata -->
<a href="{{ url('/mahasiswa/penelitian') }}"><i class='fa fa-book'></i> <span> Penelitian</span></a>
</li>
<li
@if($page == 'prestasi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('mahasiswa/prestasi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Prestasi</a>
</li>

	<li>
            <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
            <li
            @if($page == 'skripsi')
            {!! 'class="active"'!!}
            @endif>

            <a href="{{ url('mahasiswa/monitoring-skripsi/konsultasi') }}"><i class='fa fa-book'></i><span> Konsultasi</span></a>
            </li>
    
<li
@if($page == 'skripsi')
{!! 'class="active"'!!}
@endif>

<a href="{{ url('mahasiswa/monitoring-skripsi/skripsi') }}"><i class='fa fa-book'></i><span> Data Skripsi</span></a>
</li>
</ul>
</li>
<li>
<a href="{{ url('/inventaris/index-peminjaman') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Peminjaman</a>
</li>