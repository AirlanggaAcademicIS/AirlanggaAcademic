      <li class="treeview">
            <a href=""><i class='fa fa-circle'></i> <span> Kurikulum</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
                  <li
                  @if($page == 'kurikulum')
                  {!! 'class="active"'!!}
                  @endif
                  >
                        <!-- Href menuju ke url notulensi/notulensi rapat -->
                        <a href="{{ url('dosen/kurikulum/rps') }}"><i class='fa fa-book'></i> <span> RPS</span></a>
                        <a href="{{ url('dosen/kurikulum/silabus') }}"><i class='fa fa-book'></i> <span> Silabus</span></a>
                        <a href="{{ url('dosen/kurikulum/cp_program') }}"><i class='fa fa-book'></i> <span> Capaian Program</span></a>
                        <a href="{{ url('dosen/kurikulum/kodecppem') }}"><i class='fa fa-book'> </i> <span> Kode Capaian Pembelajaran</span></a>
                        <a href="{{ url('dosen/kurikulum/cp_pembelajaran') }}"><i class='fa fa-book'> </i> <span> Capaian Pembelajaran</span></a>
                  </li>
            </ul>
      </li>

	<li>
            <a href=""><i class='fa fa-users'></i> <span> Notulensi</span></a>
            <ul class="treeview-menu">
            <!-- Sidebarnya ditaruh dibawah sini -->
                  <li
                  @if($page == 'notulensi')
                  {!! 'class="active"'!!}
                  @endif
                  >
                        <a href="{{ url('undangan') }}"><i class='fa fa-book'></i> <span>Undangan</span></a>
                        <a href="{{ url('notulensi') }}"><i class='fa fa-book'></i> <span>Notulensi</span></a>
                        <a href="#"><i class='fa fa-book'></i> <span>Kalender</span></a>
                  </li>
            </ul>
      </li>
      <li>
            <a href=""><i class='fa fa-users'></i> <span> Notulensi</span></a>
            <ul class="treeview-menu">
                  <li
                  @if($page == 'notulen')
                  {!! 'class="active"'!!}
                  @endif
                  >
                        <a href="#"><i class='fa fa-book'></i> <span>Undangan</span></a>
                        <a href="#"><i class='fa fa-book'></i> <span>Notulensi</span></a>
                        <a href="#"><i class='fa fa-book'></i> <span>Kalender</span></a>
                  </li>
                  
                  <li
                  @if($page == 'konferensi')
                  {!! 'class="active"'!!}
                  @endif
                  >
                        <a href="{{ url('/dosen/konferensi') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Konferensi</a>
                  </li> 


                  <li
                  @if($page == 'penelitian')
                  {!! 'class="active"'!!}
                  @endif
                  >
                        <a href="{{ url('/dosen/penelitian') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Penelitian</a>
                  </li>

                  <li
                  @if($page == 'pengmas')
                  {!! 'class="active"'!!}
                  @endif
                  >
                        <a href="{{ url('/dosen/pengmas') }}"><i class="fa fa-calculator" aria-hidden="true"></i> Pengmas</a>
                  </li> 

			<li
                  @if($page == 'jurnal')
                  {!! 'class="active"'!!}
                  @endif
                        ><a href="{{url('/dosen/jurnal')}}"><i class="fa fa-calculator" aria-hidden="true"></i> Jurnal</a>
                  </li>  

                  <li
                  @if($page == 'notulensi')
                  {!! 'class="active"'!!}
                  @endif
                  >
                        <a href="{{ url('kalender') }}"><i class='fa fa-book'></i> <span>Kalender</span></a>
                  </li>
            </ul>
      </li>
      <li>
            <a href=""><i class='fa fa-users'></i> <span> Monitoring Skripsi</span></a>
            <ul class="treeview-menu">
                  <li>
                        <a href="{{ url('dosen/monitoring-skripsi/skripsi') }}"><i class='fa fa-book'></i><span> Data Skripsi</span></a>
                  </li>
            </ul>
            <li
            @if($page == 'skripsi')
            {!! 'class="active"'!!}
            @endif>
                  <a href="{{ url('/inventaris/index-peminjaman') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Peminjaman</a>
            </li>
      </li>

      <li>
            <a href=""><i class='fa fa-users'></i> <span> Pengelolaan Kegiatan </span></a>
            <ul class="treeview-menu">
      <!-- Sidebarnya ditaruh dibawah sini -->
                  <li
                  @if($page == 'dokumentasi')
                  {!! 'class="active"'!!}
                  @endif>

                        <a href="{{ url('dosen/pengelolaan-kegiatan/dokumentasi') }}"><i class='fa fa-book'></i><span> View Dokumentasi </span></a>
                  </li>
            </ul>
      </li>

