<!-- Contoh -->
<li
@if($page == 'biodata-mahasiswa')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('mahasiswa/biodata-mahasiswa') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Biodata Mahasiswa</a>
</li>
<li
@if($page == 'biodata-mahasiswa')
{!! 'class="active"'!!}
@endif
>
<a href="{{url('kegiatan/dokumentasi')}}">Dokumentasi</a>
</li>
<li
@if($page == 'biodata-mahasiswa')
{!! 'class="active"'!!}
@endif
>
<a href="{{url('/pengelolaan-kegiatan/uploadDokumentasi')}}">Upload</a>
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

<!-- Monitoring SKripsi -->
	<li>
        <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
        <ul class="treeview-menu">
            <li
            @if($page == 'konsultasi')
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

			<li
			@if($page == 'jadwal-sidang')
			{!! 'class="active"'!!}
			@endif
			>
			<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>Jadwal Sidang</a>
			
			<ul class="treeview-menu">
				
				<li
				@if($page == 'jadwal-sidang')
				{!! 'class="active"'!!}
				@endif
				> <a href="#"><i class="fa fa-circle-o"></i>Proposal</a></li>

				<li
				@if($page == 'jadwal-sidang')
				{!! 'class="active"'!!}
				@endif
				> <a href="#"><i class="fa fa-circle-o"></i>Skripsi</a></li>


			</ul>
			</li>

			<li
			@if($page == 'upload_berkas')
			{!! 'class="active"'!!}
			@endif>

			<a href="{{ url('mahasiswa/monitoring-skripsi/upload_berkas') }}"><i class='fa fa-book'></i><span>Upload berkas</span></a>
			</ul>
			</li>
		</ul>
	</li>
<!-- Akhir side bar monitoring skripsi harus ditutup dengan ul dan li jangan lupa -->



<li>
<a href="{{ url('/inventaris/index-peminjaman') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Peminjaman</a>
</li>

<li>
<a href=""><i class='fa fa-users'></i> <span> Pengelolaan Kegiatan </span></a>
<ul class="treeview-menu">
<!-- Sidebarnya ditaruh dibawah sini -->
<li
@if($page == 'dokumentasi')
{!! 'class="active"'!!}
@endif>

<a href="{{ url('dosen/pengelolaan-kegiatan/dokumentasi') }}"><i class='fa fa-book'></i><span> View Dokumentasi </span></a>
</li>
</ul>
</li>


<li
@if($page == 'memohon-ruangan')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('memohon-ruangan') }}"><i class="fa fa-book" aria-hidden="true"></i>Memohon Ruangan</a>

</li>

