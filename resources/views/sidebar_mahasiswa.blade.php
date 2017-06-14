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
<a href="{{ url('/mahasiswa/penelitian') }}"><i class='fa fa-book'></i>Penelitian</a>
</li>
<li
@if($page == 'prestasi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('mahasiswa/prestasi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Prestasi</a>
</li>
<li
@if($page == 'ganti-password')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('mahasiswa/ganti-password') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Ubah Password</a>
</li>
<li class="treeview">

    <a href=""><i class='fa fa-user'></i> <span>KRS & KHS</span></a>
    <ul class="treeview-menu">
<li
  @if($page == 'histori')
  {!! 'claass="active"'!!}
  @endif
>
<a href="{{url('mahasiswa/krs-khs/histori/view')}}"><i class='fa fa-users'></i><span>Histori Nilai</span>
</a>
</li>

<li
  @if($page == 'khs')
  {!! 'claass="active"'!!}
  @endif
>
<a href="{{url('mahasiswa/krs-khs/khs/view')}}"><i class='fa fa-users'></i><span>Kartu Hasil Studi</span>
</a>
</li>

<li
  @if($page == 'krs')
  {!! 'class="active"'!!}
  @endif
>
<a href="{{ url('mahasiswa/krs-khs/krs/index') }}"><i class="fa fa-calculator"></i>Krs</a>
</li>
</ul>
</li>
<li class="treeview"
@if($page == 'download-dokumen' || $page =='kalender-ruang' || $page == 'memohon-ruangan' || $page == 'surat-masuk' || $page == 'surat-keluar-mhs')
{!! 'active' !!}
@endif

>

    <a href=""><i class='fa fa-user'></i> <span>Layanan Akademik</span></a>
    <ul class="treeview-menu">

    <li
      @if($page == 'download-dokumen')
      {!! 'class="active"'!!}
      @endif
      > <a href="{{url('mahasiswa/Download_Dokumen')}}"><i class="fa fa-file-text"></i>Shared Dokumen</a>
    </li>

    <li
    @if($page == 'kalender-ruang')
    {!! 'class="active"'!!}
    @endif
    >
    <a href="{{ url('mahasiswa/Kalender_Ruang') }}"><i class="fa fa-calendar" aria-hidden="true"></i>Kalender Ruang</a>

    </li>

    <li
    @if($page == 'memohon-ruangan')
    {!! 'class="active"'!!}
    @endif
    >
    <a href="{{ url('mahasiswa/memohon-ruangan') }}"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>Memohon Ruangan</a>

    </li>

    <li
    @if($page == 'surat-masuk')
    {!! 'class="active"'!!}
    @endif
    >
    <a href="{{ url('mahasiswa/surat-masuk') }}"><i class="fa fa-envelope" aria-hidden="true"></i>Surat Masuk</a>

    </li>

    <li
    @if($page == 'surat-keluar-mhs')
    {!! 'class="active"'!!}
    @endif
    >
    <a href="{{ url('mahasiswa/surat-keluar-mhs') }}"><i class="fa fa-envelope" aria-hidden="true"></i>Surat Keluar</a>

    </li>
</ul>
</li>
<li> 
<a href="{{ url('/inventaris/mahasiswa/asset') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Inventaris</a> 
</li>