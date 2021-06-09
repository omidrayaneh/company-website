@extends('layouts.master')

@push('title')
    <title>{{__('App Name')}} - {{__('Files Upload')}}</title>
@endpush
@section('content')
    <div class="contact-area ptb-100">
        <div class="profile">
            <div class="row">
                @include('layouts.parts.tickets-sidebar')
                <div class="col-9">
                    @include('includes.flash')
                    <div class="container">
                        <div class="panel-body">
                            @if ($files->isEmpty())
                                <p>فایلی موجود نیست.</p>
                            @else
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>{{__('Row')}}</th>
                                        <th>{{__('File Name')}}</th>
                                        <th>{{__('Download File')}}</th>
                                        <th>{{__('Created_At')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($files as $key=>$file)
                                        <tr>
                                            <td>{{$files->currentPage() == 1 ? $key+1: (($files->perPage()*($files->currentPage()-1)))+$key+1}}</td>
                                            <td>{{$file->original_name}}</td>
                                            <td><a class="red" href="{{asset($file->path)}}">{{__('Download')}}</a></td>
                                            <td>{{ Morilog\Jalali\Jalalian::fromDateTime($file->created_at)}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <div class="d-flex justify-content-center">
                                    {{ $files->links() }}
                                </div>
                            @endif
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection
