<!-- Contoh -->
<!-- <li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->
 <li>
            <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
            <li
            @if($page == 'status')
            {!! 'class="active"'!!}
            @endif>

            <a href="{{ url('/karyawan/monitoring-skripsi/status') }}"><i class='fa fa-book'></i><span>status</span></a>
            </li>