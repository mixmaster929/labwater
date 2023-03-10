<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
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
                    </ul>
                </li>
            @endcan

            @can('product_access')
                <li class="nav-item">
                    <a href="{{ route("admin.companies.index") }}" class="nav-link {{ request()->is('admin/companies') || request()->is('admin/companies/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-shopping-basket nav-icon">

                        </i>
                        {{ trans('cruds.company.title') }}
                    </a>
                </li>
            @endcan

            @can('product_access')
                <li class="nav-item">
                    <a href="{{ route("admin.wellsites.index") }}" class="nav-link {{ request()->is('admin/wellsites') || request()->is('admin/wellsites/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-shopping-basket nav-icon">

                        </i>
                        {{ trans('cruds.wellsite.title') }}
                    </a>
                </li>
            @endcan

            @can('company_access')
                <li class="nav-item">
                    <a href="{{ route("admin.employees.index") }}" class="nav-link {{ request()->is('admin/employees') || request()->is('admin/employees/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-shopping-basket nav-icon">

                        </i>
                        {{ trans('cruds.employee.title') }}
                    </a>
                </li>
            @endcan

            @can('company_access')
                <li class="nav-item">
                    <a href="{{ route("admin.well_sites.index") }}" class="nav-link {{ request()->is('admin/well_sites') || request()->is('admin/well_sites/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-shopping-basket nav-icon">

                        </i>
                        {{ trans('cruds.wellsite.title') }}
                    </a>
                </li>
            @endcan

            @can('employee_access')
                <li class="nav-item">
                    <a href="{{ route("admin.customers.index") }}" class="nav-link {{ request()->is('admin/customers') || request()->is('admin/customers/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-shopping-basket nav-icon">

                        </i>
                        {{ trans('cruds.wellsite.title') }}
                    </a>
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