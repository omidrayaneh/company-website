@extends('admin.layouts.master')
@section('title')
    <title>{{__('Machine')}}</title>
@endsection
@section('content')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>
                    {{__('Machine List')}}
                    <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <!-- START cards box-->
            <div class="card card-default">
                <div class="d-flex justify-content-between ">
                    <div class="card-header ">{{__('Machine Table List')}}</div>
                    <div class="float-right">
                        <a class="btn btn-secondary" href="{{route('machines.create')}}">
                            <i class="fa fa-plus limegreen"></i> جدید
                        </a>
                    </div>
                </div>

                <!-- START table-responsive-->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="table-ext-1">
                        <thead>
                        <tr class="text-center">
                            <th>{{__('Row')}}</th>
                            <th>{{__('Title')}}</th>
                            <th>{{__('Status')}}</th>
                            <th>{{__('Created At')}}</th>
                            <th>{{__('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($machines as $key =>$machine )
                            <tr class="text-center">
                                <td>{{$machines->currentPage() == 1 ? $key+1: (($machines->perPage()*($machines->currentPage()-1)))+$key+1}}</td>

                                <td>{{$machine->title}}</td>
                                <td>
                                @if($machine->status)
                                        <span class="badge badge-success float-center">{{__('Enable')}}</span>
                                    @else
                                        <span class="badge badge-danger float-center">{{__('Disable')}}</span>
                                    @endif
                                </td>
                                <td>{{Morilog\Jalali\Jalalian::fromDateTime($machine->created_at)->format('H:m:s Y/m/d')}}</td>
                                <td>
                                    <a href="{{route('machines.edit',$machine->id)}}" data-toggle="tooltip"
                                       data-title="{{__('Edit')}}">
                                        <span class="fa fa-edit blue"></span>

                                    </a>
                                    |
                                    <a href="#" data-id="{{ $machine->id }}" class="deleteRecord" data-toggle="tooltip"
                                       data-title="{{__('Delete')}}">
                                        <span class="fa fa-trash red"></span>
                                    </a>
                                    <input type="hidden" id="machine_id" value="{{$machine->id}}">
                                    <form action="{{ route('machines.destroy',  $machine->id) }}" id="delete-form"
                                          method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <br>
                    <div class="d-flex justify-content-center">
                        {{$machines->links()}}
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
                        url: "/admin/machines/" + id,
                        type: "DELETE",
                        data: {
                            "id": id,
                            "_token": token
                        },
                        success: function (res) {
                            setTimeout(function () {
                                window.location.replace('/admin/machines');
                            }, 500);
                            Toast.fire({icon: 'success', title: 'دستگاه حذف شد'})
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

