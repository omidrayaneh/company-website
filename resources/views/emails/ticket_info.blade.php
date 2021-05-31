<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>{{__('App Name')}} - {{__('Ticketing')}}</title>
</head>
<body dir="rtl">
    <p>
     <span> با تشکر : </span>{{ ucfirst($user) }}  عزیز ، برای تماس با تیم پشتیبانی {{__('App Name')}}.
    </p>
    <p>  تیکت پشتیبانی برای شما باز شد. تیکت شما به کارشناسان ما ارجاع داده خواهد شد و نتیجه به شما ایمیل می شود. جزئیات تیکت شما به شرح زیر می باشد.</p>

    <p> عنوان تیکت : {{ $ticket->title }} </p>
    <p>اولویت : {{ $ticket->priority }}  </p>
    <p>وضعیت تیکت : @if( $ticket->status ) باز @else بسته @endif  </p>
    <p>
       از طریق لینک زیر هر زمان می توانید تیکت را مشاهده کنید
    </p>
    <p>{{ url('profile/tickets/'. $ticket->ticket_id) }}</p>

</body>
</html>
