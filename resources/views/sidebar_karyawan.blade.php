<li> 
<a href="{{ url('/inventaris/index-peminjaman') }}"><i class="fa fa-calculator" aria-hidden="true"></i>Inventaris</a> 
<ul class="treeview-menu"> 
    <!-- Sidebarnya ditaruh dibawah sini --> 
        <li><a href={{url('/inventaris/asset')}}>all asset</a></li> 
        <li><a href="<?php echo e(url('/inventaris/index-peminjaman')); ?>">peminjaman</a></li> 
        <li><a href="<?php echo e(url('/index-maintenance')); ?>">maintenance</a></li> 
    </ul> 
</li>