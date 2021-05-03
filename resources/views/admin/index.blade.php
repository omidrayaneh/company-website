@extends('admin.layouts.master')
@section('styles')
    <script src="/admin/vendor/ckeditor/ckeditor.js"></script>
@endsection
@section('title')
    <title>{{__('App Name')}}</title>
@endsection
@section('content')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>
                    {{__('Dashboard')}}
                    <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <!-- START cards box-->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- START card-->
                    <div class="card flex-row align-items-center align-items-stretch border-0">
                        <div class="col-4 d-flex align-items-center bg-primary-dark justify-content-center rounded-left">
                            <em class="icon-cloud-upload fa-3x"></em>
                        </div>
                        <div class="col-8 py-3 bg-primary rounded-right">
                            <div class="h2 mt-0">1700</div>
                            <div class="text-uppercase">بارگذاری</div>
                        </div>

                    </div>
                </div>
                <div>
                     <textarea name="editor" id="editor" rows="10" cols="80"></textarea>
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- START card-->
                    <div class="card flex-row align-items-center align-items-stretch border-0">
                        <div class="col-4 d-flex align-items-center bg-purple-dark justify-content-center rounded-left">
                            <em class="icon-globe fa-3x"></em>
                        </div>
                        <div class="col-8 py-3 bg-purple rounded-right">
                            <div class="h2 mt-0">
                                700
                                <small>GB</small>
                            </div>
                            <div class="text-uppercase">سهمیه بندی</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-12">
                    <!-- START card-->
                    <div class="card flex-row align-items-center align-items-stretch border-0">
                        <div class="col-4 d-flex align-items-center bg-green-dark justify-content-center rounded-left">
                            <em class="icon-bubbles fa-3x"></em>
                        </div>
                        <div class="col-8 py-3 bg-green rounded-right">
                            <div class="h2 mt-0">500</div>
                            <div class="text-uppercase">بازبینی</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12">
                    <!-- START date widget-->
                    <div class="card flex-row align-items-center align-items-stretch border-0">
                        <div class="col-4 d-flex align-items-center bg-green justify-content-center rounded-left">
                            <div class="text-center">
                                <!-- See formats: https://docs.angularjs.org/api/ng/filter/date-->
                                <div class="text-sm" data-now="" data-format="MMMM"></div>
                                <br>
                                <div class="h2 mt-0" data-now="" data-format="D"></div>
                            </div>
                        </div>
                        <div class="col-8 py-3 rounded-right">
                            <div class="text-uppercase" data-now="" data-format="dddd"></div>
                            <br>
                            <div class="h2 mt-0" data-now="" data-format="h:mm"></div>
                            <div class="text-muted text-sm" data-now="" data-format="a"></div>
                        </div>
                    </div>
                    <!-- END date widget-->
                </div>
            </div>
            <!-- END cards box-->

        </div>
    </section>
@endsection
@push('js')
    <script src="{{asset('admin/js/ckeditor/ckeditor.js')}}" ></script>
    <script>
        CKEDITOR.replace('editor',{
            customConfig: 'config.js',
            toolbar: 'simple',
            language: 'fa',
            removePlugins: 'cloudservices, easyimage'
        });


    </script>
@endpush
