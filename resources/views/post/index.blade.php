@extends('layouts.master')
@push('keywords')
        <meta name="keywords" content="{{$post->meta_keywords}}">
@endpush
@push('description')
        <meta name="description" content="{{$post->meta_description}}">
@endpush
@push('title')
        <title> {{$post->title}} | {{__('App Name')}}</title>
@endpush
@section('content')
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>جزئیات مطالعه</h2>
            <ul>
                <li>
                    <a href="{{route('home')}}">خانه</a>
                </li>
                <li>{{$post->menu->title}}</li>
            </ul>
        </div>
    </div>
</div>
<div class="case-details-area ptb-100">
    <div class="container">
        <div class="case-details-image">
            <img src="{{$post->photo->path}}" alt="image">
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="case-details-content">
                    <h3 class="text-center mb-5">{{$post->title}}</h3>
                    <p>{!! $post->description !!}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="case-details-information">
                    <ul class="information-list">
                        <li>
                            <span>دسته بندی ها :</span> {{$post->menu->title}}
                        </li>
                        <li>
                            <span>تاریخ انتشار :</span>
                            <span>{{\Morilog\Jalali\CalendarUtils::strftime('Y/m/d', strtotime($post->created_at))}}</span>

                        </li>
                    </ul>
                    <div class="case-contact-info">
                        <h3>بیایید با هم چیزی شگفت آور بسازیم!</h3>
                        <div class="info-box-one">
                            <i class="ri-customer-service-line"></i>
                            <a href="tel:{{$company->phone}}">{{$company->phone}}</a>
                        </div>
                        <div class="info-box-two">
                            <i class="ri-earth-line"></i>
                            <a href="mailto:{{$company->email}}">{{$company->email}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
