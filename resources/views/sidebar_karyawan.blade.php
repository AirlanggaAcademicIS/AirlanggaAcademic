<!-- Contoh -->
<li
@if($page == 'asset')
{!! 'class="active"'!!}
@endif
>
<a href="{{ url('/inventaris/asset') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Inventaris</a>
<ul class="treeview-menu">

<li><a href="{{ url('/inventaris/asset') }}">all asset</a></li>


</ul>
</li>