
<!-- Contoh -->
<!-- <<li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->
<li
@if($page == 'konferensi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('/dosen/konferensi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Konferensi</a>
</li> 		
<li
@if($page == 'pengmas')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('/dosen/pengmas') }}"><i class="fa fa-calculator" aria-hidden="true"></i> Pengmas</a>
</li> 
			<li
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


<a href="{{ url('dosen/monitoring-skripsi/skripsi') }}"><i class='fa fa-book'></i><span> Data Skripsi</span></a>
</li>
</ul>
<li
@if($page == 'skripsi')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('/inventaris/index-peminjaman') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Peminjaman</a>
</li>
<<<<<<< HEAD

<li

@if($page == 'capaian-pembelajaran')
{!! 'class="active"'!!}
 @endif
>
<!-- Href menuju ke url kurikulum/capaian-pembelajaran -->
<a href="{{ url('dosen/kurikulum/cp_pembelajaran') }}"><i class='fa fa-book'></i> <span> Capaian Pembelajaran</span></a>
=======
>>>>>>> e9eb603fc7f35550e7def08924eb430aa01c873f
