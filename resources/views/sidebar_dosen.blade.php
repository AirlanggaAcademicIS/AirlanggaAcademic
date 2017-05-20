<li>
<a href="{{ url('/inventaris/asset') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Inventaris</a>
</li>
<!-- awal sidebar dosen pengelolaan kegiatan -->
<li>
<a href=""><i class='fa fa-users'></i> <span> Kegiatan Akademik </span></a>
<ul class="treeview-menu">
<!-- Sidebarnya ditaruh dibawah sini -->

<li
 @if($page == 'rincianrundown')
 {!! 'class="active"'!!}
 @endif>
<a href="{{url('pengelolaan-kegiatan/rincian-rundown')}}"><i class='fa fa-book'></i><span>Rincian Rundown</span></a>
</li>

<li
@if($page == 'rincian_dana')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('kegiatan/rincian_dana') }}"><i class='fa fa-book'></i><span>Rincian Dana </span></a>
</li>

<li
@if($page == 'dokumentasi')
{!! 'class="active"'!!}
@endif>
<a href="{{url('dosen/dokumentasi')}}">Dokumentasi</a>
</li>

<li
@if($page == 'publikasi')
{!! 'class="active"'!!}
@endif>
<a href="{{ url('dosen/kegiatan/publikasi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Publikasi</a>
</li>

</ul>
</li>
<!-- akhir sidebar dosen pengelolaan kegiatan -->
  	<li>
            <a href=""><i class='fa fa-users'></i> <span> Notulensi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <li
            @if($page == 'undangan')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url notulensi/notulensi rapat -->

            <a href="{{ url('notulensi/undangandosen') }}"><i class='fa fa-book'></i> <span>Undangan</span></a>
            <a href="{{ url('notulensi/konfirmasi') }}"><i class='fa fa-book'></i> <span>Notulensi</span></a>
            </li>
            </ul>
            </li>
<li
@if($page == 'surat-keluar-dosen')
{!! 'class="active"'!!}
 @endif
>
<!-- Href menuju ke url kurikulum/capaian-pembelajaran -->
<a href="{{ url('dosen/surat-keluar-dosen') }}"><i class='fa fa-book'></i> <span> Surat Keluar Dosen</span></a>

</li>
<!-- Monitoring Skripsi -->
<li>
      <a href="#"><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
      <ul class="treeview-menu">
            <li
            @if($page == 'skripsi')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('dosen/monitoring-skripsi/skripsi') }}"><i class='fa fa-book'></i><span> Data Skripsi</span></a>
            </li>
            
            <li
            @if($page == 'konsultasi')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('dosen/monitoring-skripsi/konsultasi') }}"><i class='fa fa-book'></i><span> Konsultasi</span></a>
            </li>
      </ul>
</li>
<!-- Akhir side bar monitoring skripsi harus ditutup dengan ul dan li jangan lupa -->