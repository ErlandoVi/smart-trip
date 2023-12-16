<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="{{ route('admin.profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">

            @can('user_management_access')
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs nav-icon"></i>
                        <p>
                        {{ __('User Management') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}" href="{{ route('admin.permissions.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Permissions') }}</a>
                            <a class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}" href="{{ route('admin.roles.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('Roles') }}</a>
                            <a class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('Users') }}</a>
                        </li>
                    </ul>
                </li>
            @endcan

            <li class="nav-item">
                <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-home"></i>
                    <p>
                        {{ __('Dashboard') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-suitcase nav-icon"></i>
                    <p>
                    {{ __('Package') }}
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('admin.packages.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-suitcase"></i>
                            <p>
                                {{ __('Packages') }}
                            </p>
                        </a>
                        <a href="{{ route('admin.packageTypes.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-suitcase"></i>
                            <p>
                                {{ __('Package Type') }}
                            </p>
                        </a>
                        <a href="{{ route('admin.packageContents.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-suitcase"></i>
                            <p>
                                {{ __('Package Content') }}
                            </p>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- <li class="nav-item">
                <a href="{{ route('admin.packages.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-suitcase"></i>
                    <p>
                        {{ __('Packages') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.packageTypes.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-suitcase"></i>
                    <p>
                        {{ __('Package Type') }}
                    </p>
                </a>
            </li> --}}

            <li class="nav-item">
                <a href="{{ route('admin.bookings.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-book"></i>
                    <p>
                        {{ __('Booking') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.events.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-calendar"></i>
                    <p>
                        {{ __('Event') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.governments.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-building"></i>
                    <p>
                        {{ __('Government') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.pics.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-address-book"></i>
                    <p>
                        {{ __('Pic') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.statuses.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-rss "></i>
                    <p>
                        {{ __('Status') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.schedules.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-calendar-plus "></i>
                    <p>
                        {{ __('Schedule') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.partnerships.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-users "></i>
                    <p>
                        {{ __('Partnership') }}
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->