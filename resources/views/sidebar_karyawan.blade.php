<li
    @if($page == 'mk_diajar')
    {!! 'class="active"'!!}
    @endif
>
<a href="{{ url('karyawan/krs-khs/input-dosen-mk/view') }}"><i class="fa fa-calculator" aria-hidden="true"></i>MK Diajar</a>
</li>

<li
    @if($page == 'mk_ditawarkan')
    {!! 'class="active"'!!}
    @endif
>
<a href="{{ url('karyawan/krs-khs/mk-ditawarkan/view') }}"><i class="fa fa-calculator" aria-hidden="true"></i>MK Ditawarkan</a>
</li>

<li
    @if($page == 'jadwal')
    {!! 'claass="active"'!!}
    @endif
>
<a href="{{url('karyawan/krs-khs/jadwal-kuliah/index')}}"><i class='fa fa-book'></i><span> Jadwal Kuliah</span>
  </a>
</li>

<li
    @if($page == 'ruang')
    {!! 'claass="active"'!!}
    @endif
>
<a href="{{url('karyawan/krs-khs/ruang/create')}}"><i class='fa fa-users'></i><span>Ruang</span>
</a>
</li>
<li class="treeview">
            <a href=""><i class='fa fa-book'></i> <span> Kurikulum</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->

            <li
            @if($page == 'kurikulum')
            {!! 'class="active"'!!}
            @endif
            >
            <!-- Href menuju ke url notulensi/notulensi rapat -->
          <a href="{{ url('karyawan/kurikulum/rps') }}"><i class='fa fa-book'></i> <span> RPS</span></a>
            <a href="{{ url('karyawan/kurikulum/silabus') }}"><i class='fa fa-book'></i> <span> Silabus</span></a>
            <a href="{{ url('karyawan/kurikulum/cp_program') }}"><i class='fa fa-book'></i> <span> Capaian Program</span></a>
          <a href="{{ url('karyawan/kurikulum/kodecppem') }}"><i class='fa fa-book'> </i> <span> Kode Capaian Pembelajaran</span></a>
          <a href="{{ url('karyawan/kurikulum/cp_pembelajaran') }}"><i class='fa fa-book'> </i> <span> Capaian Pembelajaran</span></a>
            </li>