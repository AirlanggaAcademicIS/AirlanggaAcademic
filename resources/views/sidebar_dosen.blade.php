<!-- Contoh -->
<!-- <li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->
<li
@if($page == 'silabus')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('dosen/kurikulum/silabus') }}"><i class="fa fa-book" aria-hidden="true"></i>Silabus</a>
</li>