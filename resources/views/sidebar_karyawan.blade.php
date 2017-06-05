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
