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
	@if($page == 'jadwal-sidang')
	{!! 'class="active"'!!}
	@endif
	> <a href="#"><i class="fa fa-circle-o"></i>Proposal</a>/li>

	<!-- Sub menu jadwal sidang skripsi -->
	<li
	@if($page == 'jadwal-sidang')
	{!! 'class="active"'!!}
	@endif
	> <a href="#"><i class="fa fa-circle-o"></i>Skripsi</a>/li>


</ul>

</li>