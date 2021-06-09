<div class="col-3">
    <div class="container">
        <div class="p-2">
            <a href="{{route('profile')}}" class="{{Route::is('profile')? 'profile-link active':'' }}">
                <i class="fa fa-circle"></i>
                پروفایل
            </a>
        </div>
        <div class="p-2">
            <a href="{{route('user.file')}}" class="{{Route::is('user.file')? 'profile-link active':'' }}">
                <i class="fa fa-circle"></i>
                ارسال فایل
            </a>
        </div>
        <div class="p-2">
            <a href="{{route('user.files')}}" class="{{Route::is('user.files')? 'profile-link active':'' }}">
                <i class="fa fa-circle"></i>
               فایل های من
            </a>
        </div>
        <div class="p-2">
            <a href="{{route('ticket.create')}}" class="{{Route::is('ticket.create')? 'profile-link active':'' }}">
                <i class="fa fa-circle"></i>
                تیکت جدید
            </a>
        </div>
        <div class="p-2">
            <a href="{{route('profile.tickets')}}" class="{{Route::is('profile.tickets')? 'profile-link active':'' }}">
                <i class="fa fa-circle"></i>
                تیکت های من
            </a>
        </div>
    </div>
</div>
