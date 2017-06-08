 <li class="treeview">

      <a href=""><i class='fa fa-users'></i> <span> Kurikulum</span></a>
      <ul class="treeview-menu">
            <li
            @if($page == 'kurikulum')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('karyawan/kurikulum/inputmatkul') }}"><i class='fa fa-book'> </i> <span> Input Mata Kuliah</span></a>
            <a href="{{ url('karyawan/kurikulum/mk-prodi') }}"><i class='fa fa-book'> </i> <span> Mata Kuliah Prodi</span></a>
            <a href="{{ url('karyawan/kurikulum/silabus') }}"><i class='fa fa-book'> </i> <span> Silabus</span></a>
            <a href="{{ url('karyawan/kurikulum/rps') }}"><i class='fa fa-book'> </i> <span> RPS</span></a>
            </li>
      </ul>
</li>