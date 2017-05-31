<!-- Contoh -->
<!-- <li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>

<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->


<li
@if($page == 'AkunMahasiswa')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('karyawan/akun') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Akun Mahasiswa</a>
</li>
<li
@if($page == 'verifikasi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('karyawan/verifikasi') }}"><i class="fa fa-book" aria-hidden="true"></i>Verifikasi Mahasiswa</a>
</li>

</ul>
</li>
