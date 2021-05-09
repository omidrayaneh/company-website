@extends('admin.layouts.master')
@section('title')
    <title>{{__('Photo List')}}</title>
@endsection
@section('content')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>
                    {{__('Photos')}}
                    <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <!-- START cards box-->
            <div class="card card-default">
                <div class="d-flex justify-content-between ">
                    <div class="card-header ">{{__('Photo List')}}</div>
                    <div class="float-right">
                        <a class="btn btn-secondary" href="{{route('galleries.create')}}">
                            <i class="fa fa-plus limegreen"></i> {{__('New')}}
                        </a>
                    </div>
                </div>

                <!-- START table-responsive-->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="table-ext-1">
                        <thead>
                        <tr class="text-center">
                            <th>{{__('Row')}}</th>
                            <th>{{__('Photo')}}</th>
                            <th>{{__('Type')}}</th>
                            <th>{{__('Status')}}</th>
                            <th>{{__('Place')}}</th>
                            <th>{{__('Detail')}}</th>
                            <th>{{__('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($photos as $key =>$photo )

                            <tr class="text-center">
                                <td>{{$photos->currentPage() == 1 ? $key+1: (($photos->perPage()*($photos->currentPage()-1)))+$key+1}}</td>
                                <td class="" >
                                    <img width="50" height="50" id="image" onclick="CopyToClipboard({{$photo->id}})" src="{{'/storage/photos/'.$photo->path }}" class="img-fluid rounded">
                                    <input type="text" id="imageSrc_{{$photo->id}}"  hidden value="{{'/storage/photos/'.$photo->path }}">

                                </td>
                                <td>
                                    @if($photo->type == 1)
                                        <span class="badge badge-purple float-center">عکس وب سایت</span>
                                    @else
                                        <span class="badge badge-danger float-center">عکس مطالب</span>
                                    @endif
                                </td>
                                <td>
                                    @if($photo->status)
                                        <span class="badge badge-success float-center">تایید شده</span>
                                    @else
                                        <span class="badge badge-danger float-center">تایید نشده</span>
                                    @endif
                                </td>
                                <td>{{$photo->place}}</td>
                                <td>{{$photo->detile}}</td>
                                <td>
                                    <a href="{{route('galleries.edit',$photo->id)}}" data-toggle="tooltip"
                                       data-title="{{__('Edit')}}">
                                        <span class="fa fa-edit blue"></span>
                                    </a>
                                    |
                                    <a href="#" data-id="{{ $photo->id }}" class="deleteRecord" data-toggle="tooltip"
                                       data-title="{{__('Delete')}}">
                                        <span class="fa fa-trash red"></span>
                                    </a>
                                    <input type="hidden" id="user_id" value="{{$photo->id}}">
                                    <form action="{{ route('galleries.destroy',  $photo->id) }}" id="delete-form"
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
                        {{$photos->links()}}
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
@push('js'))
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
                    url: "/admin/galleries/" + id,
                    type: "DELETE",
                    data: {
                        "id": id,
                        "_token": token
                    },
                    success: function (res) {
                        setTimeout(function () {
                           window.location.replace('/admin/galleries');
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

