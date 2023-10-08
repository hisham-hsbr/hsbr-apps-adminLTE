<!-- Brand Logo -->
<a href="/" class="brand-link">
    {{-- <a href="{{ asset('adminLinks/index3.html') }}" class="brand-link"> --}}
    {{-- <img src="{{ asset('adminLinks/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
    <x-app.application-logo-mini width="27" />
    {{-- <x-app.application-logo width="127" /> --}}
    <span class="brand-text font-weight-light">{{ $Application->data['app_name'] }}</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="
            @if (empty(Auth::user()->avatar)) {{ asset('/storage/images/avatars/avatar.png') }}
            @else
            {{ asset('/storage/' . Auth::user()->avatar) }} @endif
            "
                class="img-circle elevation-2" alt="User Image" width="35">


            {{-- if (file_exists(public_path() . '/images/' . $vid->image)) {
                    $img = $vid->image;
                } else {
                    $img = '/images/video-thumbnail.png';
                }  --}}

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
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/admin/dashboard" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin/test" class="nav-link {{ request()->is('admin/test*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Test
                        <span class="right badge badge-danger">New</span>
                    </p>
                </a>
            </li>
            @can('Menu Profile')
                <li class="nav-item">
                    <a href="{{ route('users.profile') }}"
                        class="nav-link {{ request()->is('admin/profile') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
            @endcan
            <li
                class="nav-item
                    {{ request()->is('admin/users*') ? 'menu-open' : '' }}
                    {{ request()->is('admin/settings*') ? 'menu-open' : '' }}
                    {{ request()->is('admin/roles*') ? 'menu-open' : '' }}
                    {{ request()->is('admin/permissions*') ? 'menu-open' : '' }}

                    {{-- {{ request()->is('admin/country*') ? 'menu-open' : '' }}
                    {{ request()->is('admin/education*') ? 'menu-open' : '' }}
                    {{ request()->is('admin/blood*') ? 'menu-open' : '' }}
                    {{ request()->is('admin/csdcity*') ? 'menu-open' : '' }} --}}
                ">
                @can('Menu Admin')
                    <a href="#"
                        class="nav-link
                    {{ request()->is('admin/users*') ? 'active' : '' }}
                    {{ request()->is('admin/settings*') ? 'active' : '' }}
                    {{ request()->is('admin/roles*') ? 'active' : '' }}
                    {{ request()->is('admin/permissions*') ? 'active' : '' }}

                    {{-- {{ request()->is('admin/country*') ? 'active' : '' }}
                    {{ request()->is('admin/education*') ? 'active' : '' }}
                    {{ request()->is('admin/blood*') ? 'active' : '' }}
                    {{ request()->is('admin/csdcity*') ? 'active' : '' }} --}}
                 ">
                        <i class="nav-icon {{ $AdminIcon }}"></i>
                        {{-- <i class="nav-icon fa-solid fa-hammer"></i> --}}
                        <p>
                            {{ $AdminName }}
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                @endcan
                <ul class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}">
                    @can('Menu User')
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}"
                                class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-users"></i>
                                <p>User</p>
                            </a>
                        </li>
                    @endcan
                    @can('Menu Settings')
                        <li class="nav-item">
                            <a href="{{ route('settings.index') }}"
                                class="nav-link {{ request()->is('admin/settings*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-screwdriver-wrench"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                    @endcan
                    @can('Menu Permission')
                        <li class="nav-item">
                            <a href="{{ route('permissions.index') }}"
                                class="nav-link {{ request()->is('admin/permissions*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-user-lock"></i>
                                <p class="">Permissions</p>
                            </a>
                        </li>
                    @endcan
                    @can('Menu Role')
                        <li class="nav-item">
                            <a href="{{ route('roles.index') }}"
                                class="nav-link {{ request()->is('admin/roles*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-user-group"></i>
                                <p class="">Roles</p>
                            </a>
                        </li>
                    @endcan

                </ul>
                <!-- Master Menu Start -->
            <li
                class="nav-item
                                    {{ request()->is('admin/country*') ? 'menu-open' : '' }}
                                    {{ request()->is('admin/education*') ? 'menu-open' : '' }}
                                    {{ request()->is('admin/blood*') ? 'menu-open' : '' }}
                                    {{ request()->is('admin/csdcity*') ? 'menu-open' : '' }}
                                    {{ request()->is('admin/division*') ? 'menu-open' : '' }}
                                    {{ request()->is('admin/sub-division*') ? 'menu-open' : '' }}
                                    {{ request()->is('admin/accounts*') ? 'menu-open' : '' }}
                                ">
                @can('Menu Master')
                    <a href="#"
                        class="nav-link
                                    {{ request()->is('admin/country*') ? 'active' : '' }}
                                    {{ request()->is('admin/education*') ? 'active' : '' }}
                                    {{ request()->is('admin/blood*') ? 'active' : '' }}
                                    {{ request()->is('admin/csdcity*') ? 'active' : '' }}
                                    {{ request()->is('admin/division*') ? 'active' : '' }}
                                    {{ request()->is('admin/sub-division*') ? 'active' : '' }}
                                    {{ request()->is('admin/accounts*') ? 'active' : '' }}
                                 ">
                        <i class="nav-icon fa-solid fa-landmark"></i>
                        <p>
                            Masters
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                @endcan
                <ul class="nav nav-treeview">
                    {{-- <ul class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}"> --}}
                    @can('Menu Country')
                        <li class="nav-item">
                            <a href="{{ route('country.index') }}"
                                class="nav-link {{ request()->is('admin/country*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-globe"></i>
                                <p>Country</p>
                            </a>
                        </li>
                    @endcan
                    @can('Menu Education')
                        <li class="nav-item">
                            <a href="{{ route('education.index') }}"
                                class="nav-link {{ request()->is('admin/education*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-graduation-cap"></i>
                                <p>Education</p>
                            </a>
                        </li>
                    @endcan
                    @can('Menu Blood')
                        <li class="nav-item">
                            <a href="{{ route('blood.index') }}"
                                class="nav-link {{ request()->is('admin/blood*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-droplet"></i>
                                <p class="">Blood</p>
                            </a>
                        </li>
                    @endcan
                    @can('Menu CSDCity')
                        <li class="nav-item">
                            <a href="{{ route('csdcity.index') }}"
                                class="nav-link {{ request()->is('admin/csdcity*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-mountain-city"></i>
                                <p class="">csdcity</p>
                            </a>
                        </li>
                    @endcan
                    @can('Menu Division')
                        <li class="nav-item">
                            <a href="{{ route('divisions.index') }}"
                                class="nav-link {{ request()->is('admin/divisions*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-mountain-city"></i>
                                <p class="">Division</p>
                            </a>
                        </li>
                    @endcan
                    @can('Menu Sub Division')
                        <li class="nav-item">
                            <a href="{{ route('sub-divisions.index') }}"
                                class="nav-link {{ request()->is('admin/sub-divisions*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-mountain-city"></i>
                                <p class="">Sub Division</p>
                            </a>
                        </li>
                    @endcan
                    @can('Menu Accounts')
                        <li class="nav-item">
                            <a href="{{ route('accounts.index') }}"
                                class="nav-link {{ request()->is('admin/accounts*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-mountain-city"></i>
                                <p class="">Account</p>
                            </a>
                        </li>
                    @endcan
                </ul>
                {{--
            </li> --}}
            </li>
            <!-- // Master Menu End -->

            <!-- Resume Menu Start -->
            <li
                class="nav-item
                                    {{ request()->is('admin/resume/education*') ? 'menu-open' : '' }}
                                    {{ request()->is('admin/resume/experience*') ? 'menu-open' : '' }}
                                    {{ request()->is('admin/resume/data*') ? 'menu-open' : '' }}
                                    {{ request()->is('admin/resume/data-images*') ? 'menu-open' : '' }}
                                ">
                @can('Menu Resume')
                    <a href="#"
                        class="nav-link
                                    {{ request()->is('admin/resume/education*') ? 'active' : '' }}
                                    {{ request()->is('admin/resume/experience*') ? 'active' : '' }}
                                    {{ request()->is('admin/resume/data*') ? 'active' : '' }}
                                    {{ request()->is('admin/resume/data-images*') ? 'active' : '' }}
                                 ">
                        <i class="nav-icon fa-solid fa-landmark"></i>
                        <p>
                            Resume
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                @endcan
                <ul class="nav nav-treeview">
                    {{-- <ul class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}"> --}}
                    @can('Menu Resume Education')
                        <li class="nav-item">
                            <a href="{{ route('education.index') }}"
                                class="nav-link {{ request()->is('admin/resume/education*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-globe"></i>
                                <p>Resume Education</p>
                            </a>
                        </li>
                    @endcan
                    @can('Menu Resume Experience')
                        <li class="nav-item">
                            <a href="{{ route('experience.index') }}"
                                class="nav-link {{ request()->is('admin/resume/experience*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-graduation-cap"></i>
                                <p>Resume Experience</p>
                            </a>
                        </li>
                    @endcan
                    @can('Menu Resume Data')
                        <li class="nav-item">
                            <a href="{{ route('data.index') }}"
                                class="nav-link {{ request()->is('admin/resume/data*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-globe"></i>
                                <p>Resume Data</p>
                            </a>
                        </li>
                    @endcan
                    @can('Menu Resume Data Images')
                        <li class="nav-item">
                            <a href="{{ route('data-images.index') }}"
                                class="nav-link {{ request()->is('admin/resume/data-images*') ? 'active' : '' }}">
                                <i class="nav-icon fa-solid fa-globe"></i>
                                <p>Resume Data Images</p>
                            </a>
                        </li>
                    @endcan
                </ul>
                {{--
            </li> --}}
            </li>
            <!-- // Resume Menu End -->



            <!-- Financial Menu Start -->

            <li
                class="nav-item
                    {{ request()->is('admin/financial-ledger*') ? 'menu-open' : '' }}
                    {{ request()->is('admin/csdcity*') ? 'menu-open' : '' }}
                ">
                @can('Menu Admin')
                    <a href="#"
                        class="nav-link
                    {{ request()->is('admin/financial-ledger*') ? 'active' : '' }}
                    {{ request()->is('admin/csdcity*') ? 'active' : '' }}
                 ">
                        <i class="nav-icon fa-solid fa-coins"></i>
                        <p>
                            Financials
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                @endcan
                <ul class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}">
                    <li
                        class="nav-item
                    {{ request()->is('admin/blood*') ? 'menu-open' : '' }}
                    {{ request()->is('admin/csdcity*') ? 'menu-open' : '' }}
                ">
                        @can('Menu Admin')
                            <a href="#"
                                class="nav-link
                    {{ request()->is('admin/blood*') ? 'active' : '' }}
                    {{ request()->is('admin/csdcity*') ? 'active' : '' }}
                 ">
                                <i class="nav-icon fa-solid fa-down-left-and-up-right-to-center"></i>
                                <p>
                                    Transection
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        @endcan
                        <ul class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}">
                            {{-- @can('Menu User')
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}"
                            class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                            <i class="nav-icon fa-solid fa-users"></i>
                            <p>User</p>
                            </a>
                    </li>
                    @endcan --}}
                            {{-- @can('Menu Role')
                            <li class="nav-item">
                                <a href="{{ route('roles.index') }}"
                    class="nav-link {{ request()->is('admin/roles*') ? 'active' : '' }}">
                    <i class="nav-icon fa-solid fa-user-group"></i>
                    <p class="">Roles</p>
                    </a>
            </li>
            @endcan --}}
                            <li
                                class="nav-item
                    {{ request()->is('admin/blood*') ? 'menu-open' : '' }}
                    {{ request()->is('admin/csdcity*') ? 'menu-open' : '' }}
                    ">
                                @can('Menu Admin')
                                    <a href="#"
                                        class="nav-link
                    {{ request()->is('admin/blood*') ? 'active' : '' }}
                    {{ request()->is('admin/csdcity*') ? 'active' : '' }}
                    ">
                                        <i class="nav-icon fa-solid fa-money-bills"></i>
                                        <p>
                                            Cash and Bank
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                @endcan
                                <ul class="nav nav-treeview">
                                    {{-- <ul class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}">
                    --}}
                                    @can('Menu Country')
                                        <li class="nav-item">
                                            <a href="{{ route('receipt.index') }}"
                                                class="nav-link {{ request()->is('admin/receipt*') ? 'active' : '' }}">
                                                <i class="nav-icon fa-solid fa-receipt"></i>
                                                <p>Receipts</p>
                                            </a>
                                        </li>
                                    @endcan
                                    @can('Menu Education')
                                        <li class="nav-item">
                                            <a href="{{ route('education.index') }}"
                                                class="nav-link {{ request()->is('admin/education*') ? 'active' : '' }}">
                                                <i class="nav-icon fa-solid fa-money-bill-wave"></i>
                                                <p>Cash Payment</p>
                                            </a>
                                        </li>
                                    @endcan
                                    {{-- @can('Menu Blood')
                                        <li class="nav-item">
                                            <a href="{{ route('blood.index') }}"
                    class="nav-link {{ request()->is('admin/blood*') ? 'active' : '' }}">
                    <i class="nav-icon fa-solid fa-droplet"></i>
                    <p class="">Blood</p>
                    </a>
            </li>
            @endcan --}}
                                </ul>
                            </li>
                        </ul>

                    </li>

                </ul>
                <ul class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}">
                    <li
                        class="nav-item
                                    {{ request()->is('admin/financial-ledger*') ? 'menu-open' : '' }}
                                    {{ request()->is('admin/csdcity*') ? 'menu-open' : '' }}
                                ">
                        @can('Menu Admin')
                            <a href="#"
                                class="nav-link
                                    {{ request()->is('admin/financial-ledger*') ? 'active' : '' }}
                                    {{ request()->is('admin/csdcity*') ? 'active' : '' }}
                                 ">
                                <i class="nav-icon fa-solid fa-book-open-reader"></i>
                                <p>
                                    Report
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        @endcan
                        <ul class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}">
                            @can('Menu User')
                                <li class="nav-item">
                                    <a href="financial-ledger/report"
                                        class="nav-link {{ request()->is('admin/financial-ledger*') ? 'active' : '' }}">
                                        <i class="nav-icon fa-solid fa-books"></i>
                                        <p>Financial Ledger</p>
                                    </a>
                                </li>
                            @endcan
                            {{-- @can('Menu Role')
                            <li class="nav-item">
                                <a href="{{ route('roles.index') }}"
                    class="nav-link {{ request()->is('admin/roles*') ? 'active' : '' }}">
                    <i class="nav-icon fa-solid fa-user-group"></i>
                    <p class="">Roles</p>
                    </a>
            </li>
            @endcan --}}
                            <li
                                class="nav-item
                                    {{ request()->is('admin/blood*') ? 'menu-open' : '' }}
                                    {{ request()->is('admin/csdcity*') ? 'menu-open' : '' }}
                                    ">
                                @can('Menu Admin')
                                    <a href="#"
                                        class="nav-link
                                    {{ request()->is('admin/blood*') ? 'active' : '' }}
                                    {{ request()->is('admin/csdcity*') ? 'active' : '' }}
                                    ">
                                        <i class="nav-icon fa-solid fa-money-bills"></i>
                                        <p>
                                            Cash and Bank Book
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                @endcan
                                <ul class="nav nav-treeview">
                                    {{-- <ul class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}">
                    --}}
                                    @can('Menu Country')
                                        <li class="nav-item">
                                            <a href="{{ route('country.index') }}"
                                                class="nav-link {{ request()->is('admin/country*') ? 'active' : '' }}">
                                                <i class="nav-icon fa-solid fa-money-bill-1-wave"></i>
                                                <p>Cash Book</p>
                                            </a>
                                        </li>
                                    @endcan
                                    @can('Menu Education')
                                        <li class="nav-item">
                                            <a href="{{ route('education.index') }}"
                                                class="nav-link {{ request()->is('admin/education*') ? 'active' : '' }}">
                                                <i class="nav-icon fa-solid fa-rug"></i>
                                                <p>Bank Book</p>
                                            </a>
                                        </li>
                                    @endcan
                                    {{-- @can('Menu Blood')
                                        <li class=" nav-item">
                                            <a href="{{ route('blood.index') }}"
                    class="nav-link {{ request()->is('admin/blood*') ? 'active' : '' }}">
                    <i class="nav-icon fa-solid fa-droplet"></i>
                    <p class="">Blood</p>
                    </a>
            </li>
            @endcan --}}
                                </ul>
                            </li>
                        </ul>
                    <li
                        class="nav-item
                                                            {{ request()->is('admin/blood*') ? 'menu-open' : '' }}
                                                            {{ request()->is('admin/csdcity*') ? 'menu-open' : '' }}
                                                            ">
                        @can('Menu Admin')
                            <a href="#"
                                class="nav-link
                                                            {{ request()->is('admin/blood*') ? 'active' : '' }}
                                                            {{ request()->is('admin/csdcity*') ? 'active' : '' }}
                                                            ">
                                <i class="nav-icon fa-solid fa-money-bills"></i>
                                <p>
                                    Final Accounts
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        @endcan
                        <ul class="nav nav-treeview">
                            {{-- <ul class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}">
                --}}
                            @can('Menu Country')
                                <li class="nav-item">
                                    <a href="{{ route('country.index') }}"
                                        class="nav-link {{ request()->is('admin/country*') ? 'active' : '' }}">
                                        <i class="nav-icon fa-solid fa-money-bill-1-wave"></i>
                                        <p>Trial Balance</p>
                                    </a>
                                </li>
                            @endcan
                            @can('Menu Education')
                                <li class="nav-item">
                                    <a href="{{ route('education.index') }}"
                                        class="nav-link {{ request()->is('admin/education*') ? 'active' : '' }}">
                                        <i class="nav-icon fa-solid fa-plus-minus"></i>
                                        <p>Profit and Loss</p>
                                    </a>
                                </li>
                            @endcan
                            @can('Menu Blood')
                                <li class=" nav-item">
                                    <a href="{{ route('blood.index') }}"
                                        class="nav-link {{ request()->is('admin/blood*') ? 'active' : '' }}">
                                        <i class="nav-icon fa-solid fa-scale-balanced"></i>
                                        <p class="">Balance Sheet</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- // Financial Menu End -->


            <!-- Inventrory Menu Start -->

            <li
                class="nav-item
                                        {{ request()->is('admin/blood*') ? 'menu-open' : '' }}
                                        {{ request()->is('admin/csdcity*') ? 'menu-open' : '' }}
                                    ">
                @can('Menu Admin')
                    <a href="#"
                        class="nav-link
                                        {{ request()->is('admin/blood*') ? 'active' : '' }}
                                        {{ request()->is('admin/csdcity*') ? 'active' : '' }}
                                     ">
                        <i class="nav-icon fa-solid fa-coins"></i>
                        <p>
                            Inventrory
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                @endcan
                <ul class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}">
                    <li
                        class="nav-item
                                        {{ request()->is('admin/blood*') ? 'menu-open' : '' }}
                                        {{ request()->is('admin/csdcity*') ? 'menu-open' : '' }}
                                    ">
                        @can('Menu Admin')
                            <a href="#"
                                class="nav-link
                                        {{ request()->is('admin/blood*') ? 'active' : '' }}
                                        {{ request()->is('admin/csdcity*') ? 'active' : '' }}
                                     ">
                                <i class="nav-icon fa-solid fa-down-left-and-up-right-to-center"></i>
                                <p>
                                    Transection
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                        @endcan
                        <ul class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}">
                            {{-- @can('Menu User')
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}"
                        class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-users"></i>
                        <p>User</p>
                        </a>
                </li>
                @endcan --}}
                            {{-- @can('Menu Role')
                            <li class="nav-item">
                                <a href="{{ route('roles.index') }}"
                class="nav-link {{ request()->is('admin/roles*') ? 'active' : '' }}">
                <i class="nav-icon fa-solid fa-user-group"></i>
                <p class="">Roles</p>
                </a>
        </li>
        @endcan --}}
                            <li
                                class="nav-item
                                        {{ request()->is('admin/blood*') ? 'menu-open' : '' }}
                                        {{ request()->is('admin/csdcity*') ? 'menu-open' : '' }}
                                        ">
                                @can('Menu Admin')
                                    <a href="#"
                                        class="nav-link
                                        {{ request()->is('admin/blood*') ? 'active' : '' }}
                                        {{ request()->is('admin/csdcity*') ? 'active' : '' }}
                                        ">
                                        <i class="nav-icon fa-solid fa-money-bills"></i>
                                        <p>
                                            Sales
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                @endcan
                                <ul class="nav nav-treeview">
                                    {{-- <ul class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}">
                --}}
                                    @can('Menu Country')
                                        <li class="nav-item">
                                            <a href="{{ route('country.index') }}"
                                                class="nav-link {{ request()->is('admin/country*') ? 'active' : '' }}">
                                                <i class="nav-icon fa-solid fa-receipt"></i>
                                                <p>Sales Voucher</p>
                                            </a>
                                        </li>
                                    @endcan
                                    @can('Menu Education')
                                        <li class="nav-item">
                                            <a href="{{ route('education.index') }}"
                                                class="nav-link {{ request()->is('admin/education*') ? 'active' : '' }}">
                                                <i class="nav-icon fa-solid fa-money-bill-wave"></i>
                                                <p>Sales Return</p>
                                            </a>
                                        </li>
                                    @endcan
                                    {{-- @can('Menu Blood')
                                        <li class="nav-item">
                                            <a href="{{ route('blood.index') }}"
                class="nav-link {{ request()->is('admin/blood*') ? 'active' : '' }}">
                <i class="nav-icon fa-solid fa-droplet"></i>
                <p class="">Blood</p>
                </a>
        </li>
        @endcan --}}
                                </ul>
                            </li>

                            <li
                                class="nav-item
                                                                {{ request()->is('admin/blood*') ? 'menu-open' : '' }}
                                                                {{ request()->is('admin/csdcity*') ? 'menu-open' : '' }}
                                                                ">
                                @can('Menu Admin')
                                    <a href="#"
                                        class="nav-link
                                                                {{ request()->is('admin/blood*') ? 'active' : '' }}
                                                                {{ request()->is('admin/csdcity*') ? 'active' : '' }}
                                                                ">
                                        <i class="nav-icon fa-solid fa-money-bills"></i>
                                        <p>
                                            Purchase
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                @endcan
                                <ul class="nav nav-treeview">
                                    {{-- <ul class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}">
                --}}
                                    @can('Menu Country')
                                        <li class="nav-item">
                                            <a href="{{ route('country.index') }}"
                                                class="nav-link {{ request()->is('admin/country*') ? 'active' : '' }}">
                                                <i class="nav-icon fa-solid fa-receipt"></i>
                                                <p>Purchase Voucher</p>
                                            </a>
                                        </li>
                                    @endcan
                                    @can('Menu Education')
                                        <li class="nav-item">
                                            <a href="{{ route('education.index') }}"
                                                class="nav-link {{ request()->is('admin/education*') ? 'active' : '' }}">
                                                <i class="nav-icon fa-solid fa-money-bill-wave"></i>
                                                <p>Purchase Return</p>
                                            </a>
                                        </li>
                                    @endcan
                                    {{-- @can('Menu Blood')
                                        <li class="nav-item">
                                            <a href="{{ route('blood.index') }}"
                class="nav-link {{ request()->is('admin/blood*') ? 'active' : '' }}">
                <i class="nav-icon fa-solid fa-droplet"></i>
                <p class="">Blood</p>
                </a>
        </li>
        @endcan --}}
                                </ul>
                            </li>

                        </ul>

                    </li>
                    <ul class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}">
                        <li
                            class="nav-item
                                                {{ request()->is('admin/blood*') ? 'menu-open' : '' }}
                                                {{ request()->is('admin/csdcity*') ? 'menu-open' : '' }}
                                            ">
                            @can('Menu Admin')
                                <a href="#"
                                    class="nav-link
                                                {{ request()->is('admin/blood*') ? 'active' : '' }}
                                                {{ request()->is('admin/csdcity*') ? 'active' : '' }}
                                             ">
                                    <i class="nav-icon fa-solid fa-book-open-reader"></i>
                                    <p>
                                        Report
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                            @endcan
                            <ul class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}">
                                @can('Menu User')
                                    <li class="nav-item">
                                        <a href="{{ route('users.index') }}"
                                            class="nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                                            <i class="nav-icon fa-solid fa-books"></i>
                                            <p>Stock Ledger</p>
                                        </a>
                                    </li>
                                @endcan
                                @can('Menu Role')
                                    <li class="nav-item">
                                        <a href="{{ route('roles.index') }}"
                                            class="nav-link {{ request()->is('admin/roles*') ? 'active' : '' }}">
                                            <i class="nav-icon fa-solid fa-user-group"></i>
                                            <p class="">Stock Valuation</p>
                                        </a>
                                    </li>
                                @endcan
                                <li
                                    class="nav-item
                                                {{ request()->is('admin/blood*') ? 'menu-open' : '' }}
                                                {{ request()->is('admin/csdcity*') ? 'menu-open' : '' }}
                                                ">
                                    @can('Menu Admin')
                                        <a href="#"
                                            class="nav-link
                                                {{ request()->is('admin/blood*') ? 'active' : '' }}
                                                {{ request()->is('admin/csdcity*') ? 'active' : '' }}
                                                ">
                                            <i class="nav-icon fa-solid fa-money-bills"></i>
                                            <p>
                                                Stock Book
                                                <i class="fas fa-angle-left right"></i>
                                            </p>
                                        </a>
                                    @endcan
                                    <ul class="nav nav-treeview">
                                        {{-- <ul
                                            class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}">
                            --}}
                                        @can('Menu Country')
                                            <li class="nav-item">
                                                <a href="{{ route('country.index') }}"
                                                    class="nav-link {{ request()->is('admin/country*') ? 'active' : '' }}">
                                                    <i class="nav-icon fa-solid fa-money-bill-1-wave"></i>
                                                    <p>Stock Moving</p>
                                                </a>
                                            </li>
                                        @endcan
                                        @can('Menu Education')
                                            <li class="nav-item">
                                                <a href="{{ route('education.index') }}"
                                                    class="nav-link {{ request()->is('admin/education*') ? 'active' : '' }}">
                                                    <i class="nav-icon fa-solid fa-rug"></i>
                                                    <p>Stock Ageing</p>
                                                </a>
                                            </li>
                                        @endcan
                                        {{-- @can('Menu Blood')
                                            <li class=" nav-item">
                                                <a href="{{ route('blood.index') }}"
                            class="nav-link {{ request()->is('admin/blood*') ? 'active' : '' }}">
                            <i class="nav-icon fa-solid fa-droplet"></i>
                            <p class="">Blood</p>
                            </a>
                    </li>
                    @endcan --}}
                                    </ul>
                                </li>
                            </ul>
                        <li
                            class="nav-item
                                                                        {{ request()->is('admin/blood*') ? 'menu-open' : '' }}
                                                                        {{ request()->is('admin/csdcity*') ? 'menu-open' : '' }}
                                                                        ">
                            @can('Menu Admin')
                                <a href="#"
                                    class="nav-link
                                                                        {{ request()->is('admin/blood*') ? 'active' : '' }}
                                                                        {{ request()->is('admin/csdcity*') ? 'active' : '' }}
                                                                        ">
                                    <i class="nav-icon fa-solid fa-money-bills"></i>
                                    <p>
                                        Order Management
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                            @endcan
                            <ul class="nav nav-treeview">
                                {{-- <ul class="nav nav-treeview {{ request()->is('admin/*') ? 'menu-open' : '' }}">
                --}}
                                @can('Menu Country')
                                    <li class="nav-item">
                                        <a href="{{ route('country.index') }}"
                                            class="nav-link {{ request()->is('admin/country*') ? 'active' : '' }}">
                                            <i class="nav-icon fa-solid fa-money-bill-1-wave"></i>
                                            <p>Sales Order</p>
                                        </a>
                                    </li>
                                @endcan
                                @can('Menu Education')
                                    <li class="nav-item">
                                        <a href="{{ route('education.index') }}"
                                            class="nav-link {{ request()->is('admin/education*') ? 'active' : '' }}">
                                            <i class="nav-icon fa-solid fa-plus-minus"></i>
                                            <p>Purchase Order</p>
                                        </a>
                                    </li>
                                @endcan
                                {{-- @can('Menu Blood')
                                    <li class=" nav-item">
                                        <a href="{{ route('blood.index') }}"
                class="nav-link {{ request()->is('admin/blood*') ? 'active' : '' }}">
                <i class="nav-icon fa-solid fa-scale-balanced"></i>
                <p class="">Balance Sheet</p>
                </a>
        </li>
        @endcan --}}
                            </ul>
                        </li>
                    </ul>
            </li>

            <!-- // Inventrory Menu End -->


    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->

<div class="sidebar-custom">
    <a href="#" class="btn btn-link"><i class="fas fa-cogs"></i></a>
    <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Help</a>
</div>
<!-- /.sidebar-custom -->
