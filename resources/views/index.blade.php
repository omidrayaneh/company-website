@extends('layouts.master')
@section('keywords')
    @if(isset($meta->keyword))
    <meta name="keywords" content="{{$meta->keyword}}">
    @endif
@endsection
@section('description')
    @if(isset($meta->description))
    <meta name="description" content="{{$meta->description}}">
    @endif
@endsection
@section('title')
    @if(isset($meta->title))
    <title> {{$meta->title}}</title>
    @endif
@endsection

@section('content')
    <div class="main-banner-area without-banner-animation">
        @if(isset($mainBanner))
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="main-banner-content">
                            {{--                        <div class="tag wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">--}}
                            {{--                            <img src="assets/images/main-banner/banner-one/tag-icon.png" alt="image">--}}
                            {{--                            # بهترین شرکت راه اندازی پلاد است.--}}
                            {{--                        </div>--}}
                            <h1 class="wow fadeInLeft" data-wow-delay="00ms"
                                data-wow-duration="1000ms">{{$mainBanner->title}}</h1>
                            <p class="wow fadeInLeft" data-wow-delay="100ms"
                               data-wow-duration="1000ms">{!! $mainBanner->detail !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="main-banner-image-wrap wow fadeInUp" data-wow-delay="00ms"
                             data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
                            @if($mainBanner)
                                <img src="{{$mainBanner->path}}" alt="image">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
{{--    <div class="features-area pt-100 pb-70">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-features">--}}
{{--                        <a href="services-details.html"><img src="assets/images/features/features-1.png"--}}
{{--                                                             alt="image"></a>--}}
{{--                        <h3>--}}
{{--                            <a href="services-details.html">برنامه ریزی استراتژیک</a>--}}
{{--                        </h3>--}}
{{--                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم--}}
{{--                            ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>--}}
{{--                        <div class="features-btn">--}}
{{--                            <a href="services-details.html" class="default-btn">ادامه خواندن <i--}}
{{--                                    class="ri-arrow-left-line"></i><span></span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-features">--}}
{{--                        <a href="services-details.html"><img src="assets/images/features/features-2.png"--}}
{{--                                                             alt="image"></a>--}}
{{--                        <h3>--}}
{{--                            <a href="services-details.html">تحقیق و توسعه</a>--}}
{{--                        </h3>--}}
{{--                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم--}}
{{--                            ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>--}}
{{--                        <div class="features-btn">--}}
{{--                            <a href="services-details.html" class="default-btn">ادامه خواندن <i--}}
{{--                                    class="ri-arrow-left-line"></i><span></span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-features">--}}
{{--                        <a href="services-details.html"><img src="assets/images/features/features-3.png"--}}
{{--                                                             alt="image"></a>--}}
{{--                        <h3>--}}
{{--                            <a href="services-details.html">طراحی و پیاده سازی</a>--}}
{{--                        </h3>--}}
{{--                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم--}}
{{--                            ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>--}}
{{--                        <div class="features-btn">--}}
{{--                            <a href="services-details.html" class="default-btn">ادامه خواندن <i--}}
{{--                                    class="ri-arrow-left-line"></i><span></span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-features">--}}
{{--                        <a href="services-details.html"><img src="assets/images/features/features-4.png"--}}
{{--                                                             alt="image"></a>--}}
{{--                        <h3>--}}
{{--                            <a href="services-details.html">برنامه استارت آپ</a>--}}
{{--                        </h3>--}}
{{--                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم--}}
{{--                            ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>--}}
{{--                        <div class="features-btn">--}}
{{--                            <a href="services-details.html" class="default-btn">ادامه خواندن <i--}}
{{--                                    class="ri-arrow-left-line"></i><span></span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-features">--}}
{{--                        <a href="services-details.html"><img src="assets/images/features/features-5.png"--}}
{{--                                                             alt="image"></a>--}}
{{--                        <h3>--}}
{{--                            <a href="services-details.html">راه حل های ساس</a>--}}
{{--                        </h3>--}}
{{--                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم--}}
{{--                            ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>--}}
{{--                        <div class="features-btn">--}}
{{--                            <a href="services-details.html" class="default-btn">ادامه خواندن <i--}}
{{--                                    class="ri-arrow-left-line"></i><span></span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-features">--}}
{{--                        <a href="services-details.html"><img src="assets/images/features/features-6.png"--}}
{{--                                                             alt="image"></a>--}}
{{--                        <h3>--}}
{{--                            <a href="services-details.html">نرم افزار توسعه دهنده</a>--}}
{{--                        </h3>--}}
{{--                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم--}}
{{--                            ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>--}}
{{--                        <div class="features-btn">--}}
{{--                            <a href="services-details.html" class="default-btn">ادامه خواندن <i--}}
{{--                                    class="ri-arrow-left-line"></i><span></span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    @if($experienceBanner)
        <div class="experiences-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="experiences-item">
                            <div class="experiences-content">
                                <div class="tag">
                                    <img src="{{$experienceBanner->path}}" alt="image">
                                </div>
                                <h3>{{$experienceBanner->title}}</h3>
                               {!! $experienceBanner->detail !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="experiences-image" data-speed="0.02" data-revert="true">
                            <img src="assets/images/experiences/experiences-1.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

{{--    <div class="services-area pt-100 pb-70">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title">--}}
{{--                <h2>خدماتی که ما ارائه می دهیم</h2>--}}
{{--                <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم--}}
{{--                    ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>--}}
{{--            </div>--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-services with-box-shadow">--}}
{{--                        <div class="icon">--}}
{{--                            <i class="ri-quill-pen-line"></i>--}}
{{--                        </div>--}}
{{--                        <h3>--}}
{{--                            <a href="services-details.html">طراحی هویت برند</a>--}}
{{--                        </h3>--}}
{{--                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم--}}
{{--                            ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>--}}
{{--                        <a href="services-details.html" class="services-btn">ادامه خواندن <i--}}
{{--                                class="ri-arrow-left-line"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-services with-box-shadow">--}}
{{--                        <div class="icon bg-36CC72">--}}
{{--                            <i class="ri-pie-chart-line"></i>--}}
{{--                        </div>--}}
{{--                        <h3>--}}
{{--                            <a href="services-details.html">بازاریابی دیجیتال</a>--}}
{{--                        </h3>--}}
{{--                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم--}}
{{--                            ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>--}}
{{--                        <a href="services-details.html" class="services-btn">ادامه خواندن <i--}}
{{--                                class="ri-arrow-left-line"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-services with-box-shadow">--}}
{{--                        <div class="icon bg-FF414B">--}}
{{--                            <i class="ri-lightbulb-line"></i>--}}
{{--                        </div>--}}
{{--                        <h3>--}}
{{--                            <a href="services-details.html">طراحی و توسعه</a>--}}
{{--                        </h3>--}}
{{--                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم--}}
{{--                            ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>--}}
{{--                        <a href="services-details.html" class="services-btn">ادامه خواندن <i--}}
{{--                                class="ri-arrow-left-line"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-services with-box-shadow">--}}
{{--                        <div class="icon bg-FF6D3D">--}}
{{--                            <i class="ri-customer-service-2-line"></i>--}}
{{--                        </div>--}}
{{--                        <h3>--}}
{{--                            <a href="services-details.html">مشاوره فناوری اطلاعات </a>--}}
{{--                        </h3>--}}
{{--                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم--}}
{{--                            ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>--}}
{{--                        <a href="services-details.html" class="services-btn">ادامه خواندن <i--}}
{{--                                class="ri-arrow-left-line"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-services with-box-shadow">--}}
{{--                        <div class="icon bg-8932F8">--}}
{{--                            <i class="ri-cloud-line"></i>--}}
{{--                        </div>--}}
{{--                        <h3>--}}
{{--                            <a href="services-details.html">پردازش ابری</a>--}}
{{--                        </h3>--}}
{{--                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم--}}
{{--                            ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>--}}
{{--                        <a href="services-details.html" class="services-btn">ادامه خواندن <i--}}
{{--                                class="ri-arrow-left-line"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-services with-box-shadow">--}}
{{--                        <div class="icon bg-FFCA40">--}}
{{--                            <i class="ri-layout-row-line"></i>--}}
{{--                        </div>--}}
{{--                        <h3>--}}
{{--                            <a href="services-details.html">دامنه و میزبانی</a>--}}
{{--                        </h3>--}}
{{--                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم--}}
{{--                            ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>--}}
{{--                        <a href="services-details.html" class="services-btn">ادامه خواندن <i--}}
{{--                                class="ri-arrow-left-line"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="support-area" @if($mainBackground) style="background-image: url({{$mainBackground->path}}) !important;"@endif>--}}
{{--        <div class="container">--}}
{{--            <div class="support-content">--}}
{{--                <div class="tag">--}}
{{--                    <img src="assets/images/experiences/tag-icon.png" alt="image">--}}
{{--                </div>--}}
{{--                <h3>پشتیبانی سریع از فناوری ، تضمین شده است</h3>--}}
{{--                <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم--}}
{{--                    ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن--}}
{{--                    را در بر می گیرد.</p>--}}
{{--                <span>ریگان روزن ، مدیرعامل آژانس پلاد</span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="cases-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>خدمات ما</h2>
{{--                <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم--}}
{{--                    ساختار چاپ و متن را در بر می گیرد.</p>--}}
            </div>
            <div class="row">
                <div class="col-lg-6">
                    @if(isset($serviceBanner[0]))
                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="case-study-details.html">
                                <img src="{{$serviceBanner[0]->path}}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
{{--                            <div class="tag-1">برندینگ</div>--}}
{{--                            <div class="tag-2">توسعه دهنده</div>--}}
                            <h3>
                                <a href="case-study-details.html">{{$serviceBanner[0]->title}}</a>
                            </h3>
                            <p>{!! $serviceBanner[0]->detail !!}</p>
                        </div>
                    </div>
                    @endif
                    @if(isset($serviceBanner[1]))
                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="case-study-details.html">
                                <img src="{{$serviceBanner[1]->path}}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            {{--                            <div class="tag-1">برندینگ</div>--}}
                            {{--                            <div class="tag-2">توسعه دهنده</div>--}}
                            <h3>
                                <a href="case-study-details.html">{{$serviceBanner[1]->title}}</a>
                            </h3>
                            <p>{!! $serviceBanner[1]->detail !!}</p>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="col-lg-6">
                    @if(isset($serviceBanner[2]))
                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="case-study-details.html">
                                <img src="{{$serviceBanner[2]->path}}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            {{--                            <div class="tag-1">برندینگ</div>--}}
                            {{--                            <div class="tag-2">توسعه دهنده</div>--}}
                            <h3>
                                <a href="case-study-details.html">{{$serviceBanner[2]->title}}</a>
                            </h3>
                            <p>{!! $serviceBanner[2]->detail !!}</p>
                        </div>
                    </div>
                    @endif
                    @if(isset($serviceBanner[3]))
                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="case-study-details.html">
                                <img src="{{$serviceBanner[3]->path}}" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            {{--                            <div class="tag-1">برندینگ</div>--}}
                            {{--                            <div class="tag-2">توسعه دهنده</div>--}}
                            <h3>
                                <a href="case-study-details.html">{{$serviceBanner[3]->title}}</a>
                            </h3>
                            <p>{!! $serviceBanner[3]->detail !!}</p>
                        </div>
                    </div>
                    @endif
                </div>
{{--                <div class="cases-view-all-btn">--}}
{{--                    <a href="case-study-1.html" class="default-btn">مشاهده پروژه ها <i--}}
{{--                            class="ri-briefcase-line"></i><span></span></a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>


{{--    <div class="clients-area ptb-100">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title">--}}
{{--                <h2>مشتریان محترم ما</h2>--}}
{{--                <p>کدام مردمان ما را بسیار دوست دارند ، لطفا درباره آنچه در مورد ما صحبت می شود بررسی کنید</p>--}}
{{--            </div>--}}
{{--            <div class="clients-slides owl-carousel owl-theme">--}}
{{--                <div class="clients-item">--}}
{{--                    <img src="assets/images/clients/clients-1.png" alt="image">--}}
{{--                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم--}}
{{--                        ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص--}}
{{--                        شرکتهای بزرگ داریم.’’</p>--}}
{{--                    <div class="title-name">--}}
{{--                        <h3>دینا هاجز</h3>--}}
{{--                        <span>توسعه دهنده اسپاتیفای</span>--}}
{{--                    </div>--}}
{{--                    <div class="star-rating">--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="clients-item">--}}
{{--                    <img src="assets/images/clients/clients-2.png" alt="image">--}}
{{--                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم--}}
{{--                        ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص--}}
{{--                        شرکتهای بزرگ داریم.’’</p>--}}
{{--                    <div class="title-name">--}}
{{--                        <h3>دینا هاجز</h3>--}}
{{--                        <span>توسعه دهنده اسپاتیفای</span>--}}
{{--                    </div>--}}
{{--                    <div class="star-rating">--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="clients-item">--}}
{{--                    <img src="assets/images/clients/clients-3.png" alt="image">--}}
{{--                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم--}}
{{--                        ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص--}}
{{--                        شرکتهای بزرگ داریم.’’</p>--}}
{{--                    <div class="title-name">--}}
{{--                        <h3>دینا هاجز</h3>--}}
{{--                        <span>توسعه دهنده اسپاتیفای</span>--}}
{{--                    </div>--}}
{{--                    <div class="star-rating">--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="clients-item">--}}
{{--                    <img src="assets/images/clients/clients-1.png" alt="image">--}}
{{--                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم--}}
{{--                        ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص--}}
{{--                        شرکتهای بزرگ داریم.’’</p>--}}
{{--                    <div class="title-name">--}}
{{--                        <h3>دینا هاجز</h3>--}}
{{--                        <span>توسعه دهنده اسپاتیفای</span>--}}
{{--                    </div>--}}
{{--                    <div class="star-rating">--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="clients-item">--}}
{{--                    <img src="assets/images/clients/clients-2.png" alt="image">--}}
{{--                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم--}}
{{--                        ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص--}}
{{--                        شرکتهای بزرگ داریم.’’</p>--}}
{{--                    <div class="title-name">--}}
{{--                        <h3>دینا هاجز</h3>--}}
{{--                        <span>توسعه دهنده اسپاتیفای</span>--}}
{{--                    </div>--}}
{{--                    <div class="star-rating">--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="clients-item">--}}
{{--                    <img src="assets/images/clients/clients-3.png" alt="image">--}}
{{--                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم--}}
{{--                        ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص--}}
{{--                        شرکتهای بزرگ داریم.’’</p>--}}
{{--                    <div class="title-name">--}}
{{--                        <h3>دینا هاجز</h3>--}}
{{--                        <span>توسعه دهنده اسپاتیفای</span>--}}
{{--                    </div>--}}
{{--                    <div class="star-rating">--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="clients-item">--}}
{{--                    <img src="assets/images/clients/clients-1.png" alt="image">--}}
{{--                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم--}}
{{--                        ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص--}}
{{--                        شرکتهای بزرگ داریم.’’</p>--}}
{{--                    <div class="title-name">--}}
{{--                        <h3>دینا هاجز</h3>--}}
{{--                        <span>توسعه دهنده اسپاتیفای</span>--}}
{{--                    </div>--}}
{{--                    <div class="star-rating">--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="clients-item">--}}
{{--                    <img src="assets/images/clients/clients-2.png" alt="image">--}}
{{--                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم--}}
{{--                        ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص--}}
{{--                        شرکتهای بزرگ داریم.’’</p>--}}
{{--                    <div class="title-name">--}}
{{--                        <h3>دینا هاجز</h3>--}}
{{--                        <span>توسعه دهنده اسپاتیفای</span>--}}
{{--                    </div>--}}
{{--                    <div class="star-rating">--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="clients-item">--}}
{{--                    <img src="assets/images/clients/clients-3.png" alt="image">--}}
{{--                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم--}}
{{--                        ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص--}}
{{--                        شرکتهای بزرگ داریم.’’</p>--}}
{{--                    <div class="title-name">--}}
{{--                        <h3>دینا هاجز</h3>--}}
{{--                        <span>توسعه دهنده اسپاتیفای</span>--}}
{{--                    </div>--}}
{{--                    <div class="star-rating">--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                        <i class="ri-star-fill"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}




    <div class="team-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>مدیران تيم ما</h2>
{{--                <p>کدام مردمان ما را بسیار دوست دارند ، لطفا درباره آنچه در مورد ما صحبت می شود بررسی کنید</p>--}}
            </div>
            <div class="row">
                @foreach($employeeBanner as $employee)
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-box with-border-radius">
                        <div class="image">
                            <img src="{{$employee->path}}" alt="image">
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="ri-messenger-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>{{$employee->title}}</h3>
                            <span>{!! $employee->detail !!}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


{{--    <div class="blog-area pb-70">--}}
{{--        <div class="container">--}}
{{--            <div class="section-title">--}}
{{--                <h2>پست های وبلاگ ما</h2>--}}
{{--                <p>ما سعی می کنیم با جدیدترین مقاله و بهترین برنامه ریزی استراتژیک پست وبلاگ را به روز کنیم</p>--}}
{{--            </div>--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-blog">--}}
{{--                        <div class="blog-image">--}}
{{--                            <a href="blog-details.html"><img src="assets/images/blog/blog-4.jpg" alt="image"></a>--}}
{{--                        </div>--}}
{{--                        <div class="blog-content">--}}
{{--                            <ul class="entry-meta">--}}
{{--                                <li class="tag">برند</li>--}}
{{--                                <li>--}}
{{--                                    <i class="ri-time-line"></i>--}}
{{--                                    14 دی 1399--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <i class="ri-message-2-line"></i>--}}
{{--                                    (0) نظر--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <h3>--}}
{{--                                <a href="blog-details.html">مارک تجاری شامل ایجاد یک استراتژی برای ایجاد یک نقطه تمایز--}}
{{--                                    است.</a>--}}
{{--                            </h3>--}}
{{--                            <a href="blog-details.html" class="blog-btn">ادامه خواندن <i class="ri-arrow-left-line"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-blog">--}}
{{--                        <div class="blog-image">--}}
{{--                            <a href="blog-details.html"><img src="assets/images/blog/blog-5.jpg" alt="image"></a>--}}
{{--                        </div>--}}
{{--                        <div class="blog-content">--}}
{{--                            <ul class="entry-meta">--}}
{{--                                <li class="tag">برند</li>--}}
{{--                                <li>--}}
{{--                                    <i class="ri-time-line"></i>--}}
{{--                                    14 دی 1399--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <i class="ri-message-2-line"></i>--}}
{{--                                    (0) نظر--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <h3>--}}
{{--                                <a href="blog-details.html">مارک تجاری شامل ایجاد یک استراتژی برای ایجاد یک نقطه تمایز--}}
{{--                                    است.</a>--}}
{{--                            </h3>--}}
{{--                            <a href="blog-details.html" class="blog-btn">ادامه خواندن <i class="ri-arrow-left-line"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="single-blog">--}}
{{--                        <div class="blog-image">--}}
{{--                            <a href="blog-details.html"><img src="assets/images/blog/blog-6.jpg" alt="image"></a>--}}
{{--                        </div>--}}
{{--                        <div class="blog-content">--}}
{{--                            <ul class="entry-meta">--}}
{{--                                <li class="tag">برند</li>--}}
{{--                                <li>--}}
{{--                                    <i class="ri-time-line"></i>--}}
{{--                                    14 دی 1399--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <i class="ri-message-2-line"></i>--}}
{{--                                    (0) نظر--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <h3>--}}
{{--                                <a href="blog-details.html">مارک تجاری شامل ایجاد یک استراتژی برای ایجاد یک نقطه تمایز--}}
{{--                                    است.</a>--}}
{{--                            </h3>--}}
{{--                            <a href="blog-details.html" class="blog-btn">ادامه خواندن <i class="ri-arrow-left-line"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="blog-shape-1" data-speed="0.08" data-revert="true">--}}
{{--            <img src="assets/images/blog/shape-1.png" alt="image">--}}
{{--        </div>--}}
{{--        <div class="blog-shape-2" data-speed="0.08" data-revert="true">--}}
{{--            <img src="assets/images/blog/shape-2.png" alt="image">--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="overview-area pb-100">--}}
{{--        <div class="container">--}}
{{--            <div class="overview-box">--}}
{{--                <div class="overview-content">--}}
{{--                    <h3>بیایید با هم چیزی شگفت آور بسازیم</h3>--}}
{{--                    <div class="overview-btn">--}}
{{--                        <a href="contact.html" class="overview-btn-one">شروع کار</a>--}}
{{--                        <img src="assets/images/overview/bar.png" alt="image">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
