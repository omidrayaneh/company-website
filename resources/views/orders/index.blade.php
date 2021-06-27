@extends('layouts.master')
@push('title')
    <title>  {{__('App Name')}}</title>
@endpush
@section('content')
    <div class="contact-area ptb-100" id="app">
        <div class="container">
            <div class="contact-form">
                <h1>سفارش آنلاین</h1>
                    <div id="svg_wrap"></div>
                    <section>
                        <p>همکار یا مشتری</p>
                       <div class="row  ">
                           <div class="mb-0 alert alert-secondary col-12 d-flex justify-content-start">
                               <input  type="radio" onclick="location.href='{{route('colleague')}}'" id="y" name="custom" value="y">
                               <label  style="margin-top: -6px;margin-right: 4px;"  for="y">همکار هستم.</label>
                           </div>

                           <div class="mb-0 alert alert-secondary col-12 d-flex justify-content-start">
                               <input type="radio" onclick="location.href='customer'" id="n" name="custom" value="n">
                               <label  style="margin-top: -6px;margin-right: 4px;"  for="n">مشتری هستم</label>
                           </div>
                       </div>

                    </section>
            </div>
        </div>
    </div>
@endsection

