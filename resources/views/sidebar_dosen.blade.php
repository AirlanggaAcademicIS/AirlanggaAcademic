<!-- Contoh -->
<<li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('/inventaris/index-peminjaman') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Peminjaman</a>
</li>

<<li
@if($page == 'penelitian')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('/dosen/penelitian') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Penelitian</a>
</li>