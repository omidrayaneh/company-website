@extends('layouts.master')
@push('title')
    <title>{{__('App Name')}} - {{__('Ticketing')}}</title>
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

                    <li> تیکت : {{ $ticket->ticket_id }} </li>
                </ul>
            </div>
        </div>
    </div>
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
                                    <div class="col">
                                        <p><span> موضوع تیکت : </span>{{ $ticket->message }}</p>
                                    </div>
                                    <div class="col">
                                        <p>
                                            @if ($ticket->status)
                                                وضعیت تیکت: <span class="badge bg-success">باز</span>
                                            @else
                                                وضعیت تیکت: <span class="badge bg-danger">بسته شده</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="col">
                                        <form action="/close_ticket/{{$ticket->ticket_id}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger float-start">بستن تیکت</button>
                                        </form>
                                    </div>
                                </div>

                            </div>

                            <hr>

                            <div class="comments">
                                @foreach ($comments as $comment)
                                    <div
                                        class="panel panel-@if($ticket->user->id === $comment->user_id) {{"default"}}@else{{"success"}}@endif">
                                        <div class="card card-header bg-grey">
                                            <div class="row ">
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

                                        <div class="card card-body">
                                            {{ $comment->comment }}
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>

                            <div class="comment-form">
                                <form action="{{ route('comment') }}" method="POST" class="form">
                                   @csrf

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
                </div>

            </div>

        </div>
    </div>

@endsection
