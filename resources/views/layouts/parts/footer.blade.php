<footer class="footer-area pt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <ul class="widget-info">
                        @if(!empty($company))
                        <li><i class="ri-phone-fill"></i> <a href="tel:{{$company->phone}}">{{$company->phone}}</a></li>
                        <li><i class="ri-mail-line"></i> <a href="mailto:{{$company->email}}">{{$company->email}}</a></li>
                        <li><i class="ri-map-pin-line"></i>{{$company->address}}</li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="single-footer-widget">
                    <h3>لینکهای سریع</h3>
                    <ul class="footer-links-list">
                        <li><a href="#">درباره ما</a></li>
                        <li><a href="{{route('contact.index')}}">تماس با ما</a></li>
                        <li><a href="#">سوالات متداول</a></li>
                        <li><a href="#">حریم خصوصی</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="single-footer-widget">
                    <h3>درباره ما</h3>
                    <ul class="footer-links-list">
{{--                        <li><a href="gallery.html">گالری</a></li>--}}
                        <li><a href="#">درباره ما</a></li>
{{--                        <li><a href="contact.html">تماس با ما</a></li>--}}
{{--                        <li><a href="purchase-guide.html">راهنمای خرید</a></li>--}}
{{--                        <li><a href="terms-of-service.html">قوانین خدمات</a></li>--}}
                        <li><a href="#">سوالات متداول</a></li>
                        <li><a href="#">حریم خصوصی</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="single-footer-widget">
                    <h3>خدمات</h3>
                    <ul class="footer-links-list">
{{--                        <li><a href="pricing.html">قیمت گذاری</a></li>--}}
{{--                        <li><a href="services-details.html">دیجیتال مارکتینگ</a></li>--}}
{{--                        <li><a href="purchase-guide.html">راهنمای خرید</a></li>--}}
                        <li><a href="#">پشتیبانی</a></li>
                        <li><a href="#">بازخورد مشتریان</a></li>
{{--                        <li><a href="services-details.html">پردازش ابری</a></li>--}}
                        <li><a href="#">حریم خصوصی</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3>خبرنامه</h3>
                    <div class="widget-newsletter">
                        <div class="newsletter-content">
                            <p>بهترین راه حل برای راه اندازی کسب و کار خود در زمینه راه اندازی کسب و کار.</p>
                        </div>
                        <form class="newsletter-form" data-bs-toggle="validator">
                            <input type="email" class="input-newsletter" placeholder="آدرس ایمیل" name="EMAIL" required
                                   autocomplete="off">
                            <button type="submit"><i class="ri-send-plane-2-line"></i></button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                    <ul class="widget-social">
                        @if(!empty($company))
                        <li><a href="https://www.facebook.com/{{$company->facebook}}" target="_blank"><i
                                    class="ri-facebook-fill"></i></a></li>
                        <li><a href="https://www.twitter.com/{{$company->twitter}}" target="_blank"><i
                                    class="ri-twitter-fill"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/{{$company->linkedin}}" target="_blank"><i
                                    class="ri-linkedin-fill"></i></a></li>
                        <li><a href="https://www.instagram.com/{{$company->instagram}}" target="_blank"><i
                                    class="ri-instagram-fill"></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>تمام حقوق مادی و معنوی این وب سایت محفوظ و متعلق به شرکت پردازش ارقام یسنا می باشد</p>
            </div>
        </div>
    </div>
</footer>


<div class="go-top">
    <i class="ri-arrow-up-s-line"></i>
</div>


<script src="{{asset('assets/js/jquery.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>

<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.appear.js')}}"></script>

<script src="{{asset('assets/js/odometer.min.js')}}"></script>

<script src="{{asset('assets/js/nice-select.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('assets/js/fancybox.min.js')}}"></script>

<script src="{{asset('assets/js/TweenMax.min.js')}}"></script>

<script src="{{asset('assets/js/scrollbar.min.js')}}"></script>

<script src="{{asset('assets/js/horizontal-scrollbar.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

<script src="{{asset('assets/js/form-validator.min.js')}}"></script>

<script src="{{asset('assets/js/contact-form-script.js')}}"></script>

<script src="{{asset('assets/js/wow.min.js')}}"></script>

<script src="{{asset('assets/js/main.js')}}"></script>
