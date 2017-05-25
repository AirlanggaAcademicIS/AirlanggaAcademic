<!-- Contoh -->
<li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li>

			<li
            @if($page == 'penelitian')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url mahasiswa/biodata -->
            <a href="{{ url('/mahasiswa/penelitian') }}"><i class='fa fa-book'></i> <span> Penelitian</span></a>
          
            </li>