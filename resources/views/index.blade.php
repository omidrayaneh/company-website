@extends('layouts.master')
@section('keywords')
    <meta name="keywords" content="" >
@endsection
@section('description')
    <meta name="description" content="">
@endsection
@section('author')
    <meta name="author" content="">
@endsection
@section('title')
    <title>{{__('App Name')}}</title>
@endsection

@section('content')
    <div class="main-banner-area without-banner-animation">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="main-banner-content">
                        <div class="tag wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                            <img src="assets/images/main-banner/banner-one/tag-icon.png" alt="image">
                            # بهترین شرکت راه اندازی پلاد است.
                        </div>
                        <h1 class="wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1000ms">ما برای کمک به کسب و کار راه اندازی شده شما اینجا هستیم</h1>
                        <p class="wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        <div class="banner-btn">
                            <a href="about-1.html" class="default-btn wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">ادامه خواندن <i class="ri-arrow-left-line"></i><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="main-banner-image-wrap wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1000ms" data-speed="0.06" data-revert="true">
                        <img src="assets/images/main-banner/banner-one/main-pic.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="main-banner-shape-1">
            <img src="assets/images/main-banner/banner-one/shape-1.png" alt="image">
        </div>
        <div class="main-banner-shape-2">
            <img src="assets/images/main-banner/banner-one/shape-2.png" alt="image">
        </div>
        <div class="main-banner-shape-3">
            <img src="assets/images/main-banner/banner-one/shape-3.png" alt="image">
        </div>
        <div class="main-banner-shape-4">
            <img src="assets/images/main-banner/banner-one/shape-4.png" alt="image">
        </div>
    </div>
    <div class="partner-area">
        <div class="container">
            <div class="partner-box">
                <div class="partner-slides owl-carousel owl-theme">
                    <div class="single-partner">
                        <a href="#"><img src="assets/images/partner/partner-1.png" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="assets/images/partner/partner-2.png" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="assets/images/partner/partner-3.png" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="assets/images/partner/partner-4.png" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="assets/images/partner/partner-5.png" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="assets/images/partner/partner-1.png" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="assets/images/partner/partner-2.png" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="assets/images/partner/partner-3.png" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="assets/images/partner/partner-4.png" alt="image"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="assets/images/partner/partner-5.png" alt="image"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="partner-shape-1" data-speed="0.06" data-revert="true">
            <img src="assets/images/partner/shape-1.png" alt="image">
        </div>
        <div class="partner-shape-2" data-speed="0.06" data-revert="true">
            <img src="assets/images/partner/shape-2.png" alt="image">
        </div>
    </div>


    <div class="features-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <a href="services-details.html"><img src="assets/images/features/features-1.png" alt="image"></a>
                        <h3>
                            <a href="services-details.html">برنامه ریزی استراتژیک</a>
                        </h3>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        <div class="features-btn">
                            <a href="services-details.html" class="default-btn">ادامه خواندن <i class="ri-arrow-left-line"></i><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <a href="services-details.html"><img src="assets/images/features/features-2.png" alt="image"></a>
                        <h3>
                            <a href="services-details.html">تحقیق و توسعه</a>
                        </h3>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        <div class="features-btn">
                            <a href="services-details.html" class="default-btn">ادامه خواندن <i class="ri-arrow-left-line"></i><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <a href="services-details.html"><img src="assets/images/features/features-3.png" alt="image"></a>
                        <h3>
                            <a href="services-details.html">طراحی و پیاده سازی</a>
                        </h3>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        <div class="features-btn">
                            <a href="services-details.html" class="default-btn">ادامه خواندن <i class="ri-arrow-left-line"></i><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <a href="services-details.html"><img src="assets/images/features/features-4.png" alt="image"></a>
                        <h3>
                            <a href="services-details.html">برنامه استارت آپ</a>
                        </h3>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        <div class="features-btn">
                            <a href="services-details.html" class="default-btn">ادامه خواندن <i class="ri-arrow-left-line"></i><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <a href="services-details.html"><img src="assets/images/features/features-5.png" alt="image"></a>
                        <h3>
                            <a href="services-details.html">راه حل های ساس</a>
                        </h3>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        <div class="features-btn">
                            <a href="services-details.html" class="default-btn">ادامه خواندن <i class="ri-arrow-left-line"></i><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features">
                        <a href="services-details.html"><img src="assets/images/features/features-6.png" alt="image"></a>
                        <h3>
                            <a href="services-details.html">نرم افزار توسعه دهنده</a>
                        </h3>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        <div class="features-btn">
                            <a href="services-details.html" class="default-btn">ادامه خواندن <i class="ri-arrow-left-line"></i><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="features-shape-1" data-speed="0.08" data-revert="true">
            <img src="assets/images/features/shape-1.png" alt="image">
        </div>
        <div class="features-shape-2" data-speed="0.08" data-revert="true">
            <img src="assets/images/features/shape-2.png" alt="image">
        </div>
        <div class="features-shape-3">
            <img src="assets/images/features/shape-3.png" alt="image">
        </div>
        <div class="features-shape-4">
            <img src="assets/images/features/shape-4.png" alt="image">
        </div>
    </div>


    <div class="experiences-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="experiences-item">
                        <div class="experiences-content">
                            <div class="tag">
                                <img src="assets/images/experiences/tag-icon.png" alt="image">
                            </div>
                            <h3>بیش از 12 سال تجربه حرفه ای</h3>
                            <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد.</p>
                            <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد.</p>
                        </div>
                        <div class="experiences-inner-content">
                            <img src="assets/images/experiences/img1.png" alt="image">
                            <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد.</p>
                        </div>
                        <div class="experiences-inner-content">
                            <img src="assets/images/experiences/img2.png" alt="image">
                            <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد.</p>
                        </div>
                        <div class="experiences-inner-content">
                            <img src="assets/images/experiences/img3.png" alt="image">
                            <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد.</p>
                        </div>
                        <div class="experiences-btn">
                            <a href="about-1.html" class="default-btn">ادامه خواندن <i class="ri-arrow-left-line"></i><span></span></a>
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
        <div class="experiences-shape-1" data-speed="0.08" data-revert="true">
            <img src="assets/images/experiences/shape-1.png" alt="image">
        </div>
        <div class="experiences-shape-2" data-speed="0.06" data-revert="true">
            <img src="assets/images/experiences/shape-2.png" alt="image">
        </div>
        <div class="experiences-shape-3" data-speed="0.08" data-revert="true">
            <img src="assets/images/experiences/shape-3.png" alt="image">
        </div>
        <div class="experiences-shape-4" data-speed="0.06" data-revert="true">
            <img src="assets/images/experiences/shape-2.png" alt="image">
        </div>
        <div class="experiences-shape-5" data-speed="0.08" data-revert="true">
            <img src="assets/images/experiences/shape-3.png" alt="image">
        </div>
        <div class="experiences-shape-6" data-speed="0.06" data-revert="true">
            <img src="assets/images/experiences/shape-4.png" alt="image">
        </div>
        <div class="experiences-shape-7" data-speed="0.08" data-revert="true">
            <img src="assets/images/experiences/shape-5.png" alt="image">
        </div>
    </div>


    <div class="services-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>خدماتی که ما ارائه می دهیم</h2>
                <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services with-box-shadow">
                        <div class="icon">
                            <i class="ri-quill-pen-line"></i>
                        </div>
                        <h3>
                            <a href="services-details.html">طراحی هویت برند</a>
                        </h3>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        <a href="services-details.html" class="services-btn">ادامه خواندن <i class="ri-arrow-left-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services with-box-shadow">
                        <div class="icon bg-36CC72">
                            <i class="ri-pie-chart-line"></i>
                        </div>
                        <h3>
                            <a href="services-details.html">بازاریابی دیجیتال</a>
                        </h3>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        <a href="services-details.html" class="services-btn">ادامه خواندن <i class="ri-arrow-left-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services with-box-shadow">
                        <div class="icon bg-FF414B">
                            <i class="ri-lightbulb-line"></i>
                        </div>
                        <h3>
                            <a href="services-details.html">طراحی و توسعه</a>
                        </h3>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        <a href="services-details.html" class="services-btn">ادامه خواندن <i class="ri-arrow-left-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services with-box-shadow">
                        <div class="icon bg-FF6D3D">
                            <i class="ri-customer-service-2-line"></i>
                        </div>
                        <h3>
                            <a href="services-details.html">مشاوره فناوری اطلاعات </a>
                        </h3>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        <a href="services-details.html" class="services-btn">ادامه خواندن <i class="ri-arrow-left-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services with-box-shadow">
                        <div class="icon bg-8932F8">
                            <i class="ri-cloud-line"></i>
                        </div>
                        <h3>
                            <a href="services-details.html">پردازش ابری</a>
                        </h3>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        <a href="services-details.html" class="services-btn">ادامه خواندن <i class="ri-arrow-left-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services with-box-shadow">
                        <div class="icon bg-FFCA40">
                            <i class="ri-layout-row-line"></i>
                        </div>
                        <h3>
                            <a href="services-details.html">دامنه و میزبانی</a>
                        </h3>
                        <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        <a href="services-details.html" class="services-btn">ادامه خواندن <i class="ri-arrow-left-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-shape-1" data-speed="0.02" data-revert="true">
            <img src="assets/images/services/shape-1.png" alt="image">
        </div>
        <div class="services-shape-2" data-speed="0.02" data-revert="true">
            <img src="assets/images/services/shape-2.png" alt="image">
        </div>
        <div class="services-shape-3" data-speed="0.02" data-revert="true">
            <img src="assets/images/services/shape-3.png" alt="image">
        </div>
        <div class="services-shape-4" data-speed="0.02" data-revert="true">
            <img src="assets/images/services/shape-4.png" alt="image">
        </div>
    </div>


    <div class="support-area">
        <div class="container">
            <div class="support-content">
                <div class="tag">
                    <img src="assets/images/experiences/tag-icon.png" alt="image">
                </div>
                <h3>پشتیبانی سریع از فناوری ، تضمین شده است</h3>
                <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد.</p>
                <span>ریگان روزن ، مدیرعامل آژانس پلاد</span>
            </div>
        </div>
        <div class="support-shape-1" data-speed="0.08" data-revert="true">
            <img src="assets/images/support/shape-1.png" alt="image">
        </div>
        <div class="support-shape-2" data-speed="0.08" data-revert="true">
            <img src="assets/images/support/shape-2.png" alt="image">
        </div>
        <div class="support-shape-3" data-speed="0.08" data-revert="true">
            <img src="assets/images/support/shape-3.png" alt="image">
        </div>
        <div class="support-shape-4" data-speed="0.08" data-revert="true">
            <img src="assets/images/support/shape-4.png" alt="image">
        </div>
        <div class="support-shape-5" data-speed="0.08" data-revert="true">
            <img src="assets/images/support/shape-5.png" alt="image">
        </div>
        <div class="support-shape-6" data-speed="0.02" data-revert="true">
            <img src="assets/images/support/shape-6.png" alt="image">
        </div>
    </div>


    <div class="cases-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>تحقق ما / موارد اخیر</h2>
                <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="case-study-details.html">
                                <img src="assets/images/cases-study/cases-1.jpg" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">برندینگ</div>
                            <div class="tag-2">توسعه دهنده</div>
                            <h3>
                                <a href="case-study-details.html">نشان تجاری کالا و توسعه دهنده وب</a>
                            </h3>
                            <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="case-study-details.html">
                                <img src="assets/images/cases-study/cases-2.jpg" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">تجارت</div>
                            <h3>
                                <a href="case-study-details.html">هویت و مدل تجاری</a>
                            </h3>
                            <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="case-study-details.html">
                                <img src="assets/images/cases-study/cases-3.jpg" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">طراحی برنامه</div>
                            <h3>
                                <a href="case-study-details.html">طراحی برنامه بانکی موبایل آی او اس</a>
                            </h3>
                            <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        </div>
                    </div>
                    <div class="single-cases">
                        <div class="cases-image">
                            <a href="case-study-details.html">
                                <img src="assets/images/cases-study/cases-4.jpg" alt="image">
                            </a>
                        </div>
                        <div class="cases-content">
                            <div class="tag-1">طراحی وب</div>
                            <h3>
                                <a href="case-study-details.html">طراحی و توسعه وب سایت پلاد</a>
                            </h3>
                            <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است.</p>
                        </div>
                    </div>
                </div>
                <div class="cases-view-all-btn">
                    <a href="case-study-1.html" class="default-btn">مشاهده پروژه ها <i class="ri-briefcase-line"></i><span></span></a>
                </div>
            </div>
        </div>
        <div class="cases-shape-1" data-speed="0.04" data-revert="true">
            <img src="assets/images/cases-study/shape-1.png" alt="image">
        </div>
        <div class="cases-shape-2" data-speed="0.04" data-revert="true">
            <img src="assets/images/cases-study/shape-2.png" alt="image">
        </div>
        <div class="cases-shape-3" data-speed="0.04" data-revert="true">
            <img src="assets/images/cases-study/shape-3.png" alt="image">
        </div>
        <div class="cases-shape-4" data-speed="0.04" data-revert="true">
            <img src="assets/images/cases-study/shape-4.png" alt="image">
        </div>
        <div class="cases-shape-5" data-speed="0.04" data-revert="true">
            <img src="assets/images/cases-study/shape-5.png" alt="image">
        </div>
        <div class="cases-shape-6" data-speed="0.04" data-revert="true">
            <img src="assets/images/cases-study/shape-4.png" alt="image">
        </div>
        <div class="cases-shape-7" data-speed="0.04" data-revert="true">
            <img src="assets/images/cases-study/shape-5.png" alt="image">
        </div>
    </div>


    <div class="clients-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>مشتریان محترم ما</h2>
                <p>کدام مردمان ما را بسیار دوست دارند ، لطفا درباره آنچه در مورد ما صحبت می شود بررسی کنید</p>
            </div>
            <div class="clients-slides owl-carousel owl-theme">
                <div class="clients-item">
                    <img src="assets/images/clients/clients-1.png" alt="image">
                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص شرکتهای بزرگ داریم.’’</p>
                    <div class="title-name">
                        <h3>دینا هاجز</h3>
                        <span>توسعه دهنده اسپاتیفای</span>
                    </div>
                    <div class="star-rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="shape-1">
                        <img src="assets/images/clients/shape-4.png" alt="image">
                    </div>
                    <div class="shape-2">
                        <img src="assets/images/clients/shape-5.png" alt="image">
                    </div>
                    <div class="shape-3">
                        <img src="assets/images/clients/shape-6.png" alt="image">
                    </div>
                </div>
                <div class="clients-item">
                    <img src="assets/images/clients/clients-2.png" alt="image">
                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص شرکتهای بزرگ داریم.’’</p>
                    <div class="title-name">
                        <h3>دینا هاجز</h3>
                        <span>توسعه دهنده اسپاتیفای</span>
                    </div>
                    <div class="star-rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="shape-1">
                        <img src="assets/images/clients/shape-4.png" alt="image">
                    </div>
                    <div class="shape-2">
                        <img src="assets/images/clients/shape-5.png" alt="image">
                    </div>
                    <div class="shape-3">
                        <img src="assets/images/clients/shape-6.png" alt="image">
                    </div>
                </div>
                <div class="clients-item">
                    <img src="assets/images/clients/clients-3.png" alt="image">
                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص شرکتهای بزرگ داریم.’’</p>
                    <div class="title-name">
                        <h3>دینا هاجز</h3>
                        <span>توسعه دهنده اسپاتیفای</span>
                    </div>
                    <div class="star-rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="shape-1">
                        <img src="assets/images/clients/shape-4.png" alt="image">
                    </div>
                    <div class="shape-2">
                        <img src="assets/images/clients/shape-5.png" alt="image">
                    </div>
                    <div class="shape-3">
                        <img src="assets/images/clients/shape-6.png" alt="image">
                    </div>
                </div>
                <div class="clients-item">
                    <img src="assets/images/clients/clients-1.png" alt="image">
                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص شرکتهای بزرگ داریم.’’</p>
                    <div class="title-name">
                        <h3>دینا هاجز</h3>
                        <span>توسعه دهنده اسپاتیفای</span>
                    </div>
                    <div class="star-rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="shape-1">
                        <img src="assets/images/clients/shape-4.png" alt="image">
                    </div>
                    <div class="shape-2">
                        <img src="assets/images/clients/shape-5.png" alt="image">
                    </div>
                    <div class="shape-3">
                        <img src="assets/images/clients/shape-6.png" alt="image">
                    </div>
                </div>
                <div class="clients-item">
                    <img src="assets/images/clients/clients-2.png" alt="image">
                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص شرکتهای بزرگ داریم.’’</p>
                    <div class="title-name">
                        <h3>دینا هاجز</h3>
                        <span>توسعه دهنده اسپاتیفای</span>
                    </div>
                    <div class="star-rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="shape-1">
                        <img src="assets/images/clients/shape-4.png" alt="image">
                    </div>
                    <div class="shape-2">
                        <img src="assets/images/clients/shape-5.png" alt="image">
                    </div>
                    <div class="shape-3">
                        <img src="assets/images/clients/shape-6.png" alt="image">
                    </div>
                </div>
                <div class="clients-item">
                    <img src="assets/images/clients/clients-3.png" alt="image">
                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص شرکتهای بزرگ داریم.’’</p>
                    <div class="title-name">
                        <h3>دینا هاجز</h3>
                        <span>توسعه دهنده اسپاتیفای</span>
                    </div>
                    <div class="star-rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="shape-1">
                        <img src="assets/images/clients/shape-4.png" alt="image">
                    </div>
                    <div class="shape-2">
                        <img src="assets/images/clients/shape-5.png" alt="image">
                    </div>
                    <div class="shape-3">
                        <img src="assets/images/clients/shape-6.png" alt="image">
                    </div>
                </div>
                <div class="clients-item">
                    <img src="assets/images/clients/clients-1.png" alt="image">
                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص شرکتهای بزرگ داریم.’’</p>
                    <div class="title-name">
                        <h3>دینا هاجز</h3>
                        <span>توسعه دهنده اسپاتیفای</span>
                    </div>
                    <div class="star-rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="shape-1">
                        <img src="assets/images/clients/shape-4.png" alt="image">
                    </div>
                    <div class="shape-2">
                        <img src="assets/images/clients/shape-5.png" alt="image">
                    </div>
                    <div class="shape-3">
                        <img src="assets/images/clients/shape-6.png" alt="image">
                    </div>
                </div>
                <div class="clients-item">
                    <img src="assets/images/clients/clients-2.png" alt="image">
                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص شرکتهای بزرگ داریم.’’</p>
                    <div class="title-name">
                        <h3>دینا هاجز</h3>
                        <span>توسعه دهنده اسپاتیفای</span>
                    </div>
                    <div class="star-rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="shape-1">
                        <img src="assets/images/clients/shape-4.png" alt="image">
                    </div>
                    <div class="shape-2">
                        <img src="assets/images/clients/shape-5.png" alt="image">
                    </div>
                    <div class="shape-3">
                        <img src="assets/images/clients/shape-6.png" alt="image">
                    </div>
                </div>
                <div class="clients-item">
                    <img src="assets/images/clients/clients-3.png" alt="image">
                    <p>‘’ما به عنوان یک شرکت توسعه دهنده نرم افزار با اندازه متوسط ، بهترین های هر دو جهان را با هم ترکیب می کنیم. ما تمرکز و سرعت شرکتهای کوچک ارائه دهنده آن را به همراه مقیاس پذیری و تخصص شرکتهای بزرگ داریم.’’</p>
                    <div class="title-name">
                        <h3>دینا هاجز</h3>
                        <span>توسعه دهنده اسپاتیفای</span>
                    </div>
                    <div class="star-rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="shape-1">
                        <img src="assets/images/clients/shape-4.png" alt="image">
                    </div>
                    <div class="shape-2">
                        <img src="assets/images/clients/shape-5.png" alt="image">
                    </div>
                    <div class="shape-3">
                        <img src="assets/images/clients/shape-6.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="clients-shape-1" data-speed="0.08" data-revert="true">
            <img src="assets/images/clients/shape-1.png" alt="image">
        </div>
        <div class="clients-shape-2" data-speed="0.08" data-revert="true">
            <img src="assets/images/clients/shape-2.png" alt="image">
        </div>
        <div class="clients-shape-3" data-speed="0.08" data-revert="true">
            <img src="assets/images/clients/shape-3.png" alt="image">
        </div>
    </div>


    <div class="plans-area bg-color pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <h2>بهترین برنامه های خود را انتخاب کنید</h2>
                <p>پرداخت ماهانه یا سالانه ، هر وقت خواستید می توانید آن را لغو کنید</p>
            </div>
            <div class="plans-switcher">
                <div class="switcher-box">
                    <label class="toggler toggler--is-active" id="filt-monthly">ماهیانه</label>
                    <div class="toggle">
                        <input type="checkbox" id="switcher" class="check">
                        <b class="b switch"></b>
                    </div>
                    <label class="toggler" id="filt-yearly">سالیانه</label>
                </div>
            </div>
            <div id="monthly" class="wrapper-full">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-plans-table">
                            <div class="plans-header">
                                <h3>شخصی</h3>
                                <p>عناصر قدرتمند و عالی</p>
                            </div>
                            <div class="price">49 تومان <span>/ ماه</span></div>
                            <ul class="plans-features-list">
                                <li><i class="ri-check-line"></i> بالای 10 وبسایت</li>
                                <li><i class="ri-check-line"></i> پشتیبانی مادام العمر</li>
                                <li><i class="ri-check-line"></i> 10 گیگ هاست اشتراکی</li>
                                <li><i class="ri-check-line"></i> پشتیبانی 24/7</li>
                                <li><i class="ri-check-line"></i> سئو شده</li>
                            </ul>
                            <div class="plans-btn">
                                <a href="#" class="default-btn">خرید کنید <i class="ri-arrow-left-line"></i><span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-plans-table active-box">
                            <div class="plans-header">
                                <h3>تیم کوچک</h3>
                                <p>عناصر قدرتمند و عالی</p>
                            </div>
                            <div class="price">69 تومان <span>/ ماه</span></div>
                            <ul class="plans-features-list">
                                <li><i class="ri-check-line"></i> بالای 10 وبسایت</li>
                                <li><i class="ri-check-line"></i> پشتیبانی مادام العمر</li>
                                <li><i class="ri-check-line"></i> 10 گیگ هاست اشتراکی</li>
                                <li><i class="ri-check-line"></i> پشتیبانی 24/7</li>
                                <li><i class="ri-check-line"></i> سئو شده</li>
                            </ul>
                            <div class="plans-btn">
                                <a href="#" class="default-btn">خرید کنید <i class="ri-arrow-left-line"></i><span></span></a>
                            </div>
                            <div class="popular-tag">
                                <span>محبوب</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-plans-table">
                            <div class="plans-header">
                                <h3>تجاری</h3>
                                <p>عناصر قدرتمند و عالی</p>
                            </div>
                            <div class="price">79 تومان <span>/ ماه</span></div>
                            <ul class="plans-features-list">
                                <li><i class="ri-check-line"></i> بالای 10 وبسایت</li>
                                <li><i class="ri-check-line"></i> پشتیبانی مادام العمر</li>
                                <li><i class="ri-check-line"></i> 10 گیگ هاست اشتراکی</li>
                                <li><i class="ri-check-line"></i> پشتیبانی 24/7</li>
                                <li><i class="ri-check-line"></i> سئو شده</li>
                            </ul>
                            <div class="plans-btn">
                                <a href="#" class="default-btn">خرید کنید <i class="ri-arrow-left-line"></i><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="yearly" class="wrapper-full hide">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-plans-table">
                            <div class="plans-header">
                                <h3>شخصی</h3>
                                <p>عناصر قدرتمند و عالی</p>
                            </div>
                            <div class="price">249 تومان <span>/ سال</span></div>
                            <ul class="plans-features-list">
                                <li><i class="ri-check-line"></i> بالای 10 وبسایت</li>
                                <li><i class="ri-check-line"></i> پشتیبانی مادام العمر</li>
                                <li><i class="ri-check-line"></i> 10 گیگ هاست اشتراکی</li>
                                <li><i class="ri-check-line"></i> پشتیبانی 24/7</li>
                                <li><i class="ri-check-line"></i> سئو شده</li>
                            </ul>
                            <div class="plans-btn">
                                <a href="#" class="default-btn">خرید کنید <i class="ri-arrow-left-line"></i><span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-plans-table active-box">
                            <div class="plans-header">
                                <h3>تیم کوچک</h3>
                                <p>عناصر قدرتمند و عالی</p>
                            </div>
                            <div class="price">269 تومان <span>/ سال</span></div>
                            <ul class="plans-features-list">
                                <li><i class="ri-check-line"></i> بالای 10 وبسایت</li>
                                <li><i class="ri-check-line"></i> پشتیبانی مادام العمر</li>
                                <li><i class="ri-check-line"></i> 10 گیگ هاست اشتراکی</li>
                                <li><i class="ri-check-line"></i> پشتیبانی 24/7</li>
                                <li><i class="ri-check-line"></i> سئو شده</li>
                            </ul>
                            <div class="plans-btn">
                                <a href="#" class="default-btn">خرید کنید <i class="ri-arrow-left-line"></i><span></span></a>
                            </div>
                            <div class="popular-tag">
                                <span>محبوب</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-plans-table">
                            <div class="plans-header">
                                <h3>تجاری</h3>
                                <p>عناصر قدرتمند و عالی</p>
                            </div>
                            <div class="price">279 تومان <span>/ سال</span></div>
                            <ul class="plans-features-list">
                                <li><i class="ri-check-line"></i> بالای 10 وبسایت</li>
                                <li><i class="ri-check-line"></i> پشتیبانی مادام العمر</li>
                                <li><i class="ri-check-line"></i> 10 گیگ هاست اشتراکی</li>
                                <li><i class="ri-check-line"></i> پشتیبانی 24/7</li>
                                <li><i class="ri-check-line"></i> سئو شده</li>
                            </ul>
                            <div class="plans-btn">
                                <a href="#" class="default-btn">خرید کنید <i class="ri-arrow-left-line"></i><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-all-plans-btn">
                <a href="pricing.html" class="plans-btn-one">مشاهده قیمت گذاری ها</a>
            </div>
        </div>
        <div class="plans-shape-1" data-speed="0.08" data-revert="true">
            <img src="assets/images/plans/shape-1.png" alt="image">
        </div>
        <div class="plans-shape-2" data-speed="0.08" data-revert="true">
            <img src="assets/images/plans/shape-2.png" alt="image">
        </div>
        <div class="plans-shape-3" data-speed="0.08" data-revert="true">
            <img src="assets/images/plans/shape-3.png" alt="image">
        </div>
    </div>


    <div class="team-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>با مشاوران ما ملاقات کنید</h2>
                <p>کدام مردمان ما را بسیار دوست دارند ، لطفا درباره آنچه در مورد ما صحبت می شود بررسی کنید</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-box with-border-radius">
                        <div class="image">
                            <img src="assets/images/team/team-1.jpg" alt="image">
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
                            <h3>اولیور واتسون</h3>
                            <span>کارشناس ارشد بازاریابی</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-box with-border-radius">
                        <div class="image">
                            <img src="assets/images/team/team-2.jpg" alt="image">
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
                            <h3>اولیور واتسون</h3>
                            <span>کارشناس ارشد بازاریابی</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-box with-border-radius">
                        <div class="image">
                            <img src="assets/images/team/team-3.jpg" alt="image">
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
                            <h3>اولیور واتسون</h3>
                            <span>کارشناس ارشد بازاریابی</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-box with-border-radius">
                        <div class="image">
                            <img src="assets/images/team/team-4.jpg" alt="image">
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
                            <h3>اولیور واتسون</h3>
                            <span>کارشناس ارشد بازاریابی</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-area pb-70">
        <div class="container">
            <div class="section-title">
                <h2>پست های وبلاگ ما</h2>
                <p>ما سعی می کنیم با جدیدترین مقاله و بهترین برنامه ریزی استراتژیک پست وبلاگ را به روز کنیم</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="assets/images/blog/blog-4.jpg" alt="image"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="entry-meta">
                                <li class="tag">برند</li>
                                <li>
                                    <i class="ri-time-line"></i>
                                    14 دی 1399
                                </li>
                                <li>
                                    <i class="ri-message-2-line"></i>
                                    (0) نظر
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">مارک تجاری شامل ایجاد یک استراتژی برای ایجاد یک نقطه تمایز است.</a>
                            </h3>
                            <a href="blog-details.html" class="blog-btn">ادامه خواندن <i class="ri-arrow-left-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="assets/images/blog/blog-5.jpg" alt="image"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="entry-meta">
                                <li class="tag">برند</li>
                                <li>
                                    <i class="ri-time-line"></i>
                                    14 دی 1399
                                </li>
                                <li>
                                    <i class="ri-message-2-line"></i>
                                    (0) نظر
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">مارک تجاری شامل ایجاد یک استراتژی برای ایجاد یک نقطه تمایز است.</a>
                            </h3>
                            <a href="blog-details.html" class="blog-btn">ادامه خواندن <i class="ri-arrow-left-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-details.html"><img src="assets/images/blog/blog-6.jpg" alt="image"></a>
                        </div>
                        <div class="blog-content">
                            <ul class="entry-meta">
                                <li class="tag">برند</li>
                                <li>
                                    <i class="ri-time-line"></i>
                                    14 دی 1399
                                </li>
                                <li>
                                    <i class="ri-message-2-line"></i>
                                    (0) نظر
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">مارک تجاری شامل ایجاد یک استراتژی برای ایجاد یک نقطه تمایز است.</a>
                            </h3>
                            <a href="blog-details.html" class="blog-btn">ادامه خواندن <i class="ri-arrow-left-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-shape-1" data-speed="0.08" data-revert="true">
            <img src="assets/images/blog/shape-1.png" alt="image">
        </div>
        <div class="blog-shape-2" data-speed="0.08" data-revert="true">
            <img src="assets/images/blog/shape-2.png" alt="image">
        </div>
    </div>


    <div class="overview-area pb-100">
        <div class="container">
            <div class="overview-box">
                <div class="overview-content">
                    <h3>بیایید با هم چیزی شگفت آور بسازیم</h3>
                    <div class="overview-btn">
                        <a href="contact.html" class="overview-btn-one">شروع کار</a>
                        <img src="assets/images/overview/bar.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="overview-shape-1" data-speed="0.08" data-revert="true">
            <img src="assets/images/overview/shape-1.png" alt="image">
        </div>
        <div class="overview-shape-2" data-speed="0.08" data-revert="true">
            <img src="assets/images/overview/shape-2.png" alt="image">
        </div>
        <div class="overview-shape-3" data-speed="0.08" data-revert="true">
            <img src="assets/images/overview/shape-3.png" alt="image">
        </div>
        <div class="overview-shape-4" data-speed="0.08" data-revert="true">
            <img src="assets/images/overview/shape-4.png" alt="image">
        </div>
        <div class="overview-shape-5" data-speed="0.08" data-revert="true">
            <img src="assets/images/overview/shape-5.png" alt="image">
        </div>
    </div>
@endsection
