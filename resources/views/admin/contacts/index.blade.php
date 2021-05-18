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
                            <th>{{__('Name')}}</th>
                            <th>{{__('phone')}}</th>
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

                                <td>{{$contact->name}}</td>
                                <td>{{$contact->phone}}</td>
                                <td>{{$contact->email}}</td>
                                <td>
                                @if($contact->status)
                                        <span class="badge badge-success float-center">{{__('Read')}}</span>
                                @else
                                        <span class="badge badge-danger float-center">{{__('Not Read')}}</span>
                                @endif
                                </td>
                                <td>{{Morilog\Jalali\Jalalian::fromDateTime($contact->created_at)}}</td>
                                <td>
                                    <a href="{{route('contacts.edit',$contact->id)}}" data-toggle="tooltip"
                                       data-title="{{__('Show')}}">
                                        <span class="fa fa-edit blue"></span>

                                    </a>
                                    |
                                    <a href="#" data-id="{{ $contact->id }}" class="deleteRecord" data-toggle="tooltip"
                                       data-title="{{__('Delete')}}">
                                        <span class="fa fa-trash red"></span>
                                    </a>
                                    <input type="hidden" id="user_id" value="{{$contact->id}}">
                                    <form action="{{ route('contacts.destroy',  $contact->id) }}"
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
                        url: "/admin/contacts/" + id,
                        type: "DELETE",
                        data: {
                            "id": id,
                            "_token": token
                        },
                        success: function (res) {
                            setTimeout(function () {
                                window.location.replace('/admin/contacts');
                            }, 500);
                            Toast.fire({icon: 'success', title: 'پیغام حذف شد'})
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
