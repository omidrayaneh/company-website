@extends('admin.layouts.master')
@section('title')
    <title>{{__('Show Company')}}</title>
@endsection
@section('content')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>
                    {{__('Edit Contact')}}
                    <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <!-- START card-->
            <div class="card card-default">
                <div class="card-header"></div>
                <div class="card-body offset-md-2 col-md-8 ">
                    <div class="form-group">
                        <label>{{__('Name')}}</label>
                        <input class="form-control" disabled name="name" type="text" value="{{old('name',$contact->name)}}" placeholder="{{__('name')}}">
                        <small class="text-danger">@error('name') {{$message}}@enderror</small>
                    </div>
                    <div class="form-group">
                        <label>{{__('Email')}}</label>
                        <input class="form-control" disabled name="email" type="text" value="{{old('email',$contact->email)}}" placeholder="{{__('Email')}}">
                        <small class="text-danger">@error('email') {{$message}}@enderror</small>
                    </div>
                    <div class="form-group">
                        <label>{{__('phone')}}</label>
                        <input class="form-control" disabled name="phone" type="text" value="{{old('phone',$contact->phone)}}" placeholder="{{__('phone')}}">
                        <small class="text-danger">@error('phone') {{$message}}@enderror</small>
                    </div>
                    <div class="form-group">
                        <label>{{__('Detail')}}</label>
                        <textarea class="form-control" name="body" type="text"  disabled placeholder="{{__('body')}}">{{old('body',$contact->body)}}</textarea>
                        <small class="text-danger">@error('body') {{$message}}@enderror</small>
                    </div>
                    <div class="form-group">
                        <label>{{__('Status')}}</label>
                        <br>
                        <input @if($contact->status)checked  @endif name="status" type="checkbox"  data-on="{{__('Enable')}}" data-off="{{__('Disable')}}" data-size="sm" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                        <small class="text-danger">@error('status') {{$message}}@enderror</small>
                    </div>
                </div>
            </div>
            <!-- END card-->
        </div>
    </section>
@endsection

