<div class="navbar-area" id="app">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="/">
                        <img src="{{$logo->path}}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="{{$logo->path}}" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link {{Route::is('home')? 'active':'' }}">
                                {{__('Go Home')}}
                            </a>
                        </li>
                        @if(count($menus)>0)
                        @foreach($menus as $menu)
                        <li class="nav-item">
                            <a href="#" class="nav-link {{Route::is('')? 'active':'' }}">
                                {{$menu->title}}
                                @if(count($menu->childrenRecursive)>0)
                                <i class="ri-add-line"></i>
                                @endif
                            </a>
                            <ul class="dropdown-menu">
                                @if(count($menu->childrenRecursive)>0)
                                    @foreach($menu->childrenRecursive as $subMenu)
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            {{$subMenu->title}}
                                            @if(count($subMenu->childrenRecursive)>0)
                                            <i class="ri-arrow-left-s-line"></i>
                                            @endif
                                        </a>
                                        <ul class="dropdown-menu">
                                            @if(count($subMenu->childrenRecursive)>0)
                                                @foreach($subMenu->childrenRecursive as $item)
                                                <li class="nav-item">
                                                    <a href="{{route('post',$item->slug)}}" class="nav-link">{{$item->title}}</a>
                                                </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </li>
                                    @endforeach
                                @endif
                            </ul>
                        </li>
                        @endforeach
                        @endif
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{__('About')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('contact.index')}}" class="nav-link {{Route::is('contact.index')? 'active':'' }}">{{__('Contact Us')}}</a>
                        </li>
                    </ul>
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <i class="search-btn ri-search-line"></i>
                            <i class="close-btn ri-close-line"></i>
                            <div class="search-overlay search-popup">
                                <div class='search-box'>
                                    <form class="search-form">
                                        <input class="search-input" name="search" placeholder="جستجو..." type="text">
                                        <button class="search-button" type="submit">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @guest
                            <div class="option-item">
                                <a href="{{route('login')}}" class="default-btn">{{__('Login')}}<i class="ri-login-box-line"></i><span></span></a>
                            </div>
                        @else
                            <div class="option-item">
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="default-btn">{{__('Logout')}}<i class="ri-logout-box-line"></i><span></span></a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @endguest
                        <div class="option-item">
                            <div class="side-menu-btn">
                                <i class="ri-menu-4-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <i class="search-btn ri-search-line"></i>
                            <i class="close-btn ri-close-line"></i>
                            <div class="search-overlay search-popup">
                                <div class='search-box'>
                                    <form class="search-form">
                                        <input class="search-input" name="search" placeholder="{{__('Search')}} ... " type="text">
                                        <button class="search-button" type="submit">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="option-item">
                            <a href="{{route('contact.index')}}" class="default-btn">گفتگو کنید <i class="ri-message-line"></i><span></span></a>
                        </div>
                        <div class="option-item">
                            <div class="side-menu-btn">
                                <i class="ri-menu-4-line" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>
            <div class="modal-body">
                <div class="title">
                    <a href="index.html">
                        <img src="{{$logo->path}}" alt="logo">
                    </a>
                </div>
                <div class="sidebar-content">
                    <h3>{{__('About')}}</h3>
{{--                    <p>{{$company->description}}</p>--}}
                    <div class="sidebar-btn">
                        <a href="{{route('contact.index')}}" class="default-btn">گفتگو کنید <i class="ri-message-line"></i><span></span></a>
                    </div>
                </div>
                <div class="sidebar-contact-info">
                    <h3> <span> اطلاعات شرکت </span>{{$company->companyName}}</h3>
                    <ul class="info-list">
                        <li><i class="ri-phone-fill"></i> <a href="tel:{{$company->phone}}">{{$company->phone}}</a></li>
                        <li><i class="ri-mail-line"></i> <a href="mailto:{{$company->email}}">{{$company->email}}</a></li>
                        <li><i class="ri-map-pin-line"></i>{{$company->address}}</li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">
                    <li><a href="https://www.facebook.com/{{$company->facebook}}" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                    <li><a href="https://www.twitter.com/{{$company->twitter}}" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/{{$company->linkedin}}" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                    <li><a href="https://www.instagram.com/{{$company->instagram}}" target="_blank"><i class="ri-instagram-fill"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
