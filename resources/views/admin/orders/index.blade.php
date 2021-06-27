@extends('admin.layouts.master')
@section('title')
    <title>{{__('Orders')}}</title>
@endsection
@section('content')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>
                    {{__('Orders List')}}
                    <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <!-- START cards box-->
            <div class="card card-default">
                <div class="d-flex justify-content-between ">
                    <div class="card-header ">{{__('Order Table List')}}</div>
                </div>

                <!-- START table-responsive-->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="table-ext-1">
                        <thead>
                        <tr class="text-center">
                            <th>{{__('Row')}}</th>
                            <th>نوع مشتری</th>
                            <th>نام</th>
                            <th>نام شرکت</th>
                            <th>موبایل شرکت</th>
                            <th>تلفن شرکت</th>
                            <th>ایمیل شرکت</th>
                            <th>نوع دستگاه سفارشی</th>
                            <th>نوع صنعت شرکت</th>
                            <th>وضعیت سفارش</th>
                            <th>تاریخ سفارش</th>
                            <th>{{__('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $key =>$order )
                            <tr class="text-center">
                                <td>{{$orders->currentPage() == 1 ? $key+1: (($orders->perPage()*($orders->currentPage()-1)))+$key+1}}</td>
                                @if($order->role == 'customer')
                                    <td>   <span class="badge badge-success float-center">{{__('Customer')}}</span></td>
                                @else
                                    <td>   <span class="badge badge-purple float-center">{{__('Colleague')}}</span></td>
                                @endif
                                <td>{{$order->name}}</td>
                                <td>{{$order->company}}</td>
                                <td>{{$order->mobile}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->company}}</td>
                                @if($order->role == 'customer')
                                    <td>{{$order->machine->title}}</td>
                                @else
                                    <td>---</td>
                                @endif
                                @if($order->role == 'customer')
                                    <td>{{$order->industry->title}}
                                @else
                                    <td>---</td>
                                @endif
                                @if($order->status)
                                    <td><span class="badge badge-success float-center">{{__('Show')}}</span></td>
                                @else
                                    <td>   <span class="badge badge-danger float-center">{{__('Not Show')}}</span></td>
                                @endif
                                <td>{{Morilog\Jalali\Jalalian::fromDateTime($order->created_at)->format('H:m:s Y/m/d')}}</td>
                                <td>
                                    <a href="{{route('order.show',$order->id)}}" data-toggle="tooltip"
                                       data-title="نمایش">
                                        <span class="fa fa-edit blue"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <br>
                    <div class="d-flex justify-content-center">
                        {{$orders->links()}}
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
@push('js')
    <script>
        $(".deleteRecord").click(function () {

            swal({
                title: "هشدار",
                text: "آیا از حذف سطر جاری مطمئن هستید؟",
                icon: "warning",
                buttons: {
                    cancel: {
                        text: "لغو",
                        visible: true,
                    },
                    confirm: {
                        text: "بلی",
                        visible: true,
                    }
                },
            }).then((res) => {
                if (res) {
                    var id = $(this).data("id");
                    var token = $("meta[name='csrf-token']").attr("content");

                    $.ajax({
                        url: "/admin/metas/" + id,
                        type: "DELETE",
                        data: {
                            "id": id,
                            "_token": token
                        },
                        success: function (res) {
                            setTimeout(function () {
                                window.location.replace('/admin/metas');
                            }, 500);
                            Toast.fire({icon: 'success', title: 'متا حذف شد'})
                        }
                    })
                } else {
                    Toast.fire({icon: 'error', title: 'عملیات حذف، لغو شد'})
                }
            }).then((err) => {

            });

        });

    </script>
@endpush

