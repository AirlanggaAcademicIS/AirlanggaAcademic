<!-- Contoh -->
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
@if($page == 'transaksi')

<li
@if($page == 'asset')

{!! 'class="active"'!!}
@endif
>

<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->

<li
@if($page == 'hasil-sidang')
{!! 'class="active"'!!}
@endif
>
<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i>Hasil Sidang</a>
<!-- sub menu -->
<ul class="treeview-menu">
	<!-- hasil sidang proposal -->
	<li
	@if($page == 'hasil-sidang-proposal')
	{!! 'class="active"'!!}
	@endif
	> <a href="{{ url('Karyawan/manage-hasil-sidang-proposal') }}"><i class="fa fa-circle-o"></i>Proposal</a>/li>

	<!-- hasil sidang skripsi -->
	<li
	@if($page == 'hasil-sidang-skripsi')
	{!! 'class="active"'!!}
	@endif
	> <a href="#"><i class="fa fa-circle-o"></i>Skripsi</a>/li>

<li>

 <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
 <ul class="treeview-menu">
  <li
  @if($page == 'skripsi')
  {!! 'claass="active"'!!}
  @endif>

  <a href="{{url('karyawan/monitoring-skripsi/KBK')}}"><i class='fa fa-book'></i><span> KBK</span>
  </a>
</li>
<li
@if($page == 'skripsi')
{!! 'class="active"'!!}
@endif>

<a href="{{ url('karyawan/monitoring-skripsi/skripsi') }}"><i class='fa fa-book'></i><span> Data Skripsi</span></a>
</li>
</ul>
</li>


            <a href=""><i class='fa fa-users'></i> <span> Notulensi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <li
            @if($page == 'notulensi')


<li
@if($page == 'jadwal-sidang')
{!! 'class="active"'!!}
@endif
>
<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>Jadwal Sidang</a>
<!-- sub menu jadwal -->
<ul class="treeview-menu">
	<!-- Sub menu jadwal sidang proposal -->
	<li
	@if($page == 'jadwal-sidang-proposal')
	{!! 'class="active"'!!}
	@endif
	> <a href="{{ url('Karyawan/manage-jadwal-sidang-proposal') }}"><i class="fa fa-circle-o"></i>Proposal</a></li>

	<!-- Sub menu jadwal sidang skripsi -->
	<li
	@if($page == 'jadwal-sidang-skripsi')
	{!! 'class="active"'!!}
	@endif
	> <a href="#"><i class="fa fa-circle-o"></i>Skripsi</a></li>



</ul>

</li>

<a href="{{ url('/inventaris/asset') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Inventaris</a>
<ul class="treeview-menu">

<li><a href="{{ url('/inventaris/asset') }}">all asset</a></li>


</ul>
</li>


<li
@if($page == 'mk_ditawarkan')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('krs-khs/mk_ditawarkan') }}"><i class="fa fa-calculator" aria-hidden="true"></i>MK Ditawarkan</a>
</li>

 <li
            @if($page == 'PermohonanRuang')
            {!! 'class="active"'!!}
            @endif
            >
            
            <a href="{{ url('karyawan/PermohonanRuang') }}"><i class='fa fa-book'></i> <span>Permohonan Ruang</span></a>
            </li>  
            </ul>
            </li>

<li
@if($page == 'AkunMahasiswa')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('karyawan/akun') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Akun Mahasiswa</a>
</li>

<li>
            <a href=""><i class='fa fa-users'></i> <span> Notulensi</span></a>
            <ul class="treeview-menu">
            <! Sidebarnya ditaruh dibawah sini -->

            <li
            @if($page == 'dosenrapat')

            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url notulensi/notulensi rapat -->
            <a href="#"><i class='fa fa-book'></i> <span>Undangan</span></a>

            <a href="{{url('notulensi')}}"><i class='fa fa-book'></i> <span>Notulensi</span></a>
			<a href="#"><i class='fa fa-book'></i> <span>Kehadiran Rapat</span></a>
            <a href="#"><i class='fa fa-book'></i> <span>Kalender</span></a>
            </li>

            <a href="#"><i class='fa fa-book'></i> <span>Notulensi</span></a>
            <a href="{{ url('dosenrapat') }}"><i class='fa fa-book'></i> <span>Kehadiran Rapat</span></a>
            <a href="#"><i class='fa fa-book'></i> <span>Kalender</span></a>
            </li>


