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
                    <li>تیکت های من</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contact-area ptb-100">
        <div class="profile">
            <div class="row">
                @include('layouts.parts.profile-sidebar')
                <div class="col-9">
                    <div class="container">
                        <div class="panel-body">
                            @if ($tickets->isEmpty())
                                <p>تیکت فعالی ندارید.</p>
                            @else
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>{{__('category')}}</th>
                                        <th>{{__('Title')}}</th>
                                        <th>{{__('Status')}}</th>
                                        <th>{{__('Updated_At')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($tickets as $ticket)
                                        <tr>
                                            <td>
                                                @foreach ($categories as $category)
                                                    @if ($category->id === $ticket->category_id)
                                                        {{ $category->name }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ url('profile/tickets/'. $ticket->ticket_id) }}">
                                                    #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                                                </a>
                                            </td>
                                            <td>
                                                @if($ticket->status )
                                                    <span class="badge bg-success">{{__('Open')}}</span>
                                                @else
                                                    <span class="badge bg-danger ">{{__('Close')}}</span>
                                                @endif
                                            </td>
                                            <td>{{ Morilog\Jalali\Jalalian::fromDateTime($ticket->created_at)}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                              <div class="d-flex justify-content-center">
                                  {{ $tickets->render() }}
                              </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
