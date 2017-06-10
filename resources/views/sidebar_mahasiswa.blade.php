<!-- Monitoring SKripsi -->
	<li>
        <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
        <ul class="treeview-menu">
			<li
			@if($page == 'skripsi')
			{!! 'class="active"'!!}
			@endif>

			<a href="{{ url('mahasiswa/monitoring-skripsi/skripsi') }}"><i class='fa fa-book'></i><span> Data Skripsi</span></a>
			</li>

			<li
			@if($page == 'konsultasi')
			{!! 'class="active"'!!}
			@endif>

			<a href="{{ url('mahasiswa/monitoring-skripsi/konsultasi') }}"><i class='fa fa-book'></i><span> Konsultasi</span></a>
			</li>

			<li
			@if($page == 'upload_berkas')
			{!! 'class="active"'!!}
			@endif>

			<a href="{{ url('mahasiswa/monitoring-skripsi/upload_berkas') }}"><i class='fa fa-book'></i><span>Upload Berkas</span></a>
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
				> <a href="{{ url('mahasiswa/monitoring-skripsi/view-jadwal-sidang-proposal-mahasiswa') }}"><i class="fa fa-circle-o"></i>Proposal</a></li>

				<li
				@if($page == 'jadwal-sidang')
				{!! 'class="active"'!!}
				@endif
				> <a href="{{ url('mahasiswa/monitoring-skripsi/view-jadwal-sidang-skripsi-mahasiswa') }}"><i class="fa fa-circle-o"></i>Skripsi</a></li>


			</ul>
			</li>

			<li
			@if($page == 'hasil-sidang')
			{!! 'class="active"'!!}
			@endif
			>
			<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>Hasil Sidang</a>
			
			<ul class="treeview-menu">
				
				<li
				@if($page == 'hasil-sidang')
				{!! 'class="active"'!!}
				@endif
				> <a href="{{ url('mahasiswa/monitoring-skripsi/view-hasil-sidang-proposal-mahasiswa') }}"><i class="fa fa-circle-o"></i>Proposal</a></li>

				<li
				@if($page == 'hasil-sidang')
				{!! 'class="active"'!!}
				@endif
				> <a href="{{ url('mahasiswa/monitoring-skripsi/view-hasil-sidang-proposal-mahasiswa') }}"><i class="fa fa-circle-o"></i>Skripsi</a></li>


			</ul>
			</li>

			
			</ul>
			</li>
<!-- Akhir side bar monitoring skripsi harus ditutup dengan ul dan li jangan lupa -->