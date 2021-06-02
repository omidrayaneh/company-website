@extends('layouts.master')

@push('title')
    <title>{{__('App Name')}} - {{__('File Upload')}}</title>
@endpush
@push('css')
    <link rel="stylesheet" href="{{asset('/admin/css/dropzone.css')}}">
@endpush
@section('content')
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>حساب کاربری</h2>
                <ul>
                    <li>
                        <a href="{{route('home')}}">خانه</a>
                    </li>
                    <li>{{__('File Upload')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contact-area ptb-100">
        <div class="profile">
            <div class="row">
                @include('layouts.parts.tickets-sidebar')
                <div class="col-9">
                    @include('includes.flash')
                    <div class="container">
                        <div class="card card-default">
                            <div class="card-header ">{{__('Upload File')}}</div>
                            <div class="card-body">
                                <fieldset>
                                    <div class="form-group ">
                                        <div class="col-md-10">
                                            <input type="hidden" name="file_id[]" id="uploaded-file" required>
                                            <div id="file" class="dropzone "></div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection
@push('js'))
<script type="text/javascript" src="{{asset('/admin/js/dropzone.js')}}"></script>

<script>
   {{--var files = @json($files)--}}

    Dropzone.autoDiscover = false;
    var id= '';
    var photosGallery = []
    var drop = new Dropzone('#file', {
        addRemoveLinks: true,
        removedfile: function(file) {
            console.log(file)
            var name = file.name;
            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax(
                {
                    url: "/profile/file/destroy/" + name,
                    type: 'DELETE',
                    data: {
                        "id": name,
                        "_token": token,
                    },
                    success: function (result) {
                        window.location.replace('/profile/upload');
                    }
                });
            var _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        } ,
        acceptedFiles: ".jpg ,.png,.rar",
        maxFiles: 10,
        maxFilesize: 100,
        paramName: "file",
        acceptedMimeTypes: null,
        acceptParameter: null,
        enqueueForUpload: true,
        dictDefaultMessage:"افزودن فایل",
        dictFileTooBig:"اندازه فایل بزرگ است",// image size error message
        dictInvalidFileType:"فرمت فایل اشتباه است",// file type error message
        dictCancelUpload:"لغو آپلود",//cancel error message
        dictCancelUploadConfirmation:"آیا می خواهید آپلود را متوقف کنید؟", //cancel conform
        dictMaxFilesExceeded:"برای هر ارسال فقط 10 فایل می توانید آپلود کنید",
        dictRemoveFile:"حذف",// remove file
        clickable:true,
        url: "{{ route('file.store') }}",
        sending: function(file, xhr, formData){
            formData.append("_token","{{csrf_token()}}")
        },
        success: function(file, response){
             id = response.id;
            console.log(response)
           photosGallery.push(response.id)
        }
    });

    // $.each(files, function(index, val) {
    //     var  file =  val.path;
    //     console.log(file)
    //     var mockFile = { name: val.original_name, size: 12345 };
    //     drop.emit('addedfile',mockFile);
    //     drop.emit('thumbnail',mockFile,val.path);
    //     drop.emit('complete',mockFile);
    // });


    productGallery = function(){
        document.getElementById('uploaded-file').value = photosGallery
    }

</script>


@endpush

