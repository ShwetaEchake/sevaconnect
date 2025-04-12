<header class="main-nav">
    <nav class="h-100">
        <div class="main-navbar h-100">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav" class="h-100">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    {{-- <li class="sidebar-main-title">
                        <div>
                            <h6>General</h6>
                        </div>
                    </li> --}}

                        <li class="dropdown">
                            <a class="nav-link menu-title link-nav" href="{{route('admin.dashboard') }}">
                                <i data-feather="home"></i><span>Dashboard</span></a>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link menu-title" href="javascript:void(0)">
                                <i data-feather="user"></i><span>User Management</span>
                            </a>
                            <ul class="nav-submenu menu-content">
                                <li><a href="{{ route('users.index') }}">Users</a></li>
                                <li><a href="{{ route('roles.index') }}">Roles </a></li>
                            </ul>
                        </li>

                            <li class="dropdown">
                                <a class="nav-link menu-title" href="javascript:void(0)">
                                    <i data-feather="list"></i><span>Masters</span>
                                </a>
                                <ul class="nav-submenu menu-content">
                                    {{-- <li><a href="{{route('donationmaster') }}">Donation Master</a></li> --}}
                                    {{-- <li><a href="{{route('volunteer_master') }}">Volunteer Master</a></li> --}}
                                    {{-- <li><a href="{{route('charity_master') }}">Charity Master</a></li> --}}
                                    <li><a href="{{route('sector_master') }}">Sector Master</a></li>
                                    <li><a href="{{route('sub_sector_master') }}">SubSector Master</a></li>
                                    <li><a href="{{route('event_master') }}">Event Master</a></li>
                                    <li><a href="{{route('connectstories_master')}}">Connect-Stories Master</a></li>

                                </ul>
                            </li>

                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{ request()->routeIs('individual_list') ? 'active-bg' : '' }}" href="{{ route('individual_list') }}">
                                    <i data-feather="book"></i><span>Individual</span>
                                </a>
                            </li>


                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{ request()->routeIs('recommendlist_master') ? 'active-bg' : '' }}" href="{{ route('recommendlist_master') }}">
                                    <i data-feather="book"></i><span>Social Organization</span>
                                </a>
                            </li>

                           

                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{ request()->routeIs('independent_org_list') ? 'active-bg' : '' }}" href="{{route('independent_org_list')}}">
                                    <i data-feather="book"></i><span>Independent Org</span>
                                </a>
                            </li>




                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{ request()->routeIs('so_evaluation_master') ? 'active-bg' : '' }}" href="{{ route('so_evaluation_master') }}">
                                    <i data-feather="book"></i><span>SO Evaluation Form List</span>
                                </a>
                            </li>

                            {{-- <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{ request()->routeIs('soevaluation_pending') ? 'active-bg' : '' }}" href="{{ route('soevaluation_pending') }}">
                                    <i data-feather="book"></i><span>SO Pending List</span>
                                </a>
                            </li> --}}

                            {{-- <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{ request()->routeIs('evaluation_status') ? 'active-bg' : '' }}" href="{{ route('evaluation_status') }}">
                                    <i data-feather="book"></i><span>SO Approve List</span>
                                </a>
                            </li> --}}

                            {{-- <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{ request()->routeIs('soevaluation_reject') ? 'active-bg' : '' }}" href="{{ route('soevaluation_reject') }}">
                                    <i data-feather="book"></i><span>SO Reject List</span>
                                </a>
                            </li> --}}

                            <li class="dropdown">
                                <a class="nav-link menu-title link-nav {{ request()->routeIs('onboard_form_master') ? 'active-bg' : '' }}" href="{{ route('onboard_form_master') }}">
                                    <i data-feather="book"></i><span>Onboard Form</span>
                                </a>
                            </li>
                            @can('employees.view')
                        <li class="dropdown">
                            <a class="nav-link menu-title" href="javascript:void(0)">
                                <i data-feather="users"></i><span>Employees</span>
                            </a>
                            <ul class="nav-submenu menu-content">
                                @can('employees.create')
                                    <li><a href="{{ route('employees.create') }}">Add </a></li>
                                @endcan
                                @can('employees.view')
                                    <li><a href="{{ route('employees.index') }}">Employees List </a></li>
                                @endcan
                            </ul>
                        </li>
                    @endcan


                    @can('manual-attendance.view')
                        <li class="dropdown">
                            <a class="nav-link menu-title link-nav {{ request()->routeIs('punches.index') ? 'active-bg' : '' }}" href="{{ route('punches.index') }}">
                                <i data-feather="cpu"></i><span>Manual Attendance</span>
                            </a>
                        </li>
                    @endcan


                    @can('apply-leaves.view')
                        <li class="dropdown">
                            <a class="nav-link menu-title" href="javascript:void(0)">
                                <i data-feather="file-text"></i><span>Apply Leaves</span>
                            </a>
                            <ul class="nav-submenu menu-content">
                                <li><a href="{{ route('leave-requests.index', ['page_type'=> 'full_day']) }}">Full Day </a></li>
                                <li><a href="{{ route('leave-requests.index', ['page_type'=> 'half_day']) }}">Half Day </a></li>
                                <li><a href="{{ route('leave-requests.index', ['page_type'=> 'outpost']) }}">Outpost </a></li>
                            </ul>
                        </li>
                    @endcan


                    @can('apply-medical-leaves.view')
                        <li class="dropdown">
                            <a class="nav-link menu-title" href="javascript:void(0)">
                                <i data-feather="file-text"></i><span>Apply Medical Leaves</span>
                            </a>
                            <ul class="nav-submenu menu-content">
                                <li><a href="{{ route('leave-requests.active-medical-leave') }}">Unapproved Leaves </a></li>
                                <li><a href="{{ route('leave-requests.completed-medical-leave') }}">Approved Leaves </a></li>
                            </ul>
                        </li>
                    @endcan


                    @can('leave-application.pending')
                        <li class="dropdown">
                            <a class="nav-link menu-title" href="javascript:void(0)">
                                <i data-feather="file-text"></i><span>Leave Applications</span>
                            </a>
                            <ul class="nav-submenu menu-content">
                                @can('leave-application.pending')
                                    <li><a href="{{ route('leave-requests.application', ['page_type'=> 'pending']) }}">Pending </a></li>
                                @endcan
                                @can('leave-application.approve')
                                    <li><a href="{{ route('leave-requests.application', ['page_type'=> 'approved']) }}">Approved </a></li>
                                @endcan
                                @can('leave-application.reject')
                                    <li><a href="{{ route('leave-requests.application', ['page_type'=> 'rejected']) }}">Rejected </a></li>
                                @endcan
                            </ul>
                        </li>
                    @endcan


                    @can('roster.view')
                        <li class="dropdown">
                            <a class="nav-link menu-title link-nav {{ request()->routeIs('rosters.index') ? 'active-bg' : '' }}" href="{{ route('rosters.index') }}">
                                <i data-feather="repeat"></i><span>Employee Roster</span>
                            </a>
                        </li>
                    @endcan


                    @can('reports.month-wise')
                        <li class="dropdown">
                            <a class="nav-link menu-title" href="javascript:void(0)">
                                <i data-feather="layout"></i><span>Reports</span>
                            </a>
                            <ul class="nav-submenu menu-content">
                                @can('reports.month-wise')
                                    <li><a href="">Month wise report </a></li>
                                @endcan
                                @can('reports.muster')
                                    <li><a href="">Muster report </a></li>
                                @endcan
                                @can('reports.muster')
                                    <li><a href="">Leave report </a></li>
                                @endcan
                                @can('reports.month-wise')
                                    <li><a href="">Daily attendance </a></li>
                                @endcan
                                @can('reports.month-wise')
                                    <li><a href="">Today's present </a></li>
                                @endcan
                                @can('reports.month-wise')
                                    <li><a href="">Today's absent </a></li>
                                @endcan
                                @can('reports.month-wise')
                                    <li><a href="">Department wise </a></li>
                                @endcan
                                @can('reports.month-wise')
                                    <li><a href="">Leave bifurcation </a></li>
                                @endcan
                                @can('reports.month-wise')
                                    <li><a href="">Emp wise report </a></li>
                                @endcan
                            </ul>
                        </li>
                    @endcan

                    {{-- <li class="dropdown">
                            <a class="nav-link menu-title" href="javascript:void(0)">
                                <i data-feather="list"></i><span>Masters</span>
                            </a>
                            <ul class="nav-submenu menu-content">
                                @can('classes.view')
                                    <li><a href="">Class </a></li>
                                @endcan
                                @can('departments.view')
                                    <li><a href="">Main Departments </a></li>
                                @endcan
                                @can('sub-departments.view')
                                    <li><a href="">Sub Departments </a></li>
                                @endcan
                                @can('designations.view')
                                    <li><a href="">Designations </a></li>
                                @endcan
                                @can('devices.view')
                                    <li><a href="">Devices </a></li>
                                @endcan
                                @can('holidays.view')
                                    <li><a href="">Holidays </a></li>
                                @endcan
                                @can('leave_types.view')
                                    <li><a href="">Leave Types </a></li>
                                @endcan
                                @can('leaves.view')
                                    <li><a href="">Leaves </a></li>
                                @endcan
                                @can('shifts.view')
                                    <li><a href="">Shifts </a></li>
                                @endcan
                                @can('wards.view')
                                    <li><a href="">Office </a></li>
                                @endcan
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link menu-title link-nav" href="">
                                <i data-feather="lock"></i><span>class</span>
                            </a>
                        </li> --}}





                        <li class="dropdown">
                            <a class="nav-link menu-title link-nav {{ request()->routeIs('show-change-password') ? 'active-bg' : '' }}" href="{{ route('show-change-password') }}">
                                <i data-feather="lock"></i><span>Change Password</span>
                            </a>
                        </li>


                        <li class="dropdown">
                            <a class="nav-link menu-title link-nav {{ request()->routeIs('logout') ? 'active-bg' : '' }}" onclick="event.preventDefault(); document.getElementById('side-logout-form').submit();" href="{{ route('logout') }}">
                                <i data-feather="log-out"></i><span>Logout</span>
                            </a>
                            <form id="side-logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
