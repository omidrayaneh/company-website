@extends('layouts.master')

@section('content')
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>حساب کاربری</h2>
                <ul>
                    <li>
                        <a href="{{route('home')}}">خانه</a>
                    </li>
                    <li>حساب کاربری</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contact-area ptb-100">
        <div class="profile">
            <div class="row">
               @include('layouts.parts.tickets-sidebar')
                <div class="col-9">
                    <div class="container">
                       پروفایل
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
