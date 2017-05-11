<!-- Contoh -->
<!-- <li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->
 <li
@if($page == 'input_dosen_mk')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('karyawan/krs-khs/input_dosen_mk') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Input Dosen Mata Kuliah</a>
</li>