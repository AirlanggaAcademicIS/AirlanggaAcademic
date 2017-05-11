<!-- Contoh -->
<!-- <li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->
 <li
            @if($page == 'PermohonanRuang')
            {!! 'class="active"'!!}
            @endif
            >
            
            <a href="{{ url('karyawan/PermohonanRuang') }}"><i class='fa fa-book'></i> <span>Permohonan Ruang</span></a>
            </li>  
            </ul>
            </li>