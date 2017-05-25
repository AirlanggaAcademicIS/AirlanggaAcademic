		<li
                  @if($page == 'histori')
                  {!! 'claass="active"'!!}
                  @endif>
                <a href="{{url('mahasiswa/krs-khs/histori/view')}}"><i class='fa fa-users'></i> <span>Histori Nilai</span>
                </a>
                </li>

                <li
                  @if($page == 'khs')
                  {!! 'claass="active"'!!}
                  @endif>
                <a href="{{url('mahasiswa/krs-khs/khs/view')}}"><i class='fa fa-users'></i> <span>Kartu Hasil Studi</span>
                </a>
                </li>