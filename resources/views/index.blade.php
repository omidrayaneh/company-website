@extends('layouts.master')
@push('keywords')
    @if(isset($meta->keyword))
    <meta name="keywords" content="{{$meta->keyword}}">
    @endif
@endpush
@push('description')
    @if(isset($meta->description))
    <meta name="description" content="{{$meta->description}}">
    @endif
@endpush
@push('title')
    @if(isset($meta->title))
    <title>{{__('App Name')}} - {{$meta->title}}</title>
    @else
        <title>{{__('App Name')}}</title>
    @endif
@endpush


@section('content')
        <div class="container text-start">
            <img src="{{asset('assets/images/Webpnet-resizeimage_1.png')}}" alt="">
        </div>
    @if(isset($mainBanner))
    <div class="main-banner-area without-banner-animation">
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
                                <img style="border-radius: 15px;" src="{{$mainBanner->path}}" alt="image">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endif
    @if($experienceBanner)
        <div class="experiences-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="experiences-item">
                            <div class="experiences-content">

                                <h3>{{$experienceBanner->title}}</h3>
                               {!! $experienceBanner->detail !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="experiences-image" data-speed="0.02" data-revert="true">
                            <img src="{{$experienceBanner->path}}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(count($serviceBanner)>0)
        <div class="cases-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>خدمات ما</h2>
                    <br>
{{--                    <p>لورم ایپسوم ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم استاندارد صنعت بوده است. لورم ایپسوم ساختار--}}
{{--                        چاپ و متن را در بر می گیرد.</p>--}}
                    <div class="row">
                        <div class="col-lg-6">
                            @if(isset($serviceBanner[0]))
                                <div class="single-cases">
                                    <div class="cases-image">
                                        <a href="#">
                                            <img src="{{$serviceBanner[0]->path}}" alt="image">
                                        </a>
                                    </div>
                                    <div class="cases-content">
                                        {{--                            <div class="tag-1">برندینگ</div>--}}
                                        {{--                            <div class="tag-2">توسعه دهنده</div>--}}
                                        <h3>
                                            <a href="#">{{$serviceBanner[0]->title}}</a>
                                        </h3>
                                        <p>{!! $serviceBanner[0]->detail !!}</p>
                                    </div>
                                </div>
                            @endif
                            @if(isset($serviceBanner[2]))
                                <div class="single-cases">
                                    <div class="cases-image">
                                        <a href="#">
                                            <img src="{{$serviceBanner[2]->path}}" alt="image">
                                        </a>
                                    </div>
                                    <div class="cases-content">
                                        {{--                            <div class="tag-1">برندینگ</div>--}}
                                        {{--                            <div class="tag-2">توسعه دهنده</div>--}}
                                        <h3>
                                            <a href="#">{{$serviceBanner[2]->title}}</a>
                                        </h3>
                                        <p>{!! $serviceBanner[2]->detail !!}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-6">
                            @if(isset($serviceBanner[1]))
                                <div class="single-cases">
                                    <div class="cases-image">
                                        <a href="#">
                                            <img src="{{$serviceBanner[1]->path}}" alt="image">
                                        </a>
                                    </div>
                                    <div class="cases-content">
                                        {{--                            <div class="tag-1">برندینگ</div>--}}
                                        {{--                            <div class="tag-2">توسعه دهنده</div>--}}
                                        <h3>
                                            <a href="#">{{$serviceBanner[1]->title}}</a>
                                        </h3>
                                        <p>{!! $serviceBanner[1]->detail !!}</p>
                                    </div>
                                </div>
                            @endif
                            @if(isset($serviceBanner[3]))
                                <div class="single-cases">
                                    <div class="cases-image">
                                        <a href="#">
                                            <img src="{{$serviceBanner[3]->path}}" alt="image">
                                        </a>
                                    </div>
                                    <div class="cases-content">
                                        {{--                            <div class="tag-1">برندینگ</div>--}}
                                        {{--                            <div class="tag-2">توسعه دهنده</div>--}}
                                        <h3>
                                            <a href="#">{{$serviceBanner[3]->title}}</a>
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
        </div>
         @endif
    @if(count($employeeBanner)>0)
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
    @endif
@endsection
