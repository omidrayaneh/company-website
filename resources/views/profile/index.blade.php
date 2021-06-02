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
                    @include('includes.flash')
                    <div class="container">
                        <form action="{{route('user.update',auth()->id())}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-6">
                                    <label for="">{{__('Name')}}</label>
                                    <input class="form-control" type="text" name="name" value="{{auth()->user()->name}}">
                                    <small class="text-danger">@error('name') {{$message}}@enderror</small>

                                </div>
                                <div class="col-6">
                                    <label for="">{{__('Email')}}</label>
                                    <input disabled class="form-control" type="text" value="{{auth()->user()->email}}">
                                </div>
                                <div class="col-6">
                                    <label for="">{{__('Password')}}</label>
                                    <input class="form-control" name="password" type="password" >
                                    <small class="text-danger">@error('password') {{$message}}@enderror</small>

                                </div>
                                <div class="col-6">
                                    <label for="">{{__('Confirm Password')}}</label>
                                    <input class="form-control" name="password_confirmation" type="password">
                                    <small class="text-danger">@error('password_confirmation') {{$message}}@enderror</small>

                                </div>
                                <div class="d-grid gap-2 mt-3">
                                    <button  class="btn btn-danger" type="submit">{{__('Save')}}</button>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection
