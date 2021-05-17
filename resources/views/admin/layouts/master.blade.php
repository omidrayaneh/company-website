<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App + jQuery">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <link rel="icon" type="image/x-icon" href="/admin/img/favicon.ico">
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/admin/vendor/_40fortawesome/fontawesome-free-webfonts/css/fa-brands.css">
    <link rel="stylesheet" href="/admin/vendor/_40fortawesome/fontawesome-free-webfonts/css/fa-regular.css">
    <link rel="stylesheet" href="/admin/vendor/_40fortawesome/fontawesome-free-webfonts/css/fa-solid.css">
    <link rel="stylesheet" href="/admin/vendor/_40fortawesome/fontawesome-free-webfonts/css/fontawesome.css">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="/admin/vendor/simple-line-icons/css/simple-line-icons.css">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="/admin/vendor/animate.css/animate.css">
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="/admin/vendor/whirl/dist/whirl.css">
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <!-- WEATHER ICONS-->
    <link rel="stylesheet" href="/admin/vendor/weather-icons/css/weather-icons.css">
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="/admin/css/bootstrap-rtl.css" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="/admin/css/app-rtl.css" id="maincss">
    <link rel="stylesheet" href="/admin/css/styles.css" >
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="/admin/js/script.js"></script>
    @yield('title')

    @stack('css')

</head>
<body>

@include('sweet::alert')
@include('sweetalert::alert')
{{--@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])--}}

<div class="wrapper">
    <!-- top navbar-->
@include('admin.layouts.parts.header')
<!-- sidebar-->
@include('admin.layouts.parts.side-bar')

<!-- Main section-->
@yield('content')
<!-- Page footer-->
@include('admin.layouts.parts.footer')
</div>
<!-- =============== VENDOR SCRIPTS ===============-->
<!-- MODERNIZR-->

<script src="/admin/vendor/modernizr/modernizr.custom.js"></script>
<!-- JQUERY-->
<script src="/admin/vendor/jquery/dist/jquery.js"></script>
<!-- BOOTSTRAP-->
<script src="/js/app.js"></script>

<script src="/admin/vendor/popper.js/dist/umd/popper.js"></script>
<script src="/admin/vendor/bootstrap/dist/js/bootstrap.js"></script>
<!-- STORAGE API-->
<script src="/admin/vendor/js-storage/js.storage.js"></script>
<!-- JQUERY EASING-->
<script src="/admin/vendor/jquery.easing/jquery.easing.js"></script>
<!-- ANIMO-->
<script src="/admin/vendor/animo/animo.js"></script>
<!-- SCREENFULL-->
<script src="/admin/vendor/screenfull/dist/screenfull.js"></script>
<!-- LOCALIZE-->
<script src="/admin/vendor/jquery-localize/dist/jquery.localize.js"></script>
<!-- =============== PAGE VENDOR SCRIPTS ===============-->
<!-- SLIMSCROLL-->
<script src="/admin/vendor/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- SPARKLINE-->
<script src="/admin/vendor/jquery-sparkline/jquery.sparkline.js"></script>
<!-- FLOT CHART-->
<script src="/admin/vendor/flot/jquery.flot.js"></script>
<script src="/admin/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.js"></script>
<script src="/admin/vendor/flot/jquery.flot.resize.js"></script>
<script src="/admin/vendor/flot/jquery.flot.pie.js"></script>
<script src="/admin/vendor/flot/jquery.flot.time.js"></script>
<script src="/admin/vendor/flot/jquery.flot.categories.js"></script>
<script src="/admin/vendor/jquery.flot.spline/jquery.flot.spline.js"></script>
<!-- EASY PIE CHART-->
<script src="/admin/vendor/easy-pie-chart/dist/jquery.easypiechart.js"></script>
<!-- MOMENT JS-->
<script src="/admin/vendor/moment/min/moment-with-locales.js"></script>
<!-- =============== APP SCRIPTS ===============-->
<script src="/admin/js/app.js"></script>

<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@stack('js')

</body>
</html>
