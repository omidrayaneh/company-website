@extends('admin.layouts.master')
@section('title')
    <title>{{__('Contact')}}</title>
@endsection
@section('content')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>
                    {{__('Contact List')}}
                    <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <!-- START cards box-->
            <div class="card card-default">
                <div class="d-flex justify-content-between ">
                    <div class="card-header ">{{__('Contact Table List')}}</div>
                    <div class="float-right">

                    </div>
                </div>

                <!-- START table-responsive-->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="table-ext-1">
                        <thead>
                        <tr class="text-center">
                            <th>{{__('Row')}}</th>
                            <th>{{__('companyName')}}</th>
                            <th>{{__('phone')}}</th>
                            <th>{{__('supportPhone')}}</th>
                            <th>{{__('supportPhoneName')}}</th>
                            <th>{{__('Email')}}</th>
                            <th>{{__('Status')}}</th>
                            <th>{{__('Created At')}}</th>
                            <th>{{__('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $key =>$contact )
                            <tr class="text-center">
                                <td>{{$contacts->currentPage() == 1 ? $key+1: (($contacts->perPage()*($contacts->currentPage()-1)))+$key+1}}</td>

                                <td>{{$contact->companyName}}</td>
                                <td>{{$contact->phone}}</td>
                                <td>{{$contact->supportPhone}}</td>
                                <td>{{$contact->supportPhoneName}}</td>
                                <td>{{$contact->email}}</td>
                                <td>
                                @if($company->status)
                                        <span class="badge badge-success float-center">{{__('Enable')}}</span>
                                    @else
                                        <span class="badge badge-danger float-center">{{__('Disable')}}</span>
                                    @endif
                                </td>
                                <td>{{Morilog\Jalali\Jalalian::fromDateTime($contact->created_at)}}</td>
                                <td>
                                    <a href="{{route('contacts.edit',$contact->id)}}" data-toggle="tooltip"
                                       data-title="{{__('Edit')}}">
                                        <span class="fa fa-edit blue"></span>

                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <br>
                    <div class="d-flex justify-content-center">
                        {{$contacts->links()}}
                    </div>
                </div>
                <!-- END table-responsive-->
                <div class="card-footer">
                    <div class="d-flex">
                        <div>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button">{{__('Search')}}</button>
                                </div>
                                <input class="form-control" type="text" placeholder="{{__('Search')}}">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END cards box-->

        </div>
    </section>

@endsection

