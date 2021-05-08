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
    <title>سیناسافت</title>
@endsection

@section('content')

    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>{{__('Authenticate')}}</h2>
                <ul>
                    <li>
                        <a href="/">{{__('Go Home')}}</a>
                    </li>
                    <li> به  {{__('App Name')}} {{__('Welcome')}}</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape-1" data-speed="0.08" data-revert="true">
            <img src="assets/images/page-banner/shape-1.png" alt="image">
        </div>
        <div class="page-banner-shape-2" data-speed="0.08" data-revert="true">
            <img src="assets/images/page-banner/shape-2.png" alt="image">
        </div>
        <div class="page-banner-shape-3" data-speed="0.08" data-revert="true">
            <img src="assets/images/page-banner/shape-3.png" alt="image">
        </div>
        <div class="page-banner-shape-4" data-speed="0.08" data-revert="true">
            <img src="assets/images/page-banner/shape-4.png" alt="image">
        </div>
    </div>


    <div class="profile-authentication-area ptb-100">
        <div class="container">
                <div class="col-lg-12 col-md-12">
                    <div class="login-form">
                        <h2>{{__('Login')}}</h2>
                        <form method="post" action="{{route('login')}}">
                            @csrf
                            <div class="form-group">
                                <label>{{__('Email')}} </label>
                                <input  required autocomplete="email" value="omidrayaneh@gmail.com" autofocus type="email" name="email" {{old('email')}} class="form-control  @error('email') is-invalid @enderror" placeholder="{{__('Email')}} ">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">-
                                           <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                            </div>
                            <div class="form-group">
                                <label>{{__('Password')}}</label>
                                <input type="password" value="12121212" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{__('Password')}}" >
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password">
                                        <a href="{{route('register')}}" class="lost-your-password">{{__('Register')}}</a>
                                    </div>
                                </div>
                                @if (Route::has('password.request'))
                                <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password">
                                    <a href="{{ route('password.request') }}" class="lost-your-password">{{__('Forgot Your Password?')}}</a>
                                </div>
                                @endif
                            </div>

                            <button type="submit" class="default-btn">{{__('Login')}}<span></span></button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
@endsection
