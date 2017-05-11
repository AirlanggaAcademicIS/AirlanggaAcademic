<!-- Contoh -->
<!-- <li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->

<li>
<a href=""><i class='fa fa-book'></i> <span> Kurikulum</span></a>
<ul class="treeview-menu">
</li>

<li
@if($page == 'kode')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('dosen/kurikulum/kodecppem') }}"><i class="fa fa-book" aria-hidden="true"></i>Kode CP Pembelajaran</a>
</li>