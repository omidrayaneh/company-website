@extends('admin.layouts.master')
@section('title')
    <title>{{__('Photo List')}}</title>
@endsection
@push('css')
    <link rel="stylesheet" href="{{asset('/admin/css/dropzone.css')}}">
    <style>

    </style>
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
            <div class="card card-default">
                <div class="card-header ">{{__('Create New Photo')}}</div>
                <div class="card-body">
                    <fieldset>
                        <div class="form-group ">
                            <div class="col-md-10">
                                <input type="hidden" name="photo_id[]" id="uploaded-photo" required>
                                <div id="photo" class="dropzone "></div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>{{__('Original Name')}}</label>
                                <input class="form-control" name="name" type="text" readonly value="{{old('original_name',$photo->original_name)}}" placeholder="{{__('Original Name')}}">
                                <small class="text-danger">@error('original_name') {{$message}}@enderror</small>
                            </div>
                            <div class="form-group">
                                <label>{{__('Path')}}</label>
                                <input class="form-control" name="path" type="text" readonly value="{{old('path',url('storage/photos/'.$photo->path))}}" placeholder="{{__('Email')}}">
                                <small class="text-danger">@error('path') {{$message}}@enderror</small>
                            </div>
                            <div class="form-group">
                                <label>{{__('Type')}}</label>
                                <br>
                                <input name="type" @if($photo->type) checked @endif type="checkbox" data-on="سایت" data-off="مطلب" data-size="sm" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
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
                                <input class="form-control" name="detail" type="text" value="{{old('detail',$photo->detail)}}" placeholder="{{__('Detail')}}">
                                <small class="text-danger">@error('detail') {{$message}}@enderror</small>
                            </div>
                            <div class="form-group">
                                <label>{{__('Place')}}</label>
                                <input class="form-control" name="place" type="text" value="{{old('place',$photo->place)}}" placeholder="{{__('Place')}}">
                                <small class="text-danger">@error('path') {{$message}}@enderror</small>
                            </div>

                        </div>
                    </fieldset>
                </div>
            </div>

            <!-- END cards box-->

        </div>
    </section>

@endsection
@push('js'))
<script type="text/javascript" src="{{asset('/admin/js/dropzone.js')}}"></script>

<script>

    var images = @json($photo);
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
                    url: "/admin/galleries/" + images.id,
                    type: 'DELETE',
                    data: {
                        "id": images.id,
                        "_token": token,
                    },
                    success: function (result) {
                        window.location.replace('/admin/galleries/');
                    }
                });
            var _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        } ,
        acceptedFiles: ".jpg ,.png",
        maxFiles: 1,
        maxFilesize: 0.3,
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

        url: "{{ route('galleries.store') }}",
        sending: function(file, xhr, formData){
            formData.append("_token","{{csrf_token()}}")
        },
        success: function(file, response){
            id = response.photo_id.original_name;
            photosGallery.push(response.photo_id)
        }

    });


    var mockFile = {name:images.path,size:5000}
    drop.emit('addedfile',mockFile);
    drop.emit('thumbnail',mockFile,'/storage/photos/'+images.path);
    drop.emit('complete',mockFile);
    productGallery = function(){
        document.getElementById('uploaded-photo').value = photosGallery
    }

</script>


@endpush

