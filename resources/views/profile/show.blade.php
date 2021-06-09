@extends('layouts.master')
@push('title')
    <title>{{__('App Name')}} - {{__('Ticketing')}}</title>
@endpush
@push('css')
    <link rel="stylesheet" href="{{asset('/admin/css/dropzone.css')}}">
@endpush
@section('content')
    <div class="contact-area ptb-100">
        <div class="profile">
            <div class="row">
                @include('layouts.parts.profile-sidebar')
                <div class="col-9">
                    @if(!$ticket->status)
                        <div class="alert alert-warning">
                            {{__('Ticket Closed')}}
                        </div>
                    @endif
                    @include('includes.flash')
                    <div class="container">
                        <div class="panel-body">
                            <div class="ticket-info">
                                <div class="row">
                                    <div class="col-4">
                                        <p><span> موضوع تیکت : </span>{{ $ticket->title }}</p>
                                    </div>
                                    <div class="col-4">
                                        <p>
                                            @if ($ticket->status)
                                                وضعیت تیکت: <span class="badge bg-success">باز</span>
                                            @else
                                                وضعیت تیکت: <span class="badge bg-danger">بسته شده</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="col-4">
                                        <form action="/close_ticket/{{$ticket->ticket_id}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger float-start">بستن تیکت</button>
                                        </form>
                                    </div>

                                    <div class="col-6 mt-2 ">
                                        <p>
                                            <span> تاریخ ایجاد تیکت : </span>{{Morilog\Jalali\Jalalian::fromDateTime($ticket->created_at)->format(' H:m:s :Y/m/d ')}}
                                        </p>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <p><span> گروه تیکت : </span>{{$ticket->category->name}}</p>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <p><span> متن تیکت : </span>{!! $ticket->message !!} </p>
                                    </div>
                                    @if(!empty($ticket->file->path))
                                    <div class="col-6 mt-2">
                                        <a class="red" href="{{asset($ticket->file->path)}}">{{__('Download File')}}</a>
                                    </div>
                                    @endif
                                </div>

                            </div>

                            <br>

                            <div class="comments">
                                @foreach ($ticket->comments as $comment)
                                    <div
                                        class="panel panel-@if($ticket->user->id === $comment->user_id) {{"default"}}@else{{"success"}}@endif">
                                        <div class="card card-header bg-grey">
                                            <div class="row ">
                                                <div class="col-4">
                                                    @if($comment->user->role == 'admin' or $comment->user->role == 'manager')
                                                        <span><span class="badge bg-info"> پشتیبان</span> پاسخ توسط :   {{ $comment->user->name }} </span>
                                                    @elseif( $comment->user->role == 'user')
                                                        <span><span class="badge bg-success"> کاربر عادی</span> پاسخ توسط :   {{ $comment->user->name }} </span>

                                                    @endif
                                                </div>
                                                <div class="col-4">
                                                    <span
                                                        class="pull-right"> در تاریخ :  {{Morilog\Jalali\Jalalian::fromDateTime($comment->created_at)->format(' H:m:s :Y/m/d')}}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card card-body">
                                            {!!  $comment->comment  !!}
                                        </div>
                                        @if(!empty($comment->file->path))
                                        <div class=" mt-2">
                                            <a class="red" href="{{asset($comment->file->path)}}">{{__('Download File')}}</a>
                                        </div>
                                        @endif
                                    </div>
                                    <hr>
                                @endforeach
                            </div>

                            <div class="comment-form">
                                <form action="{{ route('comment') }}" method="POST" class="form">
                                    @csrf

                                    <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">

                                    <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                        <label class="mb-2" for=""> پاسخ تیکت</label>

                                        <textarea class="form-control" id="editor" name="comment"
                                                  placeholder="{{__('message')}}">{{old('message')}}</textarea>

                                        @if ($errors->has('comment'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                         </span>
                                        @endif
                                    </div>
                                    <div class="form-group ">
                                        <input type="hidden" name="file_id" value="{{old('message')}}"
                                               id="uploaded-file">
                                        <div id="file" class="dropzone "></div>
                                    </div>

                                    <div class="form-group mt-2 float-start">
                                        <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
        var file_id = '';
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
            dictDefaultMessage: "افزودن فایل",
            dictFileTooBig: "اندازه فایل بزرگ است",// image size error message
            dictInvalidFileType: "فرمت فایل اشتباه است",// file type error message
            dictCancelUpload: "لغو آپلود",//cancel error message
            dictCancelUploadConfirmation: "آیا می خواهید آپلود را متوقف کنید؟", //cancel conform
            dictMaxFilesExceeded: "برای هر ارسال فقط 10 فایل می توانید آپلود کنید",
            dictRemoveFile: "حذف",// remove file
            clickable: true,
            url: "{{ route('file.store') }}",
            sending: function (file, xhr, formData) {
                formData.append("_token", "{{csrf_token()}}")
            },
            success: function (file, response) {
                file_id = response.file_id;
                console.log(file_id)
                productGallery();
            }
        });


        productGallery = function () {
            document.getElementById('uploaded-file').value = file_id
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
