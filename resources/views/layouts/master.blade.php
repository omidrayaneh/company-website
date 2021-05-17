<!doctype html>
<html lang="fa" dir="rtl">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('keywords')
    @yield('description')
    @yield('title')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/nice-select.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/rtl.css')}}">

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/brands.min.js" integrity="sha512-vefaKmSAX3XohXhN50vLfnK12TPIO+4uRpHjXVkX726CqbicEiAQGRzsMTE+EpLkBk4noUcUYu6AQ5af2vfRLA==" crossorigin="anonymous"></script>--}}
    <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.ico')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @stack('css')
</head>
<body>
@include('sweet::alert')
@include('sweetalert::alert')

@include('layouts.parts.header')

@yield('content')





@include('layouts.parts.footer')
@stack('js')
</body>
</html>
