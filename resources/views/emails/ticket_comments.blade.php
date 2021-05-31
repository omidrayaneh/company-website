<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>{{__('App Name')}} - {{__('Ticketing')}}</title>
</head>
<body dir="rtl">
    <p>
        {{ $comment->comment }}
    </p>

    ---
    <p>ارسال شده توسط : {{ $user->name }}</p>

    <p> عنوان تیکت : {{ $ticket->title }}</p>
    <p> شناسه تیکت : {{ $ticket->ticket_id }}</p>
    <p> وضعیت تیکت : @if( $ticket->status ) باز @else بسته @endif</p>

    <p>
        از طریق لینک زیر هر زمان می توانید تیکت را مشاهده کنید
    </p>
    <p>{{ url('profile/tickets/'. $ticket->ticket_id) }}</p>

</body>
</html>
