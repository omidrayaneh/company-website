@extends('admin.layouts.master')
@section('title')
    <title>{{__('Edit Menu')}}</title>
@endsection
@section('content')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>
                    {{__('Edit Menu')}}
                    <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <!-- START card-->
            <div class="card card-default">
                <div class="card-header"></div>
                <div class="card-body offset-md-2 col-md-8 ">
                    <form action="{{route('menus.update',$menu->slug)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>{{__('Title')}}</label>
                            <input class="form-control" name="title" type="text" value="{{old('title',$menu->title)}}" placeholder="{{__('Name')}}">
                            <small class="text-danger">@error('title') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('Parent Id')}}</label>
                            <select name="parent_id" class="form-control">
                                <option value="" selected>{{__('Select')}}</option>
                                @foreach($menus as $item)
                                    <option value="{{$item->id}}" @if($menu->parent_id == $item->id) selected @endif>{{$item->title}}</option>
                                    @if(count($item->childrenRecursive) > 0)
                                        @include('admin.layouts.partials.menus.edit', ['menus'=>$item->childrenRecursive, 'level'=>1 ,'selected_menu'=>$menu])
                                    @endif
                                @endforeach
                            </select>
                            <small class="text-danger">@error('parent_id') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('Status')}}</label>
                            <br>
                            <input name="status" @if($menu->status) checked @endif type="checkbox" data-on="{{__('Enable')}}" data-off="{{__('Disable')}}" data-size="sm" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
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
