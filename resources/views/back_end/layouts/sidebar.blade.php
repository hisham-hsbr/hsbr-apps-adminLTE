<!-- Brand Logo -->
<a href="/" class="brand-link">
    <x-app.application-logo-mini width="27" />
    <x-app.application-logo-gray width="72" />
    {{-- <span class="brand-text font-weight-light">{{ $Application->data['app_name'] }}</span> --}}
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <x-user.user-profile-image />
        </div>
        <div class="info">
            <a href="/admin/dashboard" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar nav-compact nav-child-indent flex-column" data-widget="treeview"
            role="menu" data-accordion="false">
            {{-- Dashboard --}}
            <x-sidebar.sidebar-nav-level head="Dashboard" href="{{ route('users.index') }}" menu_open=""
                active="{{ request()->is('admin/dashboard') ? 'active' : '' }}" menu_icon="fa fa-folder-open"
                drop_icon="" />

            <x-sidebar.sidebar-nav-header head="Admin Section" />


            {{-- Masters --}}
            <x-sidebar.sidebar-nav-level head="Masters" href="#"
                menu_open="{{ request()->is('admin/masters*') ? 'menu-open' : '' }}"
                active="{{ request()->is('admin/masters/*') ? 'active' : '' }}" menu_icon="fa fa-folder-open"
                drop_icon="fas fa-angle-left">
                {{-- Menu User --}}
                <x-sidebar.sidebar-nav-multi-level head="Users" href="{{ route('users.index') }}" menu_open=""
                    active="{{ request()->is('admin/masters/users*') ? 'active' : '' }}" menu_icon="fa fa-users"
                    drop_icon="" />
                {{-- Menu Blood --}}
                <x-sidebar.sidebar-nav-multi-level head="Bloods" href="{{ route('bloods.index') }}" menu_open=""
                    active="{{ request()->is('admin/masters/bloods*') ? 'active' : '' }}" menu_icon="fa fa-tint"
                    drop_icon="" />
            </x-sidebar.sidebar-nav-level>

            {{-- Masters --}}
            <x-sidebar.sidebar-nav-level head="Users Management" href="#"
                menu_open="{{ request()->is('admin/users-management*') ? 'menu-open' : '' }}"
                active="{{ request()->is('admin/users-management/*') ? 'active' : '' }}" menu_icon="fa fa-folder-open"
                drop_icon="fas fa-angle-left">
                {{-- Menu User --}}
                <x-sidebar.sidebar-nav-multi-level head="Roles" href="{{ route('roles.index') }}" menu_open=""
                    active="{{ request()->is('admin/users-management/roles*') ? 'active' : '' }}"
                    menu_icon="fa fa-user-secret" drop_icon="" />
                {{-- Menu Blood --}}
                <x-sidebar.sidebar-nav-multi-level head="Permission" href="{{ route('bloods.index') }}" menu_open=""
                    active="{{ request()->is('admin/users-management/bloods*') ? 'active' : '' }}"
                    menu_icon="fa fa-lock" drop_icon="" />
            </x-sidebar.sidebar-nav-level>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->

<div class="sidebar-custom">
    <a href="#" class="btn btn-link"><i class="fas fa-cogs"></i></a>
    <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Help</a>
</div>
<!-- /.sidebar-custom -->
