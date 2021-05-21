@extends('admin.layouts.master')
@section('title')
    <title>{{__('Photo List')}}</title>
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
            <div class="card card-default">
                <div class="card-header ">{{__('Create New Photo')}}</div>
                <div class="card-body">
                    <fieldset>
                        <div class="form-group ">
                            <div class="col-md-10">
                                <input type="hidden" name="photo_id[]" id="uploaded-photo" required>
                                <div id="photo" class="dropzone "></div>
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
    var images = @json($photos);

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
        } ,
        acceptedFiles: ".jpg ,.png,.ico",
        maxFiles: 10,
        maxFilesize: 1.5,
        paramName: "file",
        acceptedMimeTypes: null,
        acceptParameter: null,
        enqueueForUpload: true,
        dictDefaultMessage:"افزودن تصویر",
        dictFileTooBig:"اندازه تصویر بزرگ است",// image size error message
        dictInvalidFileType:"فرمت فایل اشتباه است",// file type error message
        dictCancelUpload:"لغو آپلود",//cancel error message
        dictCancelUploadConfirmation:"آیا می خواهید آپلود را متوقف کنید؟", //cancel conform
        dictMaxFilesExceeded:"برای هر محصول فقط 5 تصویر می توانید آپلود کنید",
        dictRemoveFile:"حذف",// remove file
        clickable:true,
        url: "{{ route('galleries.store') }}",
        sending: function(file, xhr, formData){
            formData.append("_token","{{csrf_token()}}")
        },
        success: function(file, response){
            id = response.photo_id.original_name;
            photosGallery.push(response.photo_id)
        }
    });

          $.each(images, function(index, val) {
            var  file = '/storage/photos/'+val.path;
            console.log(file)
              var mockFile = { name: val.original_name, size: 12345 };
              drop.emit('addedfile',mockFile);
              drop.emit('thumbnail',mockFile,val.path);
              drop.emit('complete',mockFile);
          });


    productGallery = function(){
        document.getElementById('uploaded-photo').value = photosGallery
    }

</script>


@endpush

