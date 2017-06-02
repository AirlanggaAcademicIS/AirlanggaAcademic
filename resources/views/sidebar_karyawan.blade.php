<!-- Contoh -->
<!-- <li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('transaksi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Transaksi</a>
</li> -->
<li>
            <a href=""><i class='fa fa-users'></i> <span> Notulensi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <li
            @if($page == 'notulensi')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url notulensi/notulensi rapat -->
            <a href="#"><i class='fa fa-book'></i> <span>Undangan</span></a>
            <a href="{{url('notulensi')}}"><i class='fa fa-book'></i> <span>Notulensi</span></a>
                 <!--  <a href="#"><i class='fa fa-book'></i> <span>Kehadiran Rapat</span></a> -->
            <a href="#"><i class='fa fa-book'></i> <span>Kalender</span></a>
            </li>
