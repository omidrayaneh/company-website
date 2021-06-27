@extends('layouts.master')
@section('title')
    <title>صغحه مورد نظر پیدا نشد</title>
@endsection

@section('content')
    <div class="page-banner-area">
    <div class="error-area ptb-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="error-content">
                        <img src="/assets/images/404.png" alt="error">
                        <h3>خطای 404: صفحه پیدا نشد</h3>
                        <p>صفحه ای که به دنبال آن هستید ممکن است در صورت تغییر نام آن حذف شده باشد یا به طور موقت در دسترس
                            نباشد.</p>
                        <a href="/" class="default-btn">بازگشت به خانه <i
                                class="ri-arrow-left-line"></i><span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
