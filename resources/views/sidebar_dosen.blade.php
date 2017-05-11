
<!-- Contoh -->
<!-- <<li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->
<li

@if($page == 'silabus')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('dosen/kurikulum/silabus') }}"><i class="fa fa-book" aria-hidden="true"></i>Silabus</a>
</li>

            @if($page == 'jurnal')
            {!! 'class="active"'!!}
            @endif
            ><a href="{{url('/dosen/jurnal')}}"><i class="fa fa-calculator" aria-hidden="true"></i>Jurnal</a>
            </li>  
            <li
            @if($page == 'notulensi')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('kalender') }}"><i class='fa fa-book'></i> <span>Kalender</span></a>
            </li>
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

