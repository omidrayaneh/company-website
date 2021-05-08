<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/images/logo.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo.png" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                {{__('Go Home')}}

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                               {{__('About')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{__('Services')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">{{__('Contact Us')}}</a>
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
                            <a href="contact.html" class="default-btn">گفتگو کنید <i class="ri-message-line"></i><span></span></a>
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
                        <img src="assets/images/logo.png" alt="logo">
                    </a>
                </div>
                <div class="sidebar-content">
                    <h3>{{__('About')}}</h3>
                    <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                    <div class="sidebar-btn">
                        <a href="contact.html" class="default-btn">گفتگو کنید <i class="ri-message-line"></i><span></span></a>
                    </div>
                </div>
                <div class="sidebar-contact-info">
                    <h3>اطلاعات مشتری</h3>
                    <ul class="info-list">
                        <li><i class="ri-phone-fill"></i> <a href="tel:04436442728"> (021) 2222 2222</a></li>
                        <li><i class="ri-mail-line"></i> <a href="mailto:hello@plod.com">hello@plod.com</a></li>
                        <li><i class="ri-map-pin-line"></i> ایران ، استان تهران ، میدان آزادی ، خیابان 9.</li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">
                    <li><a href="#" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                    <li><a href="#" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                    <li><a href="#" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                    <li><a href="#" target="_blank"><i class="ri-instagram-fill"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>