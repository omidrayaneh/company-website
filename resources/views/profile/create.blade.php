@extends('layouts.master')

@push('title')
    <title>{{__('App Name')}} - {{__('Ticketing')}}</title>
@endpush
@push('css')
    <link rel="stylesheet" href="{{asset('/admin/css/dropzone.css')}}">
@endpush
@section('content')
    <div class="contact-area ptb-100 " >
            <div class="profile">
                <div class="row">
                    @include('layouts.parts.tickets-sidebar')
                    <div class="col-9">
                        <h3>تیکت جدید</h3>
                        @include('includes.flash')
                        <form method="POST" action="/new_ticket">
                            @csrf
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group">
                                    <input type="text" name="title" id="title" class="form-control"
                                           data-error="{{__('Title')}}" placeholder="{{__('Title')}}*">
                                    <small class="text-danger">@error('title') {{$message}}@enderror</small>
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group">
                                    <select id="category" type="category" class="form-control" name="category">
                                        <option value="">{{__('Select Category')}}*</option>
                                        @foreach (auth()->user()->categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <small class="text-danger">@error('category') {{$message}}@enderror</small>
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group">
                                    <select id="priority" type="" class="form-control" name="priority">
                                        <option value="">{{__('Select Priority')}}</option>
                                        <option value="{{__('Low')}}">{{__('Low')}}</option>
                                        <option value="{{__('Medium')}}">{{__('Medium')}}</option>
                                        <option value="{{__('High')}}">{{__('High')}}</option>
                                    </select>
                                    <small class="text-danger">@error('priority') {{$message}}@enderror</small>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="mb-2" for="">متن تیکت</label>

                                <textarea class="form-control" id="editor" name="message"
                                          placeholder="متن تیکت">{{old('message')}}</textarea>
                                <small class="text-danger">@error('message') {{$message}}@enderror</small>
                                </div>
                                <br>
                                <div class="form-group ">
                                    <input type="hidden" name="file_id" id="uploaded-file" >
                                    <div id="file" class="dropzone "></div>
                                </div>
                                <br>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">ارسال پیام <i
                                            class="ri-arrow-left-line"></i><span></span></button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>

    </div>
@endsection
@push('js')
    <script type="text/javascript" src="{{asset('/admin/js/dropzone.js')}}"></script>
    <script src="{{asset('admin/js/ckeditor/ckeditor.js')}}"></script>

    <script>
        {{--var files = @json($files)--}}

            Dropzone.autoDiscover = false;
        var file_id= '';
        var photosGallery = []
        var drop = new Dropzone('#file', {
            addRemoveLinks: true,
            acceptedFiles: ".jpg ,.png,.rar,.zip",
            maxFiles: 1,
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
                file_id = response.file_id;
                console.log(file_id)
                productGallery();
            }
        });


        productGallery = function(){
            document.getElementById('uploaded-file').value = file_id
        }

        CKEDITOR.replace('editor',{
            language: 'fa',
            filebrowserUploadMethod: 'form',
            filebrowserBrowseUrl: 'form',
            filebrowserUploadUrl: '{{route('photos.store',['_token'=>csrf_token()])}}',
            removePlugins: 'cloudservices, easyimage',
        });

    </script>
@endpush
