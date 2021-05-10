@extends('admin.layouts.master')
@section('title')
    <title>{{__('Edit Photo')}}</title>
@endsection
@section('content')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>
                    {{__('Photos')}}
                    <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <!-- START cards box-->
            <div class="card card-default col-md-9">
                <div class="card-header ">{{__('Edit Photo List')}}</div>
                <div class="card-body">
                    <form method="post" action="{{route('galleries.update',$photo->id)}}">
                        @csrf
                        @method('PATCH')
                            <div class="form-group">
                                <label>{{__('Photo')}}</label>
                                <br>
                                <img class="" width="100" height="100" src="/storage/photos/{{$photo->path}}" alt="">
                            </div>
                            <br>
                            <div class="form-group">
                                <br>
                                <div class="form-group">
                                    <label>{{__('Type')}}</label>
                                    <br>
                                    <input name="type" @if($photo->type) checked @endif type="checkbox" data-on="سایت" data-off="مطلب" data-size="sm" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                                    <small class="text-danger">@error('type') {{$message}}@enderror</small>
                                </div>
                                <small class="text-danger">@error('type') {{$message}}@enderror</small>
                            </div>
                            <div class="form-group">
                                <label>{{__('Status')}}</label>
                                <br>
                                <input name="status" @if($photo->status) checked @endif type="checkbox" data-on="فعال" data-off="غیرفعال" data-size="sm" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                                <small class="text-danger">@error('status') {{$message}}@enderror</small>
                            </div>
                            <div class="form-group">
                                <label>{{__('Detail')}}</label>
                                <textarea class="form-control" id="detail" name="detail" placeholder="{{__('Detail')}}" >
                                    {{$photo->detail}}
                                </textarea>
                                <small class="text-danger">@error('detail') {{$message}}@enderror</small>
                            </div>
                            <div class="form-group">
                                <label>{{__('Place')}}</label>
                                <select name="place" id="" class="form-control">
                                    <option value="">{{__('Select')}}</option>
                                    <option value="favIcon" @if($photo->place == 'favIcon') selected @endif>{{__('Fav Icon')}}</option>
                                    <option value="logo" @if($photo->place == 'logo') selected @endif>{{__('Logo')}}</option>
                                    <option value="customers" @if($photo->place == 'customers') selected @endif>{{__('Customers')}}</option>
                                    <option value="teamMembers" @if($photo->place == 'teamMembers') selected @endif>{{__('Team Members')}}</option>
                                </select>
{{--                                <input class="form-control" name="place" type="text" value="{{old('place',$photo->place)}}" placeholder="{{__('Place')}}">--}}
                                <small class="text-danger">@error('path') {{$message}}@enderror</small>
                            </div>
                            <button type="submit" class="btn btn-info " >{{__('Save')}}</button>
                    </form>
                </div>
            </div>

            <!-- END cards box-->

        </div>
    </section>

@endsection
@push('js'))
<script src="{{asset('admin/js/ckeditor/ckeditor.js')}}" ></script>

<script>
    CKEDITOR.replace('detail',{
        language:'fa',
        filebrowserUploadMethod :'form',
        filebrowserBrowseUrl:'form',
        filebrowserUploadUrl:'{{route('photos.store',['_token'=>csrf_token()])}}',
        removePlugins: 'cloudservices, easyimage',
    });
</script>


@endpush

@push('js')

@endpush
