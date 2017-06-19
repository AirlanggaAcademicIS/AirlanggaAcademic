<li class="treeview">

      <a href=""><i class='fa fa-users'></i> <span> Kurikulum</span></a>
      <ul class="treeview-menu">
            <li
            @if($page == 'kurikulum')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('dosen/kurikulum/silabus') }}"><i class='fa fa-book'></i> <span> Silabus</span></a>
            <a href="{{ url('dosen/kurikulum/rps') }}"><i class='fa fa-book'></i> <span> RPS</span></a>
            <a href="{{ url('dosen/kurikulum/kodecppem') }}"><i class='fa fa-book'> </i> <span> Kode Capaian Pembelajaran</span></a>
            <a href="{{ url('dosen/kurikulum/cp_program') }}"><i class='fa fa-book'></i> <span> Capaian Program</span></a>
            <a href="{{ url('dosen/kurikulum/capaian-pembelajaran') }}"><i class='fa fa-book'> </i> <span> Capaian Pembelajaran</span></a>
            <a href="{{ url('dosen/kurikulum/elearning') }}"><i class='fa fa-book'> </i> <span> E-Learning</span></a>
            </li>
      </ul>
</li>
<li class="treeview">
    <a href=""><i class='fa fa-user'></i> <span>Layanan Akademik</span></a>
    <ul class="treeview-menu">

            <li
                  @if($page == 'download-dokumen')
                  {!! 'class="active"'!!}
                  @endif
                  > <a href="{{url('dosen/Download_Dokumen')}}"><i class="fa fa-file-text"></i>Shared Dokumen</a>
                  </li>

            <li
            @if($page == 'kalender-ruang')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('dosen/Kalender_Ruang') }}"><i class="fa fa-calendar" aria-hidden="true"></i>Kalender Ruang</a>

            </li>

            <li
            @if($page == 'memohon-ruangan')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('dosen/memohon-ruangan') }}"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>Memohon Ruangan</a>
            </li>

            <li
            @if($page == 'surat-masuk')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('dosen/surat-masuk') }}"><i class="fa fa-envelope" aria-hidden="true"></i>Surat Masuk</a>

            </li>

            <li
            @if($page == 'surat-keluar-dosen')
            {!! 'class="active"'!!}
             @endif
            >
            <a href="{{ url('dosen/surat-keluar-dosen') }}"><i class='fa fa-envelope'></i> <span>Surat Keluar</span></a>

            </li>
      </ul>
</li>

<li class="treeview">
    <a href=""><i class='fa fa-user'></i> <span>Laporan Kinerja Dosen</span></a>
    <ul class="treeview-menu">
      

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
@if($page == 'surattugas')
{!! 'class="active"'!!}
@endif
><a href="{{url('/dosen/surat-tugas')}}"><i class="fa fa-calculator" aria-hidden="true"></i> SK Tugas</a>
</li> 

<li
@if($page == 'validasi')
{!! 'class="active"'!!}
@endif
><a href="{{url('/dosen/validasi/jurnal')}}"><i class="fa fa-calculator" aria-hidden="true"></i> Validasi</a>
</li> 

<li
@if($page == 'data-dosen')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('/dosen/data-dosen/penelitian') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Data Penelitian Dosen</a>
</li>

<li
@if($page == 'data-dosen')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('/dosen/data-dosen/jurnal') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Data Jurnal Dosen</a>
</li>

<li
@if($page == 'data-dosen')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('/dosen/data-dosen/konferensi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Data konferensi Dosen</a>
</li>

<li
@if($page == 'data-dosen')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('/dosen/data-dosen/pengmas') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Data Pengmas Dosen</a>
</li>

<li
@if($page == 'data-dosen')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('/dosen/data-dosen/surat-tugas') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Data SK Tugas Dosen</a>
</li>

 

<li
@if($page == 'laporan')
{!! 'class="active"'!!}
@endif
><a href="{{url('/dosen/laporan/pilih')}}"><i class="fa fa-calculator" aria-hidden="true"></i> Laporan Kinerja Dosen</a>
</li> 
      </ul>
</li>
<li> 
<a href="{{ url('/inventaris/dosen/asset') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Inventaris</a> 
</li>