<!-- MONITORING SKRIPSI -->
<li>
 <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
    <ul class="treeview-menu">

    <li
      @if($page == 'KBK')
      {!! 'claass="active"'!!}
      @endif>

      <a href="{{url('karyawan/monitoring-skripsi/KBK')}}"><i class='fa fa-book'></i><span>Input KBK</span>
      </a>
    </li>

    <li
      @if($page == 'status')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/status')}}"><i class='fa fa-book'></i><span>Input Status</span>
      </a>
    </li>

    <li
      @if($page == 'skripsi')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/skripsi')}}"><i class='fa fa-book'></i><span>Data Skripsi</span>
      </a>
    </li>

    <li
      @if($page == 'konsultasi')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/konsultasi')}}"><i class='fa fa-book'></i><span>Konsultasi</span>
      </a>
    </li>

    <li
      @if($page == 'berkas')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/berkas')}}"><i class='fa fa-book'></i><span>Berkas</span>
      </a>
    </li>

    <li
      @if($page == 'manage-jadwal-sidang-proposal')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/manage-jadwal-sidang-proposal')}}"><i class='fa fa-book'></i><span>Jadwal Sidang Proposal</span>
      </a>
    </li>

    <li
      @if($page == 'manage-jadwal-sidang-skripsi')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/manage-jadwal-sidang-skripsi')}}"><i class='fa fa-book'></i><span>Jadwal Sidang Skripsi</span>
      </a>
    </li>

    <li
      @if($page == 'manage-hasil-sidang-proposal')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/manage-hasil-sidang-proposal')}}"><i class='fa fa-book'></i><span>Hasil Proposal </span>
      </a>
    </li>

    <li
      @if($page == 'manage-hasil-sidang-skripsi')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/manage-hasil-sidang-skripsi')}}"><i class='fa fa-book'></i><span>Hasil Skripsi </span>
      </a>
    </li>

    </ul>
</li>
<!-- Akhir side bar monitoring skripsi harus ditutup dengan ul dan li jangan lupa -->
