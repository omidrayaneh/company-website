@extends('layouts.master')
@section('title')
    <title>تماس با ما</title>
@endsection
@push('css')
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
@endpush
@section('content')
    <div class="page-banner-area" >
        <div class="container">
            <div class="page-banner-content">
                <h2>تماس با ما</h2>
                <ul>
                    <li>
                        <a href="index.html">خانه</a>
                    </li>
                    <li>تماس با ما</li>
                </ul>
            </div>
        </div>
    </div >

    <div class="contact-area ptb-100" id="app">
        <div class="container">
            <div class="contact-form">
                <h3>در تماس باشید</h3>
                <form method="POST" action="{{route('contact.store')}}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required
                                       data-error="لطفا نام خود را وارد کنید" placeholder="نام*">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required
                                       data-error="لطفا ایمیل خود را وارد کنید" placeholder="ایمیل*">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone_number" id="phone_number" required
                                       data-error="لطفا تلفن خود را وارد کنید" class="form-control" placeholder="تلفن">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required
                                       data-error="لطفا موضوع خود را وارد کنید" placeholder="موضوع">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" required
                                      data-error="پیام خود را بنویسید" placeholder="پیام"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">ارسال پیام <i
                                    class="ri-arrow-left-line"></i><span></span></button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="contact-info-area pb-100">
        <div class="container">
            <div class="row">
                @if(!empty($company))
                <div class="col-lg-4 col-md-12">
                    <div class="contact-address">
                        <h3> شرکت:</h3>
                        <h4>{{$company->companyName}}</h4>
                        <ul class="address-info">
                            <li>
                                <i class="ri-customer-service-line"></i>
                                <a href="tel:{{$company->phone}}">{{$company->phone}}</a>
                            </li>
                            <li>
                                <i class="ri-global-line"></i>
                                <a href="mailto:{{$company->email}}">{{$company->email}}</a>
                            </li>
                            <li>
                                <i class="ri-map-pin-line"></i>
                                {{$company->address}}
                            </li>
                        </ul>
                        <ul class="address-social">
                            <li>
                                <a href="https://www.facebook.com/{{$company->facebook}}" target="_blank">
                                    <i class="ri-facebook-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/{{$company->twitter}}" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/{{$company->linkedin}}" target="_blank">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://t.me/{{$company->telegram}}" target="_blank">
                                    <i class="ri-telegram-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/{{$company->instagram}}" target="_blank">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div id="map">
                        <iframe src="{{$company->map}}" ></iframe>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
@endpush
