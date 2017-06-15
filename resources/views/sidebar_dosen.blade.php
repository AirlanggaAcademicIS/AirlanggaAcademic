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
	@if($page == 'jadwal-sidang-proposal-dosen')
	{!! 'class="active"'!!}
	@endif
	> <a href="{{ url('dosen/monitoring-skripsi/view-jadwal-sidang-proposal-dosen') }}"><i class="fa fa-circle-o"></i>Proposal</a></li>

	<!-- Sub menu jadwal sidang skripsi -->
	<li
	@if($page == 'jadwal-sidang-skripsi-dosen')
	{!! 'class="active"'!!}
	@endif
	> <a href="{{ url('dosen/monitoring-skripsi/view-jadwal-sidang-skripsi-dosen') }}"><i class="fa fa-circle-o"></i>Skripsi</a></li>


</ul>

</li>

<li
@if($page == 'jadwal-sidang')
{!! 'class="active"'!!}
@endif
>
<a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i>Hasil Sidang</a>
<!-- sub menu jadwal -->
<ul class="treeview-menu">
	<!-- Sub menu jadwal sidang proposal -->
	<li
	@if($page == 'hasil-proposal-dosen')
	{!! 'class="active"'!!}
	@endif
	> <a href="{{ url('dosen/monitoring-skripsi/view-hasil-sidang-proposal-dosen') }}"><i class="fa fa-circle-o"></i>Proposal</a></li>

	<!-- Sub menu jadwal sidang skripsi -->
	<li
	@if($page == 'hasil-skripsi-dosen')
	{!! 'class="active"'!!}
	@endif
	> <a href="{{ url('dosen/monitoring-skripsi/view-hasil-sidang-skripsi-dosen') }}"><i class="fa fa-circle-o"></i>Skripsi</a></li>


</ul>

</li>