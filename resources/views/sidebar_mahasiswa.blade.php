<!-- Contoh -->
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
	@if($page == 'jadwal-sidang-proposal-mahasiswa')
	{!! 'class="active"'!!}
	@endif
	> <a href="{{ url('mahasiswa/monitoring-skripsi/view-jadwal-sidang-proposal-mahasiswa') }}"><i class="fa fa-circle-o"></i>Proposal</a></li>

	<!-- Sub menu jadwal sidang skripsi -->
	<li
	@if($page == 'jadwal-sidang-skripsi-mahasiswa')
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
<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i>Hasil Sidang</a>
<!-- sub menu -->
<ul class="treeview-menu">
	<!-- hasil sidang proposal -->
	<li
	@if($page == 'hasil-sidang-proposal')
	{!! 'class="active"'!!}
	@endif
	> <a href="{{ url('mahasiswa/monitoring-skripsi/view-hasil-sidang-proposal-mahasiswa') }}"><i class="fa fa-circle-o"></i>Proposal</a></li>

	<!-- hasil sidang skripsi -->
	<li
	@if($page == 'jadwal-sidang-skripsi')
	{!! 'class="active"'!!}
	@endif
	> <a href="{{ url('mahasiswa/monitoring-skripsi/view-hasil-sidang-skripsi-mahasiswa') }}"><i class="fa fa-circle-o"></i>Skripsi</a></li>


</ul>

</li>