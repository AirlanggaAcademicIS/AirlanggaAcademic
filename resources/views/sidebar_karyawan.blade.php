<!-- Contoh -->
<!-- <li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->

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
	> <a href="{{ url('karyawan/monitoring-skripsi/manage-jadwal-sidang-proposal') }}"><i class="fa fa-circle-o"></i>Proposal</a></li>

	<!-- Sub menu jadwal sidang skripsi -->
	<li
	@if($page == 'jadwal-sidang-skripsi')
	{!! 'class="active"'!!}
	@endif
	> <a href="{{ url('karyawan/monitoring-skripsi/manage-jadwal-sidang-skripsi') }}"><i class="fa fa-circle-o"></i>Skripsi</a></li>


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
	> <a href="{{ url('karyawan/monitoring-skripsi/manage-hasil-sidang-proposal') }}"><i class="fa fa-circle-o"></i>Proposal</a></li>

	<!-- hasil sidang skripsi -->
	<li
	@if($page == 'hasil-sidang-skripsi')
	{!! 'class="active"'!!}
	@endif
	> <a href="{{ url('karyawan/monitoring-skripsi/manage-hasil-sidang-skripsi') }}"><i class="fa fa-circle-o"></i>Skripsi</a></li>


</ul>

</li>