 <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif
                <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            @if(Auth::user()->role == 'karyawan')
            @include('sidebar_karyawan')
            @elseif(Auth::user()->role == 'mahasiswa')
            @include('sidebar_mahasiswa')
            @else
            @include('sidebar_dosen')
            @endif
        </ul>
    </section>
</aside>
