<div class="col-3">
    <div class="container">
        <div class="p-2">
            <a href="{{route('profile.tickets')}}">
                <i class="fa fa-circle"></i>
                در انتظار پاسخ
            </a>
            @if(auth()->user()->role != 'admin' && auth()->user()->role != 'manager')
                <span  class="badge @if(count($open_tickets)>0)  bg-success @else  bg-info @endif float-start">{{count($open_tickets)}}</span>
            @else
                <span  class="badge   bg-info  float-start">0</span>
            @endif
        </div>
        <div class="p-2">
            <a href="">
                <i class="fa fa-circle"></i>
                بسته شده
            </a>
            @if(auth()->user()->role != 'admin' && auth()->user()->role != 'manager')
                <span  class="badge @if(count($closed_tickets)>0)  bg-success @else  bg-info @endif float-start">{{count($closed_tickets)}}</span>
            @else
                <span  class="badge   bg-info  float-start">0</span>
            @endif
        </div>
        <div class="p-2">
            <a href="{{route('profile')}}">
                <i class="fa fa-circle"></i>
                پروفایل
            </a>
        </div>
    </div>
</div>
