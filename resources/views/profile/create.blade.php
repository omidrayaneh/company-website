@extends('layouts.master')

@push('title')
    <title>{{__('App Name')}} - {{__('Ticketing')}}</title>
@endpush

@section('content')
    <div class="page-banner-area" >
        <div class="container">
            <div class="page-banner-content">
                <h2>تیکت</h2>
                <ul>
                    <li>
                        <a href="{{route('home')}}">خانه</a>
                    </li>
                    <li>تیکت</li>
                </ul>
            </div>
        </div>
    </div >

    <div class="contact-area ptb-100 " >
            <div class="profile">
                <div class="row">
                    @include('layouts.parts.tickets-sidebar')
                    <div class="col-9">
                        <h3>تیکت جدید</h3>
                        @include('includes.flash')
                        <form method="POST" action="/new_ticket">
                            @csrf
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group">
                                    <input type="text" name="title" id="title" class="form-control"
                                           data-error="{{__('Title')}}" placeholder="{{__('Title')}}*">
                                    <small class="text-danger">@error('title') {{$message}}@enderror</small>
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group">
                                    <select id="category" type="category" class="form-control" name="category">
                                        <option value="">{{__('Select Category')}}*</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <small class="text-danger">@error('category') {{$message}}@enderror</small>
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group">
                                    <select id="priority" type="" class="form-control" name="priority">
                                        <option value="">{{__('Select Priority')}}</option>
                                        <option value="{{__('Low')}}">{{__('Low')}}</option>
                                        <option value="{{__('Medium')}}">{{__('Medium')}}</option>
                                        <option value="{{__('High')}}">{{__('High')}}</option>
                                    </select>
                                    <small class="text-danger">@error('priority') {{$message}}@enderror</small>
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group">
                                    <textarea rows="10" id="message" class="form-control" name="message" placeholder="{{__('message')}}"></textarea>
                                    <small class="text-danger">@error('message') {{$message}}@enderror</small>

                                </div>
                                <br>
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

    </div>
@endsection
