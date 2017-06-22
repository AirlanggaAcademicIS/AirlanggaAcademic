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
      @if($page == 'form_usulan')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/form_usulan')}}"><i class='fa fa-download'></i><span>Form Usulan</span>
      </a>
    </li>

    <li
      @if($page == 'skripsi')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/skripsi')}}"><i class='fa fa-id-card'></i><span>Data Skripsi</span>
      </a>
    </li>

    <li
      @if($page == 'konsultasi')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/konsultasi')}}"><i class='fa fa-handshake-o'></i><span>Konsultasi</span>
      </a>
    </li>

    <li
      @if($page == 'berkas')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/berkas')}}"><i class='fa fa-file-word-o '></i><span>Berkas</span>
      </a>
    </li>

    <li
      @if($page == 'jadwal-sidang')
      {!! 'class="active"'!!}
      @endif
      >
      <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>Jadwal Sidang</a>
      
      <ul class="treeview-menu">
        
      <li
      @if($page == 'manage-jadwal-sidang-proposal')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/manage-jadwal-sidang-proposal')}}"><i class='fa fa-circle-o'></i><span>Jadwal Sidang Proposal</span>
      </a>
      </li>

      <li
      @if($page == 'manage-jadwal-sidang-skripsi')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/manage-jadwal-sidang-skripsi')}}"><i class='fa fa-circle-o'></i><span>Jadwal Sidang Skripsi</span>
      </a> 
      </li>


      </ul>
    </li>

      <li
      @if($page == 'hasil-sidang')
      {!! 'class="active"'!!}
      @endif
      >
      <a href="#"><i class="fa fa-certificate" aria-hidden="true"></i>Hasil Sidang</a>
      
      <ul class="treeview-menu">
        
      <li
      @if($page == 'manage-hasil-sidang-proposal')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/manage-hasil-sidang-proposal')}}"><i class='fa fa-circle-o'></i><span>Hasil Proposal </span>
      </a>
      </li>

      <li
      @if($page == 'manage-hasil-sidang-skripsi')
      {!! 'claass="active"'!!}
      @endif>
      <a href="{{url('karyawan/monitoring-skripsi/manage-hasil-sidang-skripsi')}}"><i class='fa fa-circle-o'></i><span>Hasil Skripsi </span>
      </a>
      </li>


      </ul>
      </li>


    </ul>
</li>
<!-- Akhir side bar monitoring skripsi harus ditutup dengan ul dan li jangan lupa -->
