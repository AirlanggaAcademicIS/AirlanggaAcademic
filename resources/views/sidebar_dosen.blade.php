
<li class="
@if($page == 'download-dokumen' || 'kalender-ruang' || 'memohon-ruangan' || 'surat-masuk' || 'surat-keluar-dosen')
{!! 'active' !!}
@endif
treeview">
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