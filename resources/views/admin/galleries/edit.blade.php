@extends('admin.layouts.master')
@section('title')
    <title>{{__('Edit Photo')}}</title>
@endsection
@push('css')
    <link rel="stylesheet" href="{{asset('/admin/css/dropzone.css')}}">
@endpush
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
{{--                            <div class="form-group">--}}
{{--                                <label>{{__('Photo')}}</label>--}}
{{--                                <br>--}}
{{--                                <img class="" width="100" height="100" src="{{$photo->path}}" alt="">--}}
{{--                            </div>--}}
                            <div class="form-group ">
                                <label >{{__('Photo')}}</label>
                                <br>
                                <input type="hidden" name="photo_id[]" id="uploaded-photo" required>
                                <div id="photo" class="dropzone "></div>
                            </div>
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
                                <label>{{__('Title')}}</label>
                                <input class="form-control" value="{{old('title',$photo->title)}}"  name="title" placeholder="{{__('Title')}}" >

                                <small class="text-danger">@error('title') {{$message}}@enderror</small>
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
                                    <option value="{{__('favIcon')}}" @if($photo->place == 'favIcon') selected @endif>{{__('favIcon')}}</option>
                                    <option value="{{__('logo')}}" @if($photo->place == 'logo') selected @endif>{{__('logo')}}</option>
                                    <option value="{{__('mainBackground')}}" @if($photo->place == __(('mainBackground'))) selected @endif>{{__('mainBackground')}}</option>
                                    <option value="{{__('customers')}}" @if($photo->place == 'customers') selected @endif>{{__('customers')}}</option>
                                    <option value="{{__('teamMembers')}}" @if($photo->place == 'teamMembers') selected @endif>{{__('teamMembers')}}</option>
                                    <option value="{{__('mainBanner')}}" @if($photo->place == __(('mainBanner'))) selected @endif>{{__('mainBanner')}}</option>
                                    <option value="{{__('experienceBanner')}}" @if($photo->place == __(('experienceBanner'))) selected @endif>{{__('experienceBanner')}}</option>
                                    <option value="{{__('serviceBanner')}}" @if($photo->place == __(('serviceBanner'))) selected @endif>{{__('serviceBanner')}}</option>
                                    <option value="{{__('employeeBanner')}}" @if($photo->place == __(('employeeBanner'))) selected @endif>{{__('employeeBanner')}}</option>

                                </select>
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
<script type="text/javascript" src="{{asset('/admin/js/dropzone.js')}}"></script>
<script>

    var image = @json($photo);

    Dropzone.autoDiscover = false;
    var id= '';
    var photosGallery = []
    var drop = new Dropzone('#photo', {
        addRemoveLinks: true,
        removedfile: function(file) {
            var name = file.name;
            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax(
                {
                    url: "/admin/photos/destroy/" + image.id,
                    type: 'post',
                    data: {
                        "id": image.id,
                        "_token": token,
                    },
                    success: function (result) {
                        window.location.replace('/admin/galleries/'+image.id+'/edit');
                    }
                });
            var _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        } ,
        acceptedFiles: ".jpg ,.png",
        maxFiles: 1,
        maxFilesize: 1.5,
        paramName: "file",
        acceptedMimeTypes: null,
        acceptParameter: null,
        enqueueForUpload: true,
        dictDefaultMessage:"افزودن عکس محصول",
        dictFileTooBig:"اندازه عکس بزرگ است",// image size error message
        dictInvalidFileType:"فرمت فایل اشتباه است",// file type error message
        dictCancelUpload:"لغو آپلود",//cancel error message
        dictCancelUploadConfirmation:"آیا می خواهید آپلود را متوقف کنید؟", //cancel conform
        dictMaxFilesExceeded:"برای هر محصول فقط 5 عکس می توانید آپلود کنید",
        dictRemoveFile:"حذف",// remove file
        clickable:true,
        url: "{{ route('photos.update',$photo->id) }}",
        sending: function(file, xhr, formData){
            formData.append("_token","{{csrf_token()}}")
        },
        success: function(file, response){
            window.location.replace('/admin/galleries/'+image.id+'/edit');
        }
    });

    var  file = image.path;
    console.log(file)
    var mockFile = { name: image.original_name, size: 12345 };
    drop.emit('addedfile',mockFile);
    drop.emit('thumbnail',mockFile,image.path);
    drop.emit('complete',mockFile);



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
