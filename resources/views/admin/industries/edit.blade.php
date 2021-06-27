@extends('admin.layouts.master')
@section('title')
    <title>{{__('Edit Industry')}}</title>
@endsection
@section('content')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>
                    {{__('Edit Industry')}}
                    <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <!-- START card-->
            <div class="card card-default">
                <div class="card-header"></div>
                <div class="card-body offset-md-2 col-md-8 ">
                    <form action="{{route('industries.update',$industry->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>{{__('Title')}}</label>
                            <input class="form-control" name="title" type="text" value="{{old('title',$industry->title)}}" placeholder="{{__('Title')}}">
                            <small class="text-danger">@error('title') {{$message}}@enderror</small>
                        </div>

                        <div class="form-group">
                            <label>{{__('Status')}}</label>
                            <br>
                            <input name="status" @if($industry->status) checked @endif type="checkbox"  data-on="{{__('Enable')}}" data-off="{{__('Disable')}}" data-size="sm" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                            <small class="text-danger">@error('status') {{$message}}@enderror</small>
                        </div>
                        <button class="btn btn-info " type="submit">ارسال</button>
                    </form>
                </div>
            </div>
            <!-- END card-->
        </div>
    </section>
@endsection
