<<<<<<< HEAD
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
          <a href="{{ url('mahasiswa/kurikulum/rps') }}"><i class='fa fa-book'></i> <span> RPS</span></a>
            <a href="{{ url('mahasiswa/kurikulum/silabus') }}"><i class='fa fa-book'></i> <span> Silabus</span></a>
            <a href="{{ url('mahasiswa/kurikulum/cp_program') }}"><i class='fa fa-book'></i> <span> Capaian Program</span></a>
          <a href="{{ url('mahasiswa/kurikulum/kodecppem') }}"><i class='fa fa-book'> </i> <span> Kode Capaian Pembelajaran</span></a>
          <a href="{{ url('mahasiswa/kurikulum/cp_pembelajaran') }}"><i class='fa fa-book'> </i> <span> Capaian Pembelajaran</span></a>
            </li>
=======
>>>>>>> cb89a76fe2b762f6a2c5f46b83efdd524bb32608
