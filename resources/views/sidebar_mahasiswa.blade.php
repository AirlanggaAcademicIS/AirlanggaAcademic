<li class="treeview">

      <a href=""><i class='fa fa-users'></i> <span> Kurikulum</span></a>
      <ul class="treeview-menu">
            <li
            @if($page == 'kurikulum')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('mahasiswa/kurikulum/silabus') }}"><i class='fa fa-book'></i> <span> Silabus</span></a>
            <a href="{{ url('mahasiswa/kurikulum/rps') }}"><i class='fa fa-book'></i> <span> RPS</span></a>
            <a href="{{ url('mahasiswa/kurikulum/cp_program') }}"><i class='fa fa-book'></i> <span> Capaian Program</span></a>
            <a href="{{ url('mahasiswa/kurikulum/capaian-pembelajaran') }}"><i class='fa fa-book'> </i> <span> Capaian Pembelajaran</span></a>
            <a href="{{ url('mahasiswa/kurikulum/elearning') }}"><i class='fa fa-book'> </i> <span> E-Learning</span></a>
            </li>
      </ul>
</li>