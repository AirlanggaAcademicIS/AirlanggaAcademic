<li
  @if($page == 'mahasiswa')
  {!! 'class="active"'!!}
  @endif
>
<a href="{{url('dosen/krs-khs/approve/view')}}"><i class='fa fa-users'></i><span>Mahasiswa Wali</span>
</a>
</li>

<li
@if($page == 'mk_diajar')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('dosen/krs-khs/mk_diajar') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Mata Kuliah diajar</a>
</li>
 

