<div class="col-3">
    <div class="container">
        <div class="p-2">
            <a href="">
                <i class="fa fa-circle"></i>
                در انتظار پاسخ
            </a>
            <span  class="badge @if(count($open_tickets)>0)  bg-success @else  bg-info @endif float-start">{{count($open_tickets)}}</span>
        </div>
{{--        <div class="p-2">--}}
{{--            <a href="">--}}
{{--                <i class="fa fa-circle"></i>--}}
{{--                پاسخ داده شد--}}
{{--            </a>--}}
{{--            <span  class="badge @if(count($admin_comment)>0)  bg-success @else  bg-info @endif float-start">{{count($admin_comment)}}</span>--}}
{{--        </div>--}}
{{--        <div class="p-2">--}}
{{--            <a href="">--}}
{{--                <i class="fa fa-circle"></i>--}}
{{--                پاسخ مشتری--}}
{{--            </a>--}}
{{--            <span  class="badge @if(count($user_comment)>0)  bg-success @else  bg-info @endif float-start">{{count($user_comment)}}</span>--}}
{{--        </div>--}}
        <div class="p-2">
            <a href="">
                <i class="fa fa-circle"></i>
                بسته شده
            </a>
            <span  class="badge @if(count($closed_tickets)>0)  bg-grey @else  bg-info @endif float-start">{{count($closed_tickets)}}</span>
        </div>
        <div class="p-2">
            <a href="{{route('ticket.create')}}">
                <i class="fa fa-circle"></i>
                تیکت جدید
            </a>
        </div>
        <div class="p-2">
            <a href="{{route('profile.tickets')}}">
                <i class="fa fa-circle"></i>
                تیکت های من
            </a>
        </div>
    </div>
</div>