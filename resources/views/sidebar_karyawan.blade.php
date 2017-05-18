<!-- Contoh -->
<!-- <li
@if($page == 'transaksi')
{!! 'class="active"'!!}
@endif
>
<<<<<<< HEAD
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
		<li
		@if($page == 'skripsi')
		{!! 'claass="active"'!!}
		@endif>

		<a href="{{url('karyawan/monitoring-skripsi/KBK')}}"><i class='fa fa-book'></i><span> KBK</span>
		</li>
		<li
		@if($page == 'skripsi')
		{!! 'class="active"'!!}
		@endif>

		<a href="{{ url('karyawan/monitoring-skripsi/skripsi') }}"><i class='fa fa-book'></i><span> Data Skripsi</span></a>
		
	</ul>
</li>

<li>
<a href="{{ url('/inventaris/index-peminjaman') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Inventaris</a>
<ul class="treeview-menu">
    <!-- Sidebarnya ditaruh dibawah sini -->
        <li><a href="<?php echo e(url('/index-asset')); ?>">all asset</a></li>
        <li><a href="<?php echo e(url('/inventaris/index-peminjaman')); ?>">peminjaman</a></li>
        <li><a href="<?php echo e(url('/index-maintenance')); ?>">maintenance</a></li>
    </ul>
</li>
>>>>>>> b9b8998391cda319ee7e983143468250fe40d3a5
