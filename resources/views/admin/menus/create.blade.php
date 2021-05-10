@extends('admin.layouts.master')
@section('title')
    <title>{{__('Create User')}}</title>
@endsection
@section('content')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>
                    {{__('New Menu')}}
                    <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <!-- START card-->
            <div class="card card-default">
                <div class="card-header"></div>
                <div class="card-body offset-md-2 col-md-8 ">
                    <form action="{{route('menus.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>{{__('Title')}}</label>
                            <input class="form-control" name="title" type="text" value="{{old('title')}}" placeholder="{{__('Name')}}">
                            <small class="text-danger">@error('title') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('Parent Id')}}</label>
                            <select name="parent_id" class="form-control">
                                <option value="" selected>{{__('Select')}}</option>
                            @foreach($menus as $menu)
                                <option value="{{$menu->id}}" >{{$menu->title}}</option>
                                    @if(count($menu->childrenRecursive) > 0)
                                        @include('admin.layouts.partials.menus.index', ['menus'=>$menu->childrenRecursive, 'level'=>1])
                                    @endif
                                @endforeach
                            </select>
                            <small class="text-danger">@error('parent_id') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('Status')}}</label>
                            <br>
                            <input name="status" type="checkbox" data-on="فعال" data-off="غیرفعال" data-size="sm" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                            <small class="text-danger">@error('status') {{$message}}@enderror</small>
                        </div>

                        <button class="btn btn-info " type="submit">{{__('Save')}}</button>
                    </form>
                </div>
            </div>
            <!-- END card-->
        </div>
    </section>
@endsection
