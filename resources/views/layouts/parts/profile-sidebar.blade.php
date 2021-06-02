<div class="col-3">
    <div class="container">
        <div class="p-2">
            <a href="">
                <i class="fa fa-circle"></i>
                در انتظار پاسخ
            </a>
            <span  class="badge @if(count($open_tickets)>0)  bg-success @else  bg-info @endif float-start">{{count($open_tickets)}}</span>
        </div>
        <div class="p-2">
            <a href="">
                <i class="fa fa-circle"></i>
                بسته شده
            </a>
            <span  class="badge @if(count($closed_tickets)>0)  bg-grey @else  bg-info @endif float-start">{{count($closed_tickets)}}</span>
        </div>
        <div class="p-2">
            <a href="{{route('profile')}}">
                <i class="fa fa-circle"></i>
                پروفایل
            </a>
        </div>
    </div>
</div>
