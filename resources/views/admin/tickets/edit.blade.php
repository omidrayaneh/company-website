@extends('admin.layouts.master')
@section('title')
    <title>{{__('Edit Ticket')}}</title>
@endsection
@section('content')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>
                    {{__('Edit Ticket')}}
                    <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <!-- START card-->
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body offset-md-2 col-md-8 ">

                        <div class="row">
                            <div class="col">
                                <label>{{__('Title')}} : {{$ticket->title}}</label>
                            </div>
                            <div class="col">
                                <label>{{__('Status')}} :
                                <input name="status" type="checkbox" @if($ticket->status) checked @endif data-on="باز"
                                       data-off="بسته" data-size="sm" data-toggle="toggle" data-onstyle="success"
                                       data-offstyle="danger">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>{{__('User Name')}} : {{$ticket->user->name}}</label>
                            </div>
                            <div class="col">
                                <label>{{__('Created At')}} : {{Morilog\Jalali\Jalalian::fromDateTime($ticket->created_at)}}</label>
                            </div>
                        </div>
                        <div class="row">
                            <form action="/close_ticket/{{$ticket->ticket_id}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger float-start">بستن تیکت</button>
                            </form>
                        </div>

                        <div class="container mt-5">
                            <br>
                            @foreach ($ticket->comments as $comment)
                                <div class="card border-dark ">
                                    <div class=" card-header bg-grey">
                                        <div class="row">
                                            <div class="col-4">
                                                @if($comment->user->role == 'admin' or $comment->user->role == 'manager')
                                                    <span><span class="badge bg-info" > پشتیبان</span> پاسخ توسط :   {{ $comment->user->name }} </span>
                                                @elseif( $comment->user->role == 'user')
                                                    <span><span class="badge bg-success" > کاربر عادی</span> پاسخ توسط :   {{ $comment->user->name }} </span>
                                                @endif
                                            </div>
                                            <div class="col-4">
                                                <span class="pull-right"> در تاریخ :  {{Morilog\Jalali\Jalalian::fromDateTime($comment->created_at)}}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" card-body border-dark" >
                                        {{ $comment->comment }}
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="comment-form">
                            <form action="{{ url('comment') }}" method="POST" class="form">
                                {!! csrf_field() !!}

                                <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">

                                <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                    <textarea rows="10" id="comment" class="form-control" name="comment"></textarea>
                                    @if ($errors->has('comment'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group mt-2 float-start">
                                    <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
            <!-- END card-->
        </div>
    </section>
@endsection

@push('js')
    <script src="{{asset('admin/js/ckeditor/ckeditor.js')}}"></script>
@endpush

