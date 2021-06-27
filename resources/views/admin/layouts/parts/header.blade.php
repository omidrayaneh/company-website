<header class="topnavbar-wrapper" id="app">
    <!-- START Top Navbar-->
    <nav class="navbar topnavbar">
        <!-- START navbar header-->
        <div class="navbar-header">
            <a class="navbar-brand" href="/admin/dashboard">
                <div class="brand-logo">
                    <img class="img-fluid" src="/admin/img/logo.png" alt="App Logo">
                </div>
                <div class="brand-logo-collapsed">
                    <img class="img-fluid" src="/admin/img/logo-single.png" alt="App Logo">
                </div>
            </a>
        </div>
        <!-- END navbar header-->
        <!-- START Left navbar-->
        <ul class="navbar-nav mr-auto flex-row">
            <li class="nav-item">
                <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                <a class="nav-link d-none d-md-block d-lg-block d-xl-block" href="#" data-trigger-resize="" data-toggle-state="aside-collapsed">
                    <em class="fas fa-bars"></em>
                </a>
                <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                <a class="nav-link sidebar-toggle d-md-none" href="#" data-toggle-state="aside-toggled" data-no-persist="true">
                    <em class="fas fa-bars"></em>
                </a>
            </li>
            <!-- START User avatar toggle-->
            <li class="nav-item d-none d-md-block">
                <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                <a class="nav-link" id="user-block-toggle" href="#user-block" data-toggle="collapse">
                    <em class="icon-user"></em>
                </a>
            </li>
            <!-- END User avatar toggle-->
            <!-- START lock screen-->
            <li class="nav-item d-none d-md-block">
                <a class="nav-link" href="lock.html" title="Lock screen">
                    <em class="icon-lock"></em>
                </a>
            </li>
            <!-- END lock screen-->
        </ul>
        <!-- END Left navbar-->
        <!-- START Right Navbar-->
        <ul class="navbar-nav flex-row">
            <!-- Search icon-->
            <li class="nav-item">
                <a class="nav-link" href="#" data-search-open="">
                    <em class="icon-magnifier"></em>
                </a>
            </li>
            <!-- Fullscreen (only desktops)-->
            <li class="nav-item d-none d-md-block">
                <a class="nav-link" href="#" data-toggle-fullscreen="">
                    <em class="fas fa-expand"></em>
                </a>
            </li>
            <!-- START Alert menu-->
            <order :userid="{{auth()->id()}}" :unreads="{{$unread_orders}}" ></order>
            <contact-us :userid="{{auth()->id()}}" :unreads="{{$unread_contacts}}"></contact-us>
            <ticket :userid="{{auth()->id()}}" :unreads="{{$unread_tickets}}"></ticket>
            <comment :userid="{{auth()->id()}}" :unreads="{{$unread_comments}}" ></comment>

            <!-- END Alert menu-->
            <!-- START Offsidebar button-->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle-state="offsidebar-open" data-no-persist="true">
                    <em class="icon-notebook"></em>
                </a>
            </li>
            <!-- END Offsidebar menu-->
        </ul>
        <!-- END Right Navbar-->
        <!-- START Search form-->
        <form class="navbar-form" role="search" action="search.html">
            <div class="form-group">
                <input class="form-control" type="text" placeholder="عبارت مورد نظر را تایپ نمایید ...">
                <div class="fas fa-times navbar-form-close" data-search-dismiss=""></div>
            </div>
            <button class="d-none" type="submit">ارسال</button>
        </form>
        <!-- END Search form-->
    </nav>
    <!-- END Top Navbar-->
</header>
