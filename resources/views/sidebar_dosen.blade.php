
<!-- Contoh -->
<<<<<<< HEAD
			<li>
            <a href=""><i class='fa fa-users'></i> <span> Notulensi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <li
            @if($page == 'notulensi')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url notulensi/notulensi rapat -->
            <a href="#"><i class='fa fa-book'></i> <span>Undangan</span></a>
            <a href="{{ url('notulensi') }}"><i class='fa fa-book'></i> <span>Notulensi</span></a>
            <a href="#"><i class='fa fa-book'></i> <span>Kalender</span></a>
            </li>
<!-- <li
=======
<!-- <<li
>>>>>>> 0d102a388d7971698ff7c88f24080165fde93eea
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->
            <li
            @if($page == 'capaian-program')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url kurikulum/capaian-program -->
            <a href="{{ url('dosen/kurikulum/cp_program') }}"><i class='fa fa-book'></i> <span> Capaian Program</span></a>
            </li>
	<li
	@if($page == 'rps')
	{!! 'class="active"'!!}
	@endif
	>

	<a href="{{ url('dosen/kurikulum/rps') }}"><i class='fa fa-book'></i> <span>RPS</span></a>

	</li>
<li


@if($page == 'silabus')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('dosen/kurikulum/silabus') }}"><i class="fa fa-book" aria-hidden="true"></i>Silabus</a>
</li>
<li
@if($page == 'kode')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('dosen/kurikulum/kodecppem') }}"><i class="fa fa-book" aria-hidden="true"></i>Kode CP Pembelajaran</a>
</li>
<li
@if($page == 'konferensi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('/dosen/konferensi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Konferensi</a>
</li> 

<li
@if($page == 'penelitian')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('/dosen/penelitian') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Penelitian</a>
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
            ><a href="{{url('/dosen/jurnal')}}"><i class="fa fa-calculator" aria-hidden="true"></i> Jurnal</a>
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

<li>
<a href="{{ url('dosen/monitoring-skripsi/skripsi') }}"><i class='fa fa-book'></i><span> Data Skripsi</span></a>
</li>
</ul>
<li
@if($page == 'skripsi')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('/inventaris/index-peminjaman') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Peminjaman</a>
</li>


<li
@if($page == 'capaian-pembelajaran')
{!! 'class="active"'!!}
 @endif
>
<!-- Href menuju ke url kurikulum/capaian-pembelajaran -->
<a href="{{ url('dosen/kurikulum/cp_pembelajaran') }}"><i class='fa fa-book'></i> <span> Capaian Pembelajaran</span></a>

</li>