<li
@if($page == 'verifikasi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('karyawan/verifikasi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Verifikasi Mahasiswa</a>
</li>
			<li
            @if($page == 'notulensi')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('kalender') }}"><i class='fa fa-book'></i> <span>Kalender</span></a>
            </li>
<li               
                @if($page == 'suratmasuk')
                {!! 'class="active"'!!}
                @endif
                >
            <!-- Href menuju ke url -->
                <a href="{{ url('surat-masuk') }}"><i class='fa fa-envelope'></i> <span> Surat Masuk</span></a>
                </li> 

<li class="treeview" id="scrollspy-components">
	<a href="#"><i class="fa fa-circle-o"></i> Kurikulum</a>
	<ul class="nav treeview-menu">
		<li
		@if($page == 'mata-kuliah')
		{!! 'class="active"'!!}
		@endif
		>
		<a href="{{ url('karyawan/kurikulum/mata-kuliah') }}"><i class="fa fa-circle-o" aria-hidden="true"></i>Mata Kuliah</a>
		</li>
	</ul>
</li>
<li>
            <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
            <li
            @if($page == 'status')
            {!! 'class="active"'!!}
            @endif>

            <a href="{{ url('/karyawan/monitoring-skripsi/status') }}"><i class='fa fa-book'></i><span>status</span></a>
            </li>
		<li
		@if($page == 'skripsi')
		{!! 'claass="active"'!!}
		@endif>

		<a href="{{url('karyawan/monitoring-skripsi/KBK')}}"><i class='fa fa-book'></i><span> KBK</span>
		</li>
		<li
		@if($page == 'skripsi')
		{!! 'class="active"'!!}
		@endif>

		<a href="{{ url('karyawan/monitoring-skripsi/skripsi') }}"><i class='fa fa-book'></i><span> Data Skripsi</span></a>
		</li>
	</ul>
</li>


<li>
<a href="{{ url('/inventaris/index-peminjaman') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Inventaris</a>
<ul class="treeview-menu">
    <!-- Sidebarnya ditaruh dibawah sini -->
        <li><a href="<?php echo e(url('/index-asset')); ?>">all asset</a></li>
        <li><a href="<?php echo e(url('/inventaris/index-peminjaman')); ?>">peminjaman</a></li>
        <li><a href="<?php echo e(url('/index-maintenance')); ?>">maintenance</a>
        </li>
    </ul>
</li>

<li>

<a href=""><i class='fa fa-users'></i> <span> Pengelolaan Kegiatan </span></a>
<ul class="treeview-menu">
<!-- Sidebarnya ditaruh dibawah sini -->
<li
@if($page == 'dokumentasi')
{!! 'class="active"'!!}
@endif>

<a href="{{ url('karyawan/pengelolaan-kegiatan/dokumentasi') }}"><i class='fa fa-book'></i><span> Imput Dokumentasi </span></a>
</li>
</ul>
</li>

            <a href=""><i class='fa fa-users'></i> <span> PLA</span></a>
            <ul class="treeview-menu">
            <li

    <!-- Modul PLA -->
            <li>
            <a href=""><i class='fa fa-users'></i> <span> PLA</span></a>
            <ul class="treeview-menu">
            <li
                @if($page == 'petugas_tu')
                {!! 'class="active"'!!}
                @endif
                >
            <!-- Href menuju ke url krs-khs/ruang/view -->
                <a href="{{ url('karyawan/pla/petugas_tu') }}"><i class='fa fa-book'></i> <span> Petugas TU</span></a>
                </li>

            </ul>
            </li>


