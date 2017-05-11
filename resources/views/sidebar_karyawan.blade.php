<!-- Contoh -->
<!-- <li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->


<li class="treeview" id="scrollspy-components"
@if($page == 'mata-kuliah')
{!! 'class="active"'!!}
@endif
>
>
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