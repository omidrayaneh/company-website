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
                    {{__('Menus List')}}
                    <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <!-- START cards box-->
            <div class="card card-default">
                <div class="d-flex justify-content-between ">
                    <div class="card-header ">{{__('Menu Table List')}}</div>
                    <div class="float-right">
                        <a class="btn btn-secondary" href="{{route('menus.create')}}">
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
                            <th class="text-left">{{__('Title')}}</th>
                            <th>{{__('Status')}}</th>
                            <th>{{__('Created At')}}</th>
                            <th>{{__('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($menus as $key =>$menu )
                            <tr class="text-center">
                                <td>{{$menus->currentPage() == 1 ? $key+1: (($menus->perPage()*($menus->currentPage()-1)))+$key+1}}</td>
                                <td class="text-left">{{$menu->title}}</td>
                                <td>
                                @if($menu->status )
                                        <span class="badge badge-success float-center">{{__('Enable')}}</span>
                                @else
                                    <span class="badge badge-danger float-center">{{__('Disable')}}</span>
                                @endif
                                </td>
                                <td>{{Morilog\Jalali\Jalalian::fromDateTime($menu->created_at)}}</td>
                                <td>
                                    <a href="{{route('menus.edit',$menu->slug)}}" data-toggle="tooltip"
                                       data-title="{{__('Edit')}}">
                                        <span class="fa fa-edit blue"></span>

                                    </a>
                                    |

                                    <a href="#" data-id="{{ $menu->slug }}" class="deleteRecord" data-toggle="tooltip"
                                       data-title="{{__('Delete')}}">
                                        <span class="fa fa-trash red"></span>
                                    </a>
                                    <input type="hidden" id="user_id" value="{{$menu->slug}}">
                                    <form action="{{ route('menus.destroy',  $menu->slug) }}" id="delete-form"
                                          method="post">
                                        @csrf
                                        @method('DELETE')
{{--                                        <input type="hidden" name="_method" value="DELETE">--}}
                                    </form>
                                </td>
                            </tr>
                            @if(count($menu->childrenRecursive) > 0)
                                @include('admin.layouts.partials.menus.list', ['menus'=>$menu->childrenRecursive, 'level'=>1])
                            @endif
                        @endforeach
                        </tbody>
                    </table>

                    <br>
                    <div class="d-flex justify-content-center">
                        {{$menus->links()}}
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
                        url: "/admin/menus/" + id,
                        type: "DELETE",
                        data: {
                            "id": id,
                            "_token": token
                        },
                        success: function (res) {
                            setTimeout(function () {
                                window.location.replace('/admin/menus');
                            }, 500);
                            Toast.fire({icon: 'success', title: 'منو با موفقیت حذف شد'})
                        },
                        error: function (err) {
                            Swal.fire({
                                title:'خطا',
                                text: 'امکان حذف وجود ندارد',
                                icon:'error',
                                timer:1500
                            })
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

