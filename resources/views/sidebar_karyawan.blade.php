 <li class="treeview">

      <a href=""><i class='fa fa-users'></i> <span> Kurikulum</span></a>
      <ul class="treeview-menu">
            <li
            @if($page == 'kurikulum')
            {!! 'class="active"'!!}
            @endif
            >
            <a href="{{ url('dosen/kurikulum/kodecppem') }}"><i class='fa fa-book'> </i>
            <span> Kode Capaian Pembelajaran</span></a>
            <a href="{{ url('karyawan/kurikulum/inputmatkul') }}"><i class='fa fa-book'> </i> 
            <span> Input Mata Kuliah</span></a>
            <a href="{{ url('karyawan/kurikulum/mk-prodi') }}"><i class='fa fa-book'> </i> 
            <span> Input Matkul Prodi</span></a>
            </li>
      </ul>
</li>