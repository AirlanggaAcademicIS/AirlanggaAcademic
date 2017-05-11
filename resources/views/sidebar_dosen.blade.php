
<!-- Contoh -->
<!-- <li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->
<li
            @if($page == 'jurnal')
            {!! 'class="active"'!!}
            @endif
            ><a href="{{url('/dosen/jurnal')}}"><i class="fa fa-calculator" aria-hidden="true"></i>Jurnal</a>
            </li>  