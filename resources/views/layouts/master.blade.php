<!doctype html>
<html lang="fa" dir="rtl">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('keywords')
    @yield('description')
    @yield('author')

    <link rel="stylesheet" href="assets/css/bootstrap.rtl.min.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/css/meanmenu.css">

    <link rel="stylesheet" href="assets/css/remixicon.css">

    <link rel="stylesheet" href="assets/css/odometer.min.css">

    <link rel="stylesheet" href="assets/css/nice-select.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">

    <link rel="stylesheet" href="assets/css/fancybox.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="assets/css/rtl.css">
   @yield('title')
    <link rel="icon" type="image/png" href="/assets/images/favicon.ico">
</head>
<body>

@include('layouts.parts.header')

@yield('content')





@include('layouts.parts.footer')
</body>
</html>
