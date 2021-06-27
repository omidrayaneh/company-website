@extends('admin.layouts.master')
@section('title')
    <title>{{__('Order')}}</title>
@endsection
@section('content')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h3 class="m-0"> شماره سفارش {{$order->role == 'customer' ? 'مشتری' : 'همکار'}} : {{$order->id}} </h3>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-xl-4 col-6 br py-2">
                            <div class="row">
                                <div class="col-lg-10">
                                    <h4>{{$order->role == 'customer' ? 'آدرس مشتری' : 'آدرس همکار'}}</h4>
                                    <address></address>{{$order->address}}
                                    <br>{{$order->city}}
                                    <br>{{$order->province}}</div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-xl-4 col-12 py-2">
                            <div class="clearfix">
                                <p class="float-left">{{Morilog\Jalali\Jalalian::fromDateTime($order->created_at)->format('H:m:s Y/m/d')}}</p>
                            </div>
                            <div class="clearfix">
                                <p class="float-left mr-2">تلفن : {{$order->phone}}  </p>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive table-bordered mb-3">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>نام</th>
                                <th>نام شرکت</th>
                                <th>موبایل شرکت</th>
                                <th>تلفن شرکت</th>
                                <th>ایمیل شرکت</th>
                               @if($order->role == 'customer') <th>نوع دستگاه سفارشی</th>@endif
                                @if($order->role == 'customer') <th>نوع صنعت شرکت</th>@endif
                                <th>وضعیت سفارش</th>
                                <th>تاریخ سفارش</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$order->name}}</td>
                                <td>{{$order->company}}</td>
                                <td>{{$order->mobile}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->company}}</td>
                                @if($order->role == 'customer') <td>{{$order->machine->title}}</td>@endif
                                @if($order->role == 'customer')  <td>{{$order->industry->title}}@endif
                                @if($order->status)
                                    <td><span class="badge badge-success float-center">{{__('Show')}}</span></td>
                                @else
                                    <td>   <span class="badge badge-danger float-center">{{__('Not Show')}}</span></td>
                                @endif
                                <td>{{Morilog\Jalali\Jalalian::fromDateTime($order->created_at)->format('H:m:s Y/m/d')}}</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
