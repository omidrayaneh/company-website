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

    <div class="col-lg-12 col-md-12">
    <div class="register-form">
        <h2>{{ __('Register') }}</h2>
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="form-group">
                <label>{{__('Username')}}</label>
                <input type="text" name="name" {{old('name')}} class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{__('Username')}}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{__('Email')}}</label>
                <input id="email" type="email" class="form-control {{old('email')}} @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{__('Password')}}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{__('Confirm Password')}}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 ">
                    <a href="{{route('login')}}" >{{__('Registered')}}</a>
                </div>
            </div>
            <button type="submit" class="default-btn"> {{__('Submit')}}</button>
        </form>
    </div>
</div>
@endsection
