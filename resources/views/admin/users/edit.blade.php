@extends('admin.layouts.master')
@section('title')
    <title>{{__('Edit User')}}</title>
@endsection
@section('content')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>
                    {{__('Edit User')}} <span>{{$user->name}}</span>
                    <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <!-- START card-->
            <div class="card card-default">
                <div class="card-header"></div>
                <div class="card-body offset-md-2 col-md-8 ">
                    <form action="{{route('users.update',$user->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>{{__('Name')}}</label>
                            <input class="form-control" name="name" type="text" value="{{old('name',$user->name)}}" placeholder="{{__('Name')}}">
                            <small class="text-danger">@error('name') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('Email')}}</label>
                            <input class="form-control" name="email" type="email" value="{{old('email',$user->email)}}" placeholder="{{__('Email')}}">
                            <small class="text-danger">@error('email') {{$message}}@enderror</small>

                        </div>
                        <div class="form-group">
                            <label>{{__('Action Status')}}</label>
                            <br>
                            <input name="active" @if($user->active) checked @endif type="checkbox" data-on="فعال" data-off="غیرفعال" data-size="sm" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                            <small class="text-danger">@error('active') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('Role')}}</label>
                            <select name="role" class="form-control">
                                <option value="" >{{__('Select')}}</option>
                                <option value="user" @if($user->role =='user') selected @endif>{{__('User')}}</option>
                                <option value="admin" @if($user->role =='admin') selected @endif>{{__('Admin')}}</option>
                                <option value="manager" @if($user->role =='manager') selected @endif>{{__('Manager')}}</option>
                            </select>
                            <small class="text-danger">@error('role') {{$message}}@enderror</small>

                        </div>
                        <div class="form-group">
                            <label>{{__('Password')}}</label>
                            <input class="form-control" name="password" type="password" value="{{old('password')}}" placeholder="{{__('Password')}}">
                            <small class="text-danger">@error('password') {{$message}}@enderror</small>

                        </div>
                        <div class="form-group">
                            <label>{{__('Confirm Password')}}</label>
                            <input class="form-control" name="password_confirmation" type="password" value="{{old('password_confirmation')}}" placeholder="{{__('Confirm Password')}}">
                            {{--                            <small class="text-danger">@error('password_confirmation') {{$message}}@enderror</small>--}}

                        </div>
                        <button class="btn btn-info " type="submit">ارسال</button>
                    </form>
                </div>
            </div>
            <!-- END card-->
        </div>
    </section>
@endsection
