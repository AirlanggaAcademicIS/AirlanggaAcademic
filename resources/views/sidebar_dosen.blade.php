<!-- Monitoring Skripsi -->
<li>
      <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
      <ul class="treeview-menu">
            <li
            @if($page == 'skripsi')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('dosen/monitoring-skripsi/skripsi') }}"><i class='fa fa-book'></i><span> Data Skripsi</span></a>
            </li>


            <li
            @if($page == 'konsultasi')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('dosen/monitoring-skripsi/konsultasi') }}"><i class='fa fa-book'></i><span> Konsultasi</span></a>
            </li>
      </ul>
</li>