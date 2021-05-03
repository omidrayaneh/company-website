@extends('admin.layouts.master')
@section('title')
    <title>{{__('Users List')}}</title>
@endsection
@section('content')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>
                    {{__('Users List')}}
                    <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <!-- START cards box-->
            <div class="card card-default">
                <div class="d-flex justify-content-between ">
                    <div class="card-header ">{{__('Users Table List')}}</div>
                    <div class="float-right">
                        <a class="btn btn-secondary" href="{{route('users.create')}}">
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
                            <th>{{__('Email')}}</th>
                            <th>{{__('Role')}}</th>
                            <th>{{__('Status')}}</th>
                            <th>{{__('Created At')}}</th>
                            <th>{{__('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key =>$user )
                            {{--                            ($users->currentPage()--}}
                            {{--                                @dd($loop->iteration+2)--}}
                            <tr class="text-center">
{{--                                @dd(($users->currentPage()*$loop->iteration)+$loop->iteration)--}}
                                <td>{{($num ++)}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @if($user->role == __('user'))
                                        <span class="badge badge-purple float-center">{{__('User')}}</span>
                                    @elseif($user->role == __('manager'))
                                        <span class="badge badge-purple float-center">{{__('Manager')}}</span>
                                    @elseif($user->role == __('admin'))
                                        <span class="badge badge-purple float-center">{{__('Admin')}}</span>
                                    @endif
                                </td>
                                <td>
                                @if($user->active)
                                        <span class="badge badge-success float-center">{{__('Accepted')}}</span>
                                    @else
                                        <span class="badge badge-danger float-center">{{__('Not Approved')}}</span>
                                    @endif
                                </td>
                                <td>{{Morilog\Jalali\Jalalian::fromDateTime($user->created_at)}}</td>

                                <td>
                                    <a href="{{route('users.edit',$user->id)}}" data-toggle="tooltip"
                                       data-title="{{__('Edit')}}">
                                        <span class="fa fa-edit blue"></span>

                                    </a>
                                    |
                                    <a href="#" data-id="{{ $user->id }}" class="deleteRecord" data-toggle="tooltip"
                                       data-title="{{__('Delete')}}">
                                        <span class="fa fa-trash red"></span>
                                    </a>
                                    <input type="hidden" id="user_id" value="{{$user->id}}">
                                    <form action="{{ route('users.destroy',  $user->id) }}" id="delete-form"
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
                        {{$users->links()}}
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
                        url: "/admin/users/" + id,
                        type: "DELETE",
                        data: {
                            "id": id,
                            "_token": token
                        },
                        success: function (res) {
                            setTimeout(function () {
                                window.location.replace('/admin/users');
                            }, 500);
                            Toast.fire({icon: 'success', title: 'کاربر با موفقیت حذف شد'})
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

