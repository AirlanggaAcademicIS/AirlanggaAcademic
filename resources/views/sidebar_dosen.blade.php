<!-- Contoh -->
<!-- <li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->
	<li
	@if($page == 'rps')
	{!! 'class="active"'!!}
	@endif
	>

	<a href="{{ url('dosen/kurikulum/rps') }}"><i class='fa fa-book'></i> <span>RPS</span></a>

	</li>