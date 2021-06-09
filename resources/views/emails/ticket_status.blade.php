</html>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>{{__('App Name')}} - {{__('Ticketing')}}</title>
</head>
<body dir="rtl">
<p>
    <span> با تشکر : </span>{{ ucfirst($ticketOwner->name) }}  عزیز ، برای تماس با تیم پشتیبانی {{__('App Name')}}.
</p>
<p>  تیکت به شناسه <span>{{ $ticket->ticket_id }}#</span> بسته شد </p>
<p>
    از طریق لینک زیر هر زمان می توانید تیکت را مشاهده کنید
</p>
<p>{{ url('profile/tickets/'. $ticket->ticket_id) }}</p>

</body>
</html>
