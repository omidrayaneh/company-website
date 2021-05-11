@extends('admin.layouts.master')
@section('title')
    <title>{{__('Edit Meta')}}</title>
@endsection
@section('content')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>
                    {{__('New Meta')}}
                    <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <!-- START card-->
            <div class="card card-default">
                <div class="card-header"></div>
                <div class="card-body offset-md-2 col-md-8 ">
                    <form action="{{route('metas.update',$meta->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>{{__('Title')}}</label>
                            <input class="form-control" name="title" type="text" value="{{old('title',$meta->title)}}" placeholder="{{__('Title')}}">
                            <small class="text-danger">@error('title') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('Meta Description')}}</label>
                            <input class="form-control" name="description" type="text" value="{{old('description',$meta->description)}}" placeholder="{{__('Meta Description')}}">
                            <small class="text-danger">@error('description') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('Meta Keywords')}}</label>
                            <input class="form-control" name="keyword" type="text" value="{{old('keyword',$meta->keyword)}}" placeholder="{{__('Meta Keywords')}}">
                            <small class="text-danger">@error('keyword') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('Status')}}</label>
                            <br>
                            <input name="status" @if($meta->status) checked @endif type="checkbox"  data-on="{{__('Enable')}}" data-off="{{__('Disable')}}" data-size="sm" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
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
