<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li>
                <select class="searchable-field form-control">

                </select>
            </li>
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('audit_log_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.audit-logs.index") }}" class="nav-link {{ request()->is('admin/audit-logs') || request()->is('admin/audit-logs/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-file-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.auditLog.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('master_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-align-justify nav-icon">

                        </i>
                        {{ trans('cruds.master.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('colour_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.colours.index") }}" class="nav-link {{ request()->is('admin/colours') || request()->is('admin/colours/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-cogs nav-icon">

                                    </i>
                                    {{ trans('cruds.colour.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('fabric_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.fabrics.index") }}" class="nav-link {{ request()->is('admin/fabrics') || request()->is('admin/fabrics/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-cogs nav-icon">

                                    </i>
                                    {{ trans('cruds.fabric.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('stock_point_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.stock-points.index") }}" class="nav-link {{ request()->is('admin/stock-points') || request()->is('admin/stock-points/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-cogs nav-icon">

                                    </i>
                                    {{ trans('cruds.stockPoint.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('account_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.accounts.index") }}" class="nav-link {{ request()->is('admin/accounts') || request()->is('admin/accounts/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-cogs nav-icon">

                                    </i>
                                    {{ trans('cruds.account.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>