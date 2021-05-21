@extends('admin.layouts.master')
@section('title')
    <title>{{__('Create Post')}}</title>
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
                    {{__('New Post')}}
                    <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <!-- START card-->
            <div class="card card-default">
                <div class="card-header"></div>
                <div class="card-body offset-md-2 col-md-8 ">
                    <form action="{{route('posts.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>{{__('Title')}}</label>
                            <input class="form-control" name="title" type="text" value="{{old('title')}}"
                                   placeholder="{{__('Title')}}">
                            <small class="text-danger">@error('title') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group ">
                            <label>{{__('Create New Photo')}}</label>
                            <input type="hidden" name="photo_id" id="uploaded-photo" value="{{old('photo_id')}}">
                            <div id="photo" class="dropzone "></div>
                            <small class="text-danger">@error('photo_id') {{$message}}@enderror</small>
                        </div>

                        <div class="form-group">
                            <label>{{__('Description')}}</label>
                            <textarea class="form-control" id="editor" name="description"
                                      placeholder="{{__('Description')}}">{{old('description')}}</textarea>
                            <small class="text-danger">@error('description') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('Menus')}}</label>
                            <select name="menu_id" class="form-control">
                                <option value="" selected>{{__('Select')}}</option>
                                @foreach($menus as $menu)
                                    <option value="{{$menu->id}}">{{$menu->title}}</option>
                                    @if(count($menu->childrenRecursive) > 0)
                                        @include('admin.layouts.partials.menus.index', ['menus'=>$menu->childrenRecursive, 'level'=>1])
                                    @endif
                                @endforeach
                            </select>
                            <small class="text-danger">@error('parent_id') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('Meta Description')}}</label>
                            <br>
                            <input class="form-control" name="meta_description" type="text"
                                   placeholder="{{__('Meta Description')}}">
                            <small class="text-danger">@error('status') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('Meta Keywords')}}</label>
                            <br>
                            <input class="form-control" name="meta_keywords" type="text"
                                   placeholder="{{__('Meta Keywords')}}">
                            <small class="text-danger">@error('meta_keywords') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('Status')}}</label>
                            <br>
                            <input name="status" type="checkbox" data-on="فعال" data-off="غیرفعال" data-size="sm"
                                   data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
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

@push('js')
    <script type="text/javascript" src="{{asset('/admin/js/dropzone.js')}}"></script>
    <script src="{{asset('admin/js/ckeditor/ckeditor.js')}}"></script>
    <script>

        Dropzone.autoDiscover = false;
        var id = '';
        var photosGallery = []
        var drop = new Dropzone('#photo', {
            addRemoveLinks: true,
            removedfile: function (file) {
                var name = file.name;
                var token = $("meta[name='csrf-token']").attr("content");
                $.ajax(
                    {
                        url: "/admin/galleries/delete/" + name,
                        type: 'DELETE',
                        data: {
                            "name": name,
                            "_token": token,
                        },
                        success: function (result) {
                            window.location.replace('/admin/galleries/create');
                        }
                    });
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            },
            acceptedFiles: ".jpg ,.png",
            maxFiles: 1,
            maxFilesize: 0.8,
            paramName: "file",
            acceptedMimeTypes: null,
            acceptParameter: null,
            enqueueForUpload: true,
            dictDefaultMessage: "افزودن تصویر",
            dictFileTooBig: "اندازه تصویر بزرگ است",// image size error message
            dictInvalidFileType: "فرمت فایل اشتباه است",// file type error message
            dictCancelUpload: "لغو آپلود",//cancel error message
            dictCancelUploadConfirmation: "آیا می خواهید آپلود را متوقف کنید؟", //cancel conform
            dictMaxFilesExceeded: "برای هر محصول فقط 5 تصویر می توانید آپلود کنید",
            dictRemoveFile: "حذف",// remove file
            clickable: true,
            url: "{{ route('galleries.store') }}",
            sending: function (file, xhr, formData) {
                formData.append("_token", "{{csrf_token()}}")
            },
            success: function (file, response) {
                document.getElementById('uploaded-photo').value = response.photo_id.id
            }
        });


        var photoId = document.getElementById('uploaded-photo').value

        if (photoId) {

            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax(
                {
                    url: "/admin/galleries/" + photoId,
                    type: 'get',
                    data: {
                        "_token": token,
                    },
                    success: function (result) {
                        var photo = result.photo;
                        var file = '/storage/photos/' + photo.path;
                        var mockFile = {name: photo.original_name, size: 12345};
                        drop.emit('addedfile', mockFile);
                        drop.emit('thumbnail', mockFile, '/storage/photos/' + photo.path);
                        drop.emit('complete', mockFile);
                    }
                });
        }


        CKEDITOR.replace('editor', {
            language: 'fa',
            filebrowserUploadMethod: 'form',
            filebrowserBrowseUrl: 'form',
            filebrowserUploadUrl: '{{route('photos.store',['_token'=>csrf_token()])}}',
            removePlugins: 'cloudservices, easyimage',
        });

    </script>
@endpush

