<aside class="aside-container">
    <!-- START Sidebar (left)-->
    <div class="aside-inner">
        <nav class="sidebar" data-sidebar-anyclick-close="">
            <!-- START sidebar nav-->
            <ul class="sidebar-nav">
                <!-- START user info-->
                <li class="has-user-block">
                    <div class="collapse" id="user-block">
                        <div class="item user-block">
                            <!-- User picture-->
                            <div class="user-block-picture">
                                <div class="user-block-status">
                                    <img class="img-thumbnail rounded-circle" src="/admin/img/user/02.jpg" alt="Avatar" width="60" height="60">
                                    <div class="circle bg-success circle-lg"></div>
                                </div>
                            </div>
                            <!-- Name and Job-->
                            <div class="user-block-info">
                                <span class="user-block-name">سلام، رضا</span>
                                <span class="user-block-role">طراح رابط کاربری</span>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- END user info-->
                <!-- Iterates over all sidebar items-->
                <li class="nav-heading ">
                    <span data-localize="sidebar.heading.HEADER">منوی اصلی</span>
                </li>
                <li class="{{Route::is('admin.dashboard')? 'active':'' }}">
                    <a href="{{route('admin.dashboard')}}" title="{{__('Dashboard')}}">
                        <span>{{__('Dashboard')}}</span>
                    </a>
                </li>

                <li class="{{Route::is('users.index')? 'active':'' }}">
                    <a href="#layout" title="Layouts" data-toggle="collapse">
                        <em class="fa fa-users blue"></em>
                        <span>{{__('Users')}}</span>
                    </a>
                    <ul class="sidebar-nav sidebar-subnav collapse {{Route::is('users.index')? 'show ':'' }}" id="layout">
                        <li class="sidebar-subnav-header">{{__('Users')}}</li>
                        <li class=" {{Route::is('users.index')? 'active ':'' }}">
                            <a href="{{route('users.index')}}" title="Horizontal">
                                <em class="fa fa-list blue"></em>
                                <span>{{__('Users List')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="" title="Dashboard" data-toggle="collapse"
                       onclick="event.preventDefault();
                       document.getElementById('form-logout').submit();">
                        <em class="fa fa-power-off red"></em>
                        <span data-localize="sidebar.nav.DASHBOARD">{{__('Logout')}}</span>
                    </a>
                    <form id="form-logout" action="{{route('logout')}}" method="post">
                        @csrf
                    </form>
                </li>


            </ul>
            <!-- END sidebar nav-->
        </nav>
    </div>
    <!-- END Sidebar (left)-->
</aside>
