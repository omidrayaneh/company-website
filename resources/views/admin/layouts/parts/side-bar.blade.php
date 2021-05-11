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
                    <span data-localize="sidebar.heading.HEADER">{{__('Main Menu')}}</span>
                </li>
                <li class="{{Route::is('admin.dashboard')? 'active':'' }}">
                    <a href="{{route('admin.dashboard')}}" title="{{__('Dashboard')}}">
                        <span>{{__('Dashboard')}}</span>
                    </a>
                </li>
                <li class="{{Route::is('galleries.index')? 'active':'' }}">
                    <a href="#galleries" title="Layouts" data-toggle="collapse">
                        <em class="fa fa-images brown"></em>
                        <span>{{__('Galleries')}}</span>
                    </a>
                    <ul class="sidebar-nav sidebar-subnav collapse {{Route::is('galleries.index')? 'show ':'' }}" id="galleries">
                        <li class="sidebar-subnav-header">{{__('Galleries')}}</li>
                        <li class=" {{Route::is('galleries.index')? 'active ':'' }}">
                            <a href="{{route('galleries.index')}}" title="Horizontal">
                                <em class="fa fa-list-alt limegreen"></em>
                                <span>{{__('Galleries List Website')}}</span>
                            </a>
                        </li>
                        <li class=" {{Route::is('posts.galleries.index')? 'active ':'' }}">
                            <a href="{{route('posts.galleries.index')}}" title="Horizontal">
                                <em class="fa fa-list-alt limegreen"></em>
                                <span>{{__('Galleries List Posts')}}</span>
                            </a>
                        </li>
                        <li class=" {{Route::is('galleries.create')? 'active ':'' }}">
                            <a href="{{route('galleries.create')}}" title="Horizontal">
                                <em class="fa fa-plus limegreen"></em>
                                <span>{{__('New Gallery')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{Route::is('users.index')? 'active':'' }}">
                    <a href="#users" title="Layouts" data-toggle="collapse">
                        <em class="fa fa-users blue"></em>
                        <span>{{__('Users')}}</span>
                    </a>
                    <ul class="sidebar-nav sidebar-subnav collapse {{Route::is('users.index')? 'show ':'' }}" id="users">
                        <li class="sidebar-subnav-header">{{__('Users')}}</li>
                        <li class=" {{Route::is('users.index')? 'active ':'' }}">
                            <a href="{{route('users.index')}}" title="Horizontal">
                                <em class="fa fa-list-alt limegreen"></em>
                                <span>{{__('Users List')}}</span>
                            </a>
                        </li>
                        <li class=" {{Route::is('users.create')? 'active ':'' }}">
                            <a href="{{route('users.create')}}" title="Horizontal">
                                <em class="fa fa-plus limegreen"></em>
                                <span>{{__('New User')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{Route::is('metas.index')? 'active':'' }}">
                    <a href="#metas" title="Layouts" data-toggle="collapse">
                        <em class="fa fa-memory yellow"></em>
                        <span>{{__('Metas')}}</span>
                    </a>
                    <ul class="sidebar-nav sidebar-subnav collapse {{Route::is('metas.index')? 'show ':'' }}" id="metas">
                        <li class="sidebar-subnav-header">{{__('Metas List')}}</li>
                        <li class=" {{Route::is('metas.index')? 'active ':'' }}">
                            <a href="{{route('metas.index')}}" title="Horizontal">
                                <em class="fa fa-list-alt yellow"></em>
                                <span>{{__('Metas List')}}</span>
                            </a>
                        </li>
                        <li class=" {{Route::is('metas.create')? 'active ':'' }}">
                            <a href="{{route('metas.create')}}" title="Horizontal">
                                <em class="fa fa-plus yellow"></em>
                                <span>{{__('New Meta')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{Route::is('menus.index')? 'active':'' }}">
                    <a href="#menus" title="Layouts" data-toggle="collapse">
                        <em class="fa fa-bars tomato"></em>
                        <span>{{__('Menus')}}</span>
                    </a>
                    <ul class="sidebar-nav sidebar-subnav collapse {{Route::is('menus.index')? 'show ':'' }}" id="menus">
                        <li class="sidebar-subnav-header">{{__('Menus')}}</li>
                        <li class=" {{Route::is('menus.index')? 'active ':'' }}">
                            <a href="{{route('menus.index')}}" title="Horizontal">
                                <em class="fa fa-list-alt limegreen"></em>
                                <span>{{__('Menus List')}}</span>
                            </a>
                        </li>
                        <li class=" {{Route::is('menus.create')? 'active ':'' }}">
                            <a href="{{route('menus.create')}}" title="Horizontal">
                                <em class="fa fa-plus limegreen"></em>
                                <span>{{__('New Menu')}}</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="{{Route::is('posts.index')? 'active':'' }}">
                    <a href="#posts" title="Layouts" data-toggle="collapse">
                        <em class="fa fa-edit indigo"></em>
                        <span>{{__('Posts')}}</span>
                    </a>
                    <ul class="sidebar-nav sidebar-subnav collapse {{Route::is('posts.index')? 'show ':'' }}" id="posts">
                        <li class="sidebar-subnav-header">{{__('Posts')}}</li>
                        <li class=" {{Route::is('posts.index')? 'active ':'' }}">
                            <a href="{{route('posts.index')}}" title="Horizontal">
                                <em class="fa fa-list-alt limegreen"></em>
                                <span>{{__('Posts List')}}</span>
                            </a>
                        </li>
                        <li class=" {{Route::is('posts.create')? 'active ':'' }}">
                            <a href="{{route('posts.create')}}" title="Horizontal">
                                <em class="fa fa-plus limegreen"></em>
                                <span>{{__('New Post')}}</span>
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